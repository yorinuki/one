<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Country extends Model
{
  protected $guarded = [
    'id','country_id','country_name','continents_id'
  ];
}
