<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyApplicants extends Model
{
  protected $table = 'company_applicants';
  protected $fillable = [
    'company_id',
    'job_id',
    'user_id',
    'status',
  ];

  public $timestamps = true;

  public function company() {
    return $this->belongsTo('App\Company', 'company_id', 'id');
  }

  public function user() {
    return $this->blongsTo('App\User', 'user_id', 'id');
  }

  public function job() {
    return $this->belongsTo('App\CompanyJobs', 'job_id', 'id');
  }
}
