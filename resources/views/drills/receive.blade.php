@extends('layouts.app')

@section('content')

<div class="p-rec container">
    <div class="p-rec__row row justify-content-center">
        <div class="p-rec__all col-md-12">
            <div class="p-rec__card card">
                <div class="p-rec__header card-header"></div>

                        <div class="p-rec__group">
                          <form method="POST" action="{{ route('drills.problem',[$cont,$diff]) }}">
                            @csrf
                            <div class="p-rec__box c-box">
                                <img src="/img/asia.jpg" class="p-rec__img c-img">
                                <div class="p-rec__box-right c-box-right">
                                  <div class="p-rec__name c-cont-name">アジア</div>
                                  <div class="p-rec__total c-total">全１０問</div>
                                  <div class="p-rec__text c-sub-text">難易度</div>
                                  <div class="p-rec__difficult c-sub-text">{{ $difficulty->difficulty_name }}</div>
                                  <div class="p-rec__submit-box">
                                    <button type="submit" class="p-rec__submit c-btn-submit">クイズを開始する!</button>
                                  </div>
                                  <div class="p-rec__submit-box">
                                    <button type="button" onClick="history.back()" class="p-rec__button c-back-button">戻る</button>
                                  </div>
                                </div>
                            </div>
                          </form>
                        </div>

            </div>
        </div>
    </div>
</div>
@endsection
