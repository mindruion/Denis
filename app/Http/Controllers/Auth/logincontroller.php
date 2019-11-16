<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\User;

use Mail;
use Auth;
use Session;
use Validator;
use Carbon\Carbon;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function registerPost( Request $request ) {
      dd( $request->all() );

    }

    public function loginPost() {
      $rules = array(
        'email' => 'required|email|exists:users',
        'password' => 'required|min:6',
        // 'g-recaptcha-response' => 'required|captcha',
      );
      if( Input::get('remember') == '1') {
        $remember = false;
      } else {
        $remember = true;
      }

      dd('this works');

      $validator = Validator::make(Input::all() , $rules);

      if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)
            ->withInput(Input::except('password'));
      } else {
        $userdata = array(
          'email' => Input::get('email') ,
          'password' => Input::get('password')
        );

        if (Auth::attempt($userdata, $remember))
            return redirect('/');
        else {
          $validator->getMessageBag()->add('password', 'Wrong password');
          return redirect()->back()->withErrors($validator)
              ->withInput(Input::except('password'));
        }
      }
    }

    public function loginCompany( Request $request ){
      $data_send = $request->all();

      $user = User::where('email', $data_send['c_email'])->first();

      if ( !empty($user) ){
        $company = $user->company[0];
        $data_send['user_id'] = $company->user_id;
      } else
        Redirect::back()->withErrors(['c_email', 'There is no company with this email']);

      $rules = array(
        'user_id' => 'required|exists:companies',
        'password' => 'required|min:6',
        // 'g-recaptcha-response' => 'required|captcha',
      );
      if( Input::get('remember_company') == '1') {
        $remember = false;
      } else {
        $remember = true;
      }

      $validator = Validator::make($data_send , $rules);

      if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)
             ->withInput(Input::except('password'));
      } else {
        $userdata = array(
          'email' => $company->user->email,
          'password' => Input::get('password')
        );

        if (Auth::attempt($userdata, $remember))
            return redirect('/');
        else {
          $validator->getMessageBag()->add('password_company', 'Wrong password');
          return redirect()->back()->withErrors($validator)
              ->withInput(Input::except('password_company'));
        }
      }

    }

    public function logout() {
      Auth::logout();
      return redirect('/');
    }

}
