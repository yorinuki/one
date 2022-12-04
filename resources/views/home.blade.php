@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:70px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインしました

                    <div class="p-rec__submit-box">
                      <a href="/"><button class="p-rec__submit c-btn-submit">トップページに戻る</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
