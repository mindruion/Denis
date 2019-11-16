<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\User;
use App\Company;
use App\CompanyAddresses;
use App\ContactPerson;

use Mail;
use Auth;
use Session;
use Carbon\Carbon;

use App\Http\Controllers\Auth\RegisterController;

class CompanyController extends Controller
{
  protected function validator(array $data)
  {
      return Validator::make($data, [
          'name' => ['required', 'string', 'max:255', 'unique:companies'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);
  }

  public function create(array $data) {
    $user = User::create([
      'name' => $data['user_name'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
      'remember_token' => str_random(40),
      'rights' => 2,
      'type' => 2,
      'email_token' => str_random(20),
      'email_confirmed' => 0
    ]);

    $cities = '';
    foreach ( $data['cities'] as $key => $city ) {
      $cities .= $city.' ';
    }

    $company = Company::create([
      'name' => $data['company_name'],
      'fisc_code' => $data['unique'],
      'user_id' => $user->id,
      'contact_person_id' => 0,
      'address_id' => 0,
      'rights' => 2,
      'type' => 2,
      'website' => $data['website'],
      'phone' => $data['phone'],
      'employees' => $data['employees'],
      'departments' => $data['department'],
      'industries' => $data['industry'],
      'cities' => $cities,
    ]);

    $addr = CompanyAddresses::create([
      'company_id' => $company->id,
      'country' => $data['l_country'],
      'city' => $data['l_city'],
      'street' => $data['l_street']
    ]);

    $contact_person = ContactPerson::create([
      'company_id' => $company->id,
      'last_name' => $data['l_name'],
      'first_name' => $data['f_name'],
      'email' => $data['email'],
      'phone' => $data['phone'],
      'job' => $data['job'],
      'm_country' => $data['m_country'],
      'm_city' => $data['m_city'],
      'm_street' => $data['m_street'],
    ]);

    $company->contact_person_id = $contact_person->id;
    $company->address_id = $addr->id;

    $company->save();

    return compact('company');
  }

  public function companySteps( Request $request, $step ) {
    $controller = app('App\Http\Controllers\CompanyController');

    $data = call_user_func_array([$controller, 'get'.ucfirst($step)], ['request' => $request]);
    return $data;
  }

  public function companyStepsPost( Request $request, $step ) {
    $controller = app('App\Http\Controllers\CompanyController');

    $data = call_user_func_array([$controller, 'set'.ucfirst($step)], array($request));

    return $data;
  }

  //Saves data in DB
  public function setStep1( $request ) {
    Session::put('company_1', $request->all());
    Session::save();

    return redirect('/register-company/step2');
  }

  public function setStep2( $request ) {
    Session::put('company_2', $request->all());
    Session::save();

    return redirect('/register-company/step3');
  }

  public function setStep3( $request ){
    Session::put( 'company_3', $request->all() );
    Session::save();
    $company = [];

    for ( $i = 1; $i < 4; $i++ ) {
      $label = 'company_';
      $data = Session::get($label.$i);

      if ( !empty($data) )
        foreach ( $data as $key => $value ){
          if ( $key != '_token' )
            $company[$key] = $value;
        }
    }

    $validator = $this->validator($user_data);

    if ( $validator->fails() ) {
      return redirect()->back()->withErrors($validator)->withInput(Input::all());;
    }

    $new_c = $this->create( $company );

    $send_mail = new RegisterController();
    $e_status = $send_mail->sendEmail($new_user->email, compact('company'), 'Hi ' . $new_user->name . ', please confirm your iJobs account', 'confirm_company');

    return redirect('/confirm-email');
  }

  // Returns front page
  public function getStep2( $request ) {
    return view('auth.register-company-step2');
  }

  public function getStep3( $request ) {
    return view('auth.register-company-step3');
  }
}
