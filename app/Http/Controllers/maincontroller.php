<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CompanyJobs;

class MainController extends Controller
{
  public function chooseType() {
    return view('choose-type');
  }

  public function loginPage() {
    return view('auth.login');
  }

  public function registerPage() {
    return view('auth.register');
  }

  public function homePage() {
    return view('main_new');
  }

  public function confirmedPage() {
    return view('confirmed');
  }

  public function chooseRegister($type) {
    $controller = app('App\Http\Controllers\MainController');

    $data = call_user_func_array([$controller, 'get'.ucfirst($type)], []);
    return $data;
  }

  // Returns TEMPLATE
  public function getCandidate() {
    return view('auth.register-candidate');
  }

  public function getCompany() {
    return view('auth.register-company');
  }

}
