<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $table = 'companies';
  protected $fillable = [
    'user_id',
    'address_id',
    'name',
    'contact_person_id',
    'website',
    'phone',
    'fisc_code',
    'employees',
    'departments',
    'industries',
    'cities',
  ];
  public $timestamps = true;

  // TODO
  // To check if this relations works

  public function job() {
    return $this->belongsTo('App\CompanyJobs', 'id', 'company_id');
  }

  public function contactPerson() {
    return $this->belongsTo('App\ContactPerson', 'contact_person_id', 'id');
  }

  public function user() {
    return $this->belongsTo('App\User', 'user_id', 'id');
  }

  public function address(){
    return $this->belongsTo('App\CompanyAddresses', 'address_id', 'id');
  }
}
