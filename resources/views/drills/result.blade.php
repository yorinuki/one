@extends('layouts.app')

@section('content')

<div class="p-res container" style="margin-top:70px;">
    <div class="p-res__row row justify-content-center">
        <div class="p-res__all col-md-12">
            <div class="p-res__card card">
                <div class="p-res__header card-header">お疲れ様でした！</div>

                        <div class="p-res__group">
                            <div class="p-res__box c-box">
                                <img src="/img/world2.jpg" class="p-res__img c-img">
                                <div class="p-res__box-right c-box-right">
                                  <div class="p-res__name c-cont-name">正解数</div>
                                  <div class="p-res__total c-total">{{ $result }}問／１０問中</div>
                                  <div class="p-res__submit-box">
                                    <button type="button" class="p-res__button c-back-button"><a href="/drills/select" class="p-res__back">難易度選択に戻る</a></button>
                                  </div>
                                </div>
                            </div>

                        </div>

            </div>
        </div>
    </div>
</div>

@endsection
