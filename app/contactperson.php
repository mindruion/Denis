<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
  protected $table = 'companies_contact_persons';
  protected $fillable = [
    'company_id',
    'first_name',
    'last_name',
    'email',
    'job',
    'phone',
    // Mailing Address of the company
    'm_country',
    'm_city',
    'm_street',
  ];
  public $timestamps = true;

  public function company() {
    return $this->hasOne('App\User', 'contact_person_id', 'id');
  }
}
