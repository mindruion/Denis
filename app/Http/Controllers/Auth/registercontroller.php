<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Mail;
use Carbon\Carbon;
use Auth;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'remember_token' => str_random(40),
            'type' => 1,
            'rights' => 1,
            'email_token' => str_random(20),
            'email_confirmed' => 0
        ]);
    }

    public function confirmEmail( $code ) {
      $user = User::where('email_token', $code)->first();

      if ( !empty($user) )
        User::where('id', $user->id)->update([
          'email_confirmed' => 1
        ]);
      else {
        Session::put('alert-msg', 'An error happend while trying to confirm your account');
        Session::save();

        return redirect('/register');
      }

      return redirect('/confirmed');
    }

    public function registerPost( Request $request ) {
      $user_data = $request->all();
      $validator = $this->validator($user_data);

      if ( $validator->fails() ) {
        return redirect()->back()->withErrors($validator)->withInput(Input::all());;
      }

      $new_user = $this->create($user_data);

      $e_status = $this->sendEmail($new_user->email, compact('new_user'), 'Hi ' . $new_user->name . ', please confirm your iJobs account', 'confirm_email');

      if ( $e_status !== 200 ) {
        Session::put('alert-msg', 'Failed to send Email');
        Session::save();

        return redirect()->back();
      }
        Session::put('success-msg', 'Now you can login with your credentials');
        Session::save();

      return redirect('/login');
    }

    public function sendEmail($email, $content, $subject, $type = 'default')
    {
      $companyEmail = 'support@ijobs.com';
      $emailFrom = 'iJobs Support Team';

      Mail::send('emails.' . $type, $content, function ($message) use ($email, $subject, $companyEmail, $emailFrom)
      {
          $message->from($companyEmail, $emailFrom);

          $message->to($email)->subject($subject);
      });

      return 200;
      // return \Response::json(['status' => 'Success'], 200);
    }

    public function sendEmailConfirmationCode( $user, $password, $company = null) {
      $email_code = str_random(40);
      DB::table('user_email_codes')
        ->insert([
          'user_id' => $user->id,
          'email_code' => $email_code,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);

      $content['code'] = $email_code;
      $content['password'] = $password;
      $content['email'] = $user->email;
      $content['user'] = $user;

      if ( !isset($company) )
        $this->sendEmail($user->email, $content, 'Hi ' . $user->name . ', please verify your CDA Cargo account', 'confirm_email');
      else {
        $content['company_name'] = $company;
        $this->sendEmail($user->email, $content, 'Hi ' . $company->name . ', please verify your CDA Cargo account', 'confirm_company');
      }

    }


}
