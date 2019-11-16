<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyJobs extends Model
{
  protected $table = 'company_jobs';
  protected $fillable = [
    'company_id',
    'title',
    'job',
    'description',
    'location',
    'price',
    'status',
  ];

  public $timestamps = true;

  public function company() {
    return $this->belongsTo('App\Company', 'company_id', 'id');
  }

  public function user() {
    return $this->blongsTo('App\User', 'user_id', 'id');
  }
}
