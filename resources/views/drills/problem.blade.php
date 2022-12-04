@extends('layouts.app')

@section('content')

@php
$drill1 = $problem[0]
@endphp
@php
$drill2 = $problem[1]
@endphp
@php
$drill3 = $problem[2]
@endphp
@php
$drill4 = $problem[3]
@endphp
@php
$drill5 = $problem[4]
@endphp
@php
$drill6 = $problem[5]
@endphp
@php
$drill7 = $problem[6]
@endphp
@php
$drill8 = $problem[7]
@endphp
@php
$drill9 = $problem[8]
@endphp
@php
$drill10 = $problem[9]
@endphp

<!--
<div class="p-pro__img-box">
  <img :src="'http://localhost:8000/'+drill1.img" class="p-pro__img">
</div>
-->




 <div class="p-pro container">
    <div class="p-pro__row row justify-content-center">
        <div class="p-pro__all col-md-12">
            <div class="p-pro__card card">
                <div class="p-pro__header card-header">{{ $continents->continents_name }} {{ $difficulty->difficulty_name }}</div>
                <form method="POST" action="{{ route('drills.result')}}">
                  @csrf
                    <div id="app">
                     <example-component :drill1="{{ $drill1 }}" :drill2="{{ $drill2 }}" :drill3="{{ $drill3 }}"
                     :drill4="{{ $drill4 }}" :drill5="{{ $drill5 }}" :drill6="{{ $drill6 }}" :drill7="{{ $drill7 }}"
                     :drill8="{{ $drill8 }}" :drill9="{{ $drill9 }}" :drill10="{{ $drill10 }}"></example-component>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
