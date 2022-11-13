<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang('main.title') @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/starter-template.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lang.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">@lang('main.title')</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('home') }}">@lang('main.all_products')</a>
                </li>
                <li >
                    <a href="{{ route('showCategories') }}">@lang('main.category')</a>
                </li>
                <li >
                    <a href="#">@lang('main.bascket')</a>
                </li>
                <li>
                    <a href="#">@lang('main.defoult')</a>
                </li>
                

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">₽</a></li>
                        <li><a href="#">$</a></li>
                        <li><a href="#">€</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">                
                <li><a href="#">@lang('main.orders')</a></li>
                <li><a href="#">@lang('main.out')</a></li>
            </ul>
            <div class="dropdown-lang">
                <button class="dropbtn-lang">
                  <a class="lang" href="#">
                    <i class="fa fa-language"></i>
                  </a>
                </button>
                <div class="">
                  <a href="{{ route('changeLocale', 'ro') }}">Ro</a>
                  <a href="{{ route('changeLocale', 'ru') }}">Ru</a>
                  <a href="{{ route('changeLocale', 'en') }}">Eng</a>
                </div>
            </div>
        </div>
    </div>
</nav>

@yield('content')
</body>
</html>
