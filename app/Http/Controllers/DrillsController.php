<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Drill;
use App\FiveContinent;
use App\Country;
use App\Difficult;

class DrillsController extends Controller
{
  public function new()
  {
    $continents = FiveContinent::all();
    $difficulty = Difficult::all();
    $countries = Country::all();

    return view('drills.new',compact('continents','difficulty','countries'));
  }
  public function select()
  {
    return view('drills.select');
  }
  public function kiyaku()
  {
    return view('drills.kiyaku');
  }
  public function receive(Request $request){
    $cont = $request->input('continents_id');
    $diff = $request->input('difficulty_id');
    $continent = Drill::where('continents_id',$cont)->get();
    $difficult = Drill::where('difficulty_id',$diff)->get();
    $continents = FiveContinent::where('continents_id',$cont)->first();
    $difficulty = Difficult::where('difficulty_id',$diff)->first();
    return view('drills.receive',compact('cont','diff','continent','difficult','continents','difficulty'));
  }
  public function problem(Request $request,$cont,$diff)
  {
    $continents = FiveContinent::where('continents_id',$cont)->first();
    $difficulty = Difficult::where('difficulty_id',$diff)->first();
    $problem = Drill::where('continents_id','=',$cont)
                    ->where('difficulty_id','=',$diff)->inRandomOrder()->take(10)->get();
    return view('drills.problem',compact('continents','difficulty','problem'));
  }
  public function result(Request $request)
  {
    $result = $request->input('resultScore');
    return view('drills.result',compact('result'));
  }
  public function create(ValidRequest $request)
  {
    $dir = 'img';
    $file_name = $request->file('img')->getClientOriginalName();
    $request->file('img')->storeAs('public/'.$dir,$file_name);

    $drill = new Drill;
    $drill->country_id = $request->country_id;
    $drill->continents_id = $request->continents_id;
    $drill->difficulty_id = $request->difficulty_id;
    $drill->img = 'storage/'.$dir. '/'.$file_name;
    $drill->area_name = $request->area_name;
    $drill->save();

    //Auth::user()->drills()->save($drill->fill($request->all());

    //$drill->fill($request->all())->save();

    return redirect()->route('drills.new')->with('flash_message', __('Registered'));

  }


}
