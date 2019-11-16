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

use Storage;
use Image;
use Mail;
use Auth;
use Session;
use Carbon\Carbon;

class CompanyProfile extends Controller
{
  public function profile() {
    $user = Auth::user()->company[0];
    $company = Company::where('id', $user->id)->first();
    $jobs = CompanyJobs::where('company_id', $company->id);

    return view('profiles.company-profile', compact('company', 'jobs'));
  }

  public function addJob() {
    if ( Auth::user() && Auth::user()->rights == 2 )
      $company = Auth::user()->company[0];
    else
      return redirect('/login');

    return view('profiles.add-job', compact('company'));
  }

  public function addLogo( Request $request ){
    if ( Input::hasFile('company_logo') ) {
      $image = Input::file('company_logo');
      $fileName = 'logo-'.time().'.'.$image->getClientOriginalExtension();

      $img = Image::make($image->getRealPath());
      $img->stream();

      Storage::disk('public')->put('images/companies_logos/' . $fileName , $img, 'public');

      if ( empty(Auth::user()) )
        return redirect('/login');

      $file = 'images/companies_logos/' . $fileName;
      $company = Company::where('user_id', Auth::user()->id)->first();

      if ( !empty($company) ) {
        if ( !empty($company->logo) )
          Storage::delete($company->logo);

        $company->logo = $file;
        $company->save();
      } else
        return response()->json(['status' => '500', 'msg' => 'Please login as a company']);

    } else
      return 500;

    return 200;
  }

  public function registerJob( Request $request ) {
    // dd($request->all());

    CompanyJobs::create([
      'company_id' => $request->id,
      'title' => $request->title,
      'job' => $request->job,
      'description' => $request->description,
      'location' => $request->location,
      'price' => $request->price,
      'status' => 0
    ]);

    return redirect('/');
  }
}
