@extends('layouts.app')

@section('content')
<div class="p-cont container">
    <div class="p-cont__row row justify-content-center">
        <div class="p-cont__all col-md-12">
            <div class="p-cont__card card">
                <div class="p-cont__header card-header">大陸と挑戦したい難易度を選択して下さい</div>

                        <div class="p-cont__group">
                          <form method="POST" action="{{ route('drills.receive')}}">
                            @csrf
                            <div class="p-cont__box c-box">
                                <img src="/img/asia.jpg" class="p-cont__img c-img">
                                <div class="p-cont__box-right c-box-right">
                                  <div class="p-cont__name c-cont-name">アジア</div>
                                  <div class="p-cont__sub-name c-sub-text">国・地域数</div>
                                  <div class="p-cont__total c-total">４２</div>
                                  <div class="p-cont__button-box">
                                      <input type="radio" name="continents_id" value="1" checked>
                                      <input type="radio" name="difficulty_id" value="1" id="easy" checked>
                                      <label for="easy" class="p-cont__label c-radio-box">Easy</label>
                                      <input type="radio" name="difficulty_id" value="2" id="nomal">
                                      <label for="nomal" class="p-cont__label c-radio-box">Nomal</label>
                                      <input type="radio" name="difficulty_id" value="3" id="hard">
                                      <label for="hard" class="p-cont__label c-radio-box">Hard</label>
                                      <input type="radio" name="difficulty_id" value="4" id="veryHard">
                                      <label for="veryHard" class="p-cont__label c-radio-box">Very Hard</label>
                                  </div>
                                  <div class="p-cont__submit-box">
                                    <button type="submit" name="continents_id" value="1" class="p-cont__submit c-btn-submit">選択</button>
                                  </div>
                                </div>
                            </div>
                            <div class="p-cont__box c-box">
                                <img src="/img/america.jpg" class="p-cont__img c-img">
                                <div class="p-cont__box-right c-box-right">
                                  <div class="p-cont__name c-cont-name">アメリカ</div>
                                  <div class="p-cont__sub-name c-sub-text">国・地域数</div>
                                  <div class="p-cont__total c-total">３５</div>
                                  <div class="p-cont__button-box">
                                    <input type="radio" name="america" value="1" id="easy">
                                    <label for="" class="p-cont__label c-radio-box">Easy</label>
                                    <input type="radio" name="america" value="2" id="nomal">
                                    <label for="" class="p-cont__label c-radio-box">Nomal</label>
                                    <input type="radio" name="america" value="3" id="hard">
                                    <label for="" class="p-cont__label c-radio-box">Hard</label>
                                    <input type="radio" name="america" value="4" id="veryHard">
                                    <label for="" class="p-cont__label c-radio-box">Very Hard</label>
                                  </div>
                                  <div class="p-cont__submit-box" style="text-align:center;">
                                    準備中・・・
                                  </div>
                                </div>
                            </div>
                            <div class="p-cont__box c-box">
                                <img src="/img/europe.jpg" class="p-cont__img c-img">
                                <div class="p-cont__box-right c-box-right">
                                  <div class="p-cont__name c-cont-name">ヨーロッパ</div>
                                  <div class="p-cont__sub-name c-sub-text">国・地域数</div>
                                  <div class="p-cont__total c-total">５４</div>
                                  <div class="p-cont__button-box">
                                    <input type="radio" name="" value="" id="easy">
                                    <label for="" class="p-cont__label c-radio-box">Easy</label>
                                    <input type="radio" name="" value="" id="nomal">
                                    <label for="" class="p-cont__label c-radio-box">Nomal</label>
                                    <input type="radio" name="" value="" id="hard">
                                    <label for="" class="p-cont__label c-radio-box">Hard</label>
                                    <input type="radio" name="" value="" id="veryHard">
                                    <label for="" class="p-cont__label c-radio-box">Very Hard</label>
                                  </div>
                                  <div class="p-cont__submit-box" style="text-align:center;">
                                    準備中・・・
                                  </div>
                                </div>
                            </div>
                            <div class="p-cont__box c-box">
                                <img src="/img/oceania.jpg" class="p-cont__img c-img">
                                <div class="p-cont__box-right c-box-right">
                                  <div class="p-cont__name c-cont-name">オセアニア</div>
                                  <div class="p-cont__sub-name c-sub-text">国・地域数</div>
                                  <div class="p-cont__total c-total">１６</div>
                                  <div class="p-cont__button-box">
                                    <input type="radio" name="" value="" id="easy">
                                    <label for="" class="p-cont__label c-radio-box">Easy</label>
                                    <input type="radio" name="" value="" id="nomal">
                                    <label for="" class="p-cont__label c-radio-box">Nomal</label>
                                    <input type="radio" name="" value="" id="hard">
                                    <label for="" class="p-cont__label c-radio-box">Hard</label>
                                    <input type="radio" name="" value="" id="veryHard">
                                    <label for="" class="p-cont__label c-radio-box">Very Hard</label>
                                  </div>
                                  <div class="p-cont__submit-box" style="text-align:center;">
                                    準備中・・・
                                  </div>
                                </div>
                            </div>
                            <div class="p-cont__box c-box">
                                <img src="/img/africa.jpg" class="p-cont__img c-img">
                                <div class="p-cont__box-right c-box-right">
                                  <div class="p-cont__name c-cont-name">アフリカ</div>
                                  <div class="p-cont__sub-name c-sub-text">国・地域数</div>
                                  <div class="p-cont__total c-total">５４</div>
                                  <div class="p-cont__button-box">
                                    <input type="radio" name="" value="" id="easy">
                                    <label for="" class="p-cont__label c-radio-box">Easy</label>
                                    <input type="radio" name="" value="" id="nomal">
                                    <label for="" class="p-cont__label c-radio-box">Nomal</label>
                                    <input type="radio" name="" value="" id="hard">
                                    <label for="" class="p-cont__label c-radio-box">Hard</label>
                                    <input type="radio" name="" value="" id="veryHard">
                                    <label for="" class="p-cont__label c-radio-box">Very Hard</label>
                                  </div>
                                  <div class="p-cont__submit-box" style="text-align:center;">
                                    準備中・・・
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
