<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Difficult extends Model
{
  protected $table = 'difficulty';
  protected $guarded = [
    'id'
  ];
}
