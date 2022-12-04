<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src=”https://cdn.jsdelivr.net/npm/vue-scrollto”></script>
    <script src="{{ mix('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <header id="l-header">
          <div class="p-header__index c-header js-float-menu">
            <h1 class="p-header__index-title c-header-title"><a href="{{ url('/') }}" class="p-header__index-title-link c-header-title-link">This Country?</a></h1>
            <nav class="p-header__index-nav c-header-nav">
              <ul class="p-header__index-ul c-header-ul">
                <li class="p-header__menu-item"><a class="p-header__index-link c-headerLink js-float-nav" href="/#about" v-scroll-to="anchor1">This Country?とは</a></li>
                <li class="p-header__menu-item"><a class="p-header__index-link c-headerLink js-float-nav" href="/#how" v-scroll-to="anchor2">サイトの使い方</a></li>
             @if (Route::has('login'))

                    @auth
                        <li class="p-header__index-list c-headerLink"><a class="p-header__link-list" href="/drills/select">クイズに挑戦</a>
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
         <h1 class="p-header__index-title-res c-header-title"><a href="{{ url('/') }}" class="p-header__index-title-link c-header-title-link">This Country?</a></h1>

          <div class="item">
           <button class="menu-trigger" id="menu05" @click="open=!open">
             <span></span>
             <span></span>
             <span></span>
           </button>
          </div>

        <nav class="p-header__nav-menu js-toggle-sp-menu-target">
          <ul class="p-header__menu">
            <li class="p-header__menu-item"><a class="p-header__menu-link js-close-nav" href="/#about" v-scroll-to="anchor1">This Country?とは</a></li>
            <li class="p-header__menu-item"><a class="p-header__menu-link js-close-nav" href="/#how" v-scroll-to="anchor2">サイトの使い方</a></li>
         @if (Route::has('login'))

                @auth
                    <li class="p-header__menu-item"><a class="p-header__menu-link" href="/drills/select">クイズに挑戦</a>
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

        @if(session('flash_message'))
          <div class="p-flash" role="alert">
            {{ session('flash_message') }}
          </div>
        @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>

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
