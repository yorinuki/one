<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drill extends Model
{
    //ソフトデリート
    use SoftDeletes;

    protected $fillable = [
      'country_id','continents_id','difficulty_id','img','area_name','created_at','updated_at'
    ];
    //userモデルとのリレーション
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    protected static function boot()
    {
      parent::boot();

      self::saving(function($u_id){
        $u_id->user_id = \Auth::id();
      });
    }
}
