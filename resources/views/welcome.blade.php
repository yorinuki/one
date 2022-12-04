<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>This Country?</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">


    </head>
    <body>
      <header id="l-header">
          <div class="p-header__index c-header js-float-menu">
            <h1 class="p-header__index-title c-header-title"><a href="{{ url('/home') }}" class="p-header__index-title-link c-header-title-link">This Country?</a></h1>
            <nav class="p-header__index-nav c-header-nav">
              <ul class="p-header__index-ul c-header-ul">
                <li class="p-header__menu-item"><a class="p-header__index-link c-headerLink js-float-nav" href="#about" v-scroll-to="anchor1">This Country?とは</a></li>
                <li class="p-header__menu-item"><a class="p-header__index-link c-headerLink js-float-nav" href="#how" v-scroll-to="anchor2">サイトの使い方</a></li>
             @if (Route::has('login'))

                    @auth
                        <li class="p-header__index-list c-headerLink"><a class="p-header__link-list" href="drills/select">クイズに挑戦</a>
                        <li class="p-header__index-register c-headerLink"><a class="p-header__link-register" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li class="p-header__index-login c-headerLink"><a class="p-header__link-login" href="{{ route('login') }}">{{ __('Login') }}</a></li>

                        @if (Route::has('register'))
                         <li class="p-header__index-register c-headerLink"><a class="p-header__link-register" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif
                    @endauth
             @endif
              </ul>
            </nav>
          </div>

       <div class="p-header__index-res c-header-res">
         <h1 class="p-header__index-title-res c-header-title"><a href="{{ url('/home') }}" class="p-header__index-title-link c-header-title-link">This Country?</a></h1>

          <div class="item" id="app">
           <button class="menu-trigger" id="menu05" @click="open=!open">
             <span></span>
             <span></span>
             <span></span>
           </button>
          </div>

        <nav class="p-header__nav-menu js-toggle-sp-menu-target">
          <ul class="p-header__menu">
            <li class="p-header__menu-item"><a class="p-header__menu-link js-close-nav" href="#about" v-scroll-to="anchor1">This Country?とは</a></li>
            <li class="p-header__menu-item"><a class="p-header__menu-link js-close-nav" href="#how" v-scroll-to="anchor2">サイトの使い方</a></li>
         @if (Route::has('login'))

                @auth
                    <li class="p-header__menu-item"><a class="p-header__menu-link" href="drills/select">クイズに挑戦</a>
                    <li class="p-header__menu-item"><a class="p-header__menu-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <li class="p-header__menu-item"><a class="p-header__menu-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>

                    @if (Route::has('register'))
                     <li class="p-header__menu-item"><a class="p-header__menu-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif
                @endauth
         @endif
          </ul>
        </nav>

       </div>

      </header>

      <main id="l-main">

        <section class="p-top">
          <h2 class="p-top__title">ストリートビューの画像から国名当てに挑戦しましょう！</h2>
          <p class="p-top__sub">全世界で200にも及ぶ国と地域から出題</p>
          <p class="p-top__sub">あなたはどれだけ正解することができるか？</p>
          <img class="p-top__img" src="/img/WorldMap.png">
        </section>

        <section id="about" class="p-about">
          <h2 class="p-about__back-title">What This Country?</h2>
          <h2 class="p-about__title">What This Country?</h2>
          <h3 class="p-about__sub-title">国境・文化・地域を越えよう</h3>
          <p class="p-about__text">This Country?とは世界各国のストリートビューの画像から国名を当てるクイズサービスです。</p>
          <p class="p-about__text">クイズを楽しみながら、国名や地理の勉強にもなります。</p>
          <p class="p-about__text">※国・地域の定義は、外務省 – 国・地域に準じています。</p>
          <p class="p-about__text">※ストリートビューに対応していない国・地域もあります。</p>
          <div class="p-about__img-area">
            <div class="p-about__img-box">
              <div class="p-about__img-block1 c-img-block">
                <img src="/img/top1.jpg">
              </div>
              <div class="p-about__img-block2 c-img-block">
                <img src="/img/top5.jpg">
              </div>
              <div class="p-about__img-block3 c-img-block">
                <img src="/img/top8.jpg">
              </div>
            </div>
            <div class="p-about__img-box">
              <div class="p-about__img-block1 c-img-block">
                <img src="/img/top2.jpg">
              </div>
              <div class="p-about__img-block2 c-img-block">
                <img src="/img/top7.jpg">
              </div>
              <div class="p-about__img-block3 c-img-block">
                <img src="/img/top4.jpg">
              </div>
            </div>
            <div class="p-about__img-box">
              <div class="p-about__img-block1 c-img-block">
                <img src="/img/top9.jpg">
              </div>
              <div class="p-about__img-block2 c-img-block">
                <img src="/img/top6.jpg">
              </div>
              <div class="p-about__img-block3 c-img-block">
                <img src="/img/top3.jpg">
              </div>
            </div>
          </div>
        </section>

        <section id="how" class="p-how">
          <h2 class="p-how__back-title">How To This Country?</h2>
          <h2 class="p-how__title">How To This Country?</h2>
          <h3 class="p-how__sub-title">This Country?の使い方</h3>
          <p class="p-how__text">使い方はたったの３ステップ！</p>
          <ul class="p-how__lists">
            <li class="p-how__list">
              <span class="p-how__label">step 1</span>
              <div class="p-how__font1 c-how-font"><i class="fa-solid fa-address-card"></i></div>
              <h4 class="p-how__list-title">アカウントの登録</h4>
              <p class="p-how__list-text">ユーザー登録は無料でおこなえます。</br>メールアドレスとパスワードを設定するだけ！</p>
              <div class="p-how__img-box">
                <img src="/img/how1.png">
              </div>
            </li>
            <li class="p-how__list">
              <span class="p-how__label">step 2</span>
              <div class="p-how__font2 c-how-font"><i class="fa-solid fa-globe"></i></div>
              <h4 class="p-how__list-title">クイズに挑戦する大陸を選択</h4>
              <p class="p-how__list-text">挑戦する国・地域を５つの大陸から選択。</p>
              <div class="p-how__img-box">
                <img src="/img/how2.png">
              </div>
            </li>
            <li class="p-how__list">
              <span class="p-how__label">step 3</span>
              <div class="p-how__font3 c-how-font"><i class="fa-solid fa-keyboard"></i></div>
              <h4 class="p-how__list-title">回答を入力</h4>
              <p class="p-how__list-text">ランダムで表示される画像から回答を入力！</br>国・地域名はリストの中から選べばOK!</p>
              <div class="p-how__img-box">
                <img src="/img/how3.png">
              </div>
            </li>
          </ul>
        </section>

        <section id="start" class="p-start">
          <div class="p-start__box">
            <img class="p-start__img" src="/img/icon.gif">
            <p class="p-start__text">さあ始めましょう！</p>
            <button class="p-start__button"><a href="/drills/select" class="p-start__button-text">開始</a></button>
          </div>
        </section>

      </main>

      <footer id="footer">
        <nav class="p-footer">
          <ul class="p-footer__ul">
            <li class="p-footer__list"><a href="index.php">HOME</a></li>
            <li class="p-footer__list"><a href="drills/kiyaku">利用規約</a></li>
          </ul>
        </nav>

        <div class="p-footer__copy">
        Copyright © For You All Rights Reserved.
        </div>

      </footer>

    <script type="text/javascript" src="/js/footerFixed.js"></script>
    <script src=”https://cdn.jsdelivr.net/npm/vue-scrollto”></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
    $(function(){
     $('.menu-trigger').on('click', function() {
       $(this).toggleClass('active');
       $('.js-toggle-sp-menu-target').toggleClass('active');
        return false;
      });
      $('.js-close-nav').on('click',function(){
        $('.menu-trigger').toggleClass('active');
        $('.js-toggle-sp-menu-target').toggleClass('active');
      });
    });
    </script>
    </body>
</html>
