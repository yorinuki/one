<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class FiveContinent extends Model
{
    protected $table = 'five_continents';
    protected $guarded = [
      'id','continents_id','continents_name'
    ];
}
