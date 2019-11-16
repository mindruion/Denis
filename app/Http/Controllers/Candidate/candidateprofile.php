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
use App\CompanyJobs;
use App\CompanyApplicants;

use Mail;
use Auth;
use Session;
use Carbon\Carbon;

class CandidateProfile extends Controller
{
  public function profile() {
    $user = Auth::user();
    $jobs = null;

    if ( !empty($user) ) {
      $applications = CompanyApplicants::where('user_id', $user->id);
    }

    return view('profiles.candidate-profile', compact('user', 'applications'));
  }

  public function editProfile( Request $request ) {
    dd($request->all());
  }

}
