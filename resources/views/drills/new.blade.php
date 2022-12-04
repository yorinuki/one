@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:70px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Drill Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('drills.create') }}" enctype='multipart/form-data'>
                        @csrf

                        <div class="form-group row">
                            <label for="continents" class="col-md-4 col-form-label text-md-right">{{ __('Continents') }}</label>

                            <div class="col-md-6">
                              <select type="text" class="form-control @error('continents') is-invalid @enderror" name="continents_id" autofocus>
                              @foreach($continents as $continent)
                                <option value="{{ $continent->continents_id}}">{{ $continent->continents_name }}</option>
                              @endforeach
                              </select>
                                @error('continents')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                              <select type="text" class="form-control @error('country') is-invalid @enderror" name="country_id" autofocus>

                              @foreach($countries as $country)
                                <option value="{{ $country->country_id}}">{{ $country->country_name }}</option>
                              @endforeach
                              </select>

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="difficulty" class="col-md-4 col-form-label text-md-right">{{ __('Difficulty') }}</label>

                              <div class="col-md-6">
                                <select type="text" class="form-control @error('difficulty') is-invalid @enderror" name="difficulty_id" value="{{ old('difficulty_id' )}}" autofocus>

                              @foreach($difficulty as $difficult)
                                <option value="{{ $difficult->difficulty_id}}">{{ $difficult->difficulty_name }}</option>
                              @endforeach
                                </select>

                                @error('difficulty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                        </div>


                      <div class="p-note">
                        <p class="p-note__title">問題用登録画像アップロード</p>
                        <p class="p-note__text">※画像はJPEG・PNG・GIF形式のみです。(最大10MBまで)</p>
                      </div>

                        <div class="p-pho form-group row">

                            <label for="img" class="p-pho__label col-md-4 col-form-label text-md-right">{{ __('Problem') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                                <input id="img" type="file" class="p-pho__input form-control js-input-file @error('img') is-invalid @enderror" name="img"
                                value="{{old('img')}}" autocomplete="image" autofocus>

                                <img alt="" class="p-pho__img js-icon-img">
                                <p class="p-pho__img-text">クリックして画像を選択</p>

                                @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="p-area form-group row">
                          <p class="p-area__text">※問題の回答時に表示する場所の詳細を入力して下さい(例：東京都新宿区)</p>

                            <label for="area_name" class="p-area__label col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>

                            <div class="col-md-6">
                                <input id="area_name" type="text" class="p-area__input form-control js-input-file @error('area_name') is-invalid @enderror" name="area_name"
                                value="{{old('area_name')}}" autocomplete="area_name" autofocus placeholder="20文字以内">

                                @error('area_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>




                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    登録する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
//画像ライブプレビュー
$(function(){
  $(document).on('change','.js-input-file',function(e){
    $img = $(this).siblings('.js-icon-img');
    var fileReader = new FileReader();

   fileReader.onload = function(e){
     $img.attr('src',e.target.result).show();
   };
   fileReader.readAsDataURL(e.target.files[0]);
  });
});

</script>
@endsection
