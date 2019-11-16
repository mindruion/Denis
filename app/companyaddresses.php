<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyAddresses extends Model
{
  protected $table = 'companies_addresses';
  protected $fillable = [
    'company_id',
    'country',
    'city',
    'street',
  ];
  public $timestamps = true;

  public function company() {
    return $this->hasMany('App\Company', 'id', 'address_id');
  }
}
