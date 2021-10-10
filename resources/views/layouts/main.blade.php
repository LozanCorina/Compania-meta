<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>
    <title>comania-meta.md</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front_assets/images/icons/icon1.png')}}">

    <!--Data tables js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"></link>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap4 files-->
    <script src="{{ asset('front_assets/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('front_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="{{asset('front_assets/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="{{asset('front_assets/plugins/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('front_assets/plugins/owlcarousel/assets/owl.theme.default.css')}}" rel="stylesheet">
    <script src="{{asset('front_assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- plugin: slickslider -->
    <link href="{{asset('front_assets/plugins/slickslider/slick.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front_assets/plugins/slickslider/slick-theme.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('front_assets/plugins/slickslider/slick.min.js')}}"></script>

    <!-- custom style -->
    <link href="{{asset('front_assets/css/ui.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('front_assets/css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="{{asset('front_assets/js/script.js')}}" type="text/javascript"></script>

    <!-- our styles -->
    <link href="{{asset('front_assets/css/styles.css')}}" rel="stylesheet" type="text/css" />



    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code
        });
        // jquery end
    </script>

</head>
<body>
<header class="section-header">
    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
        <div class="container">
            <div class="row" style="width:100%;">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav d-flex justify-content-left align-items-center py-1">
                            <li class="{{'/'== request()->path() ? 'active':''}}">
                                <a class="nav-link" href="{{route('acasa')}}">Home <span class="sr-only"></span></a>
                            </li>
                            <li class="{{'parteneri'== request()->path() ? 'active':''}}">
                                <a class="nav-link" href="{{route('pages','parteneri')}}"> Parteneri </a>
                            </li>
                            <li class="{{'despre'== request()->path() ? 'active':''}}">
                                <a class="nav-link" href="{{route('pages','despre')}}"> Despre noi </a>
                            </li>
                            <li class="{{'contacte'== request()->path() ? 'active':''}}">
                                <a class="nav-link" href="{{route('pages','contacte')}}"> Contacte </a>
                            </li>
                            <li>
                                <div class="col-auto">
                                    <div class="widget-header dropdown">
                                        <a href="{{ route('login') }}" data-toggle="dropdown" data-offset="20,10">
                                            <div class="icontext">
                                                <div class="icon-wrap"><i class="text-dark icon-sm fa fa-user"></i>
                                                </div>
                                                <div class="text-wrap text-secondary">
                                                    @if (Auth::check())

                                                        {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                                                    @else
                                                        Logare <i class="fa fa-caret-down"></i>
                                                    @endif
                                                </div>
                                            </div>
                                        </a>

                                        <div class="dropdown-menu">
                                            <form method="POST" action="{{ route('login') }}" class="px-4 py-3">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Adresa de email</label>
                                                    <input id="email" type="email" placeholder="email@example.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Parola</label>
                                                    <input id="password" type="password" placeholder="Parola" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="" for="remember">
                                                        {{ __('Memoreaza-mă') }}
                                                    </label>
                                                </div>
                                                <button type="submit" onClick="this.form.submit(); this.disabled=true; " class="btn btn-primary">Logare</button>
                                            </form>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <hr class="dropdown-divider">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                            @if (Route::has('register'))
                                                <a class="dropdown-item" href="{{route('register')}}">Ai un cont? Înregistrează-te</a>
                                            @endif

                                            @if (Route::has('password.request'))
                                                <a class="dropdown-item" href="{{ route('password.request') }}">Ai uitat parola?</a>
                                            @endif
                                        </div> <!--  dropdown-menu .// -->
                                    </div>  <!-- widget-header .// -->
                                </div> <!-- col.// -->
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </nav>
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="brand-wrap">
                        <img  src="{{asset('front_assets/images/icons/logo.jpg')}}" style=" border-radius: 40%; height: 70px;">
                        <h2 class="logo-text font-weight-bold text-secondary">Sport Analysis</h2>
                    </div> <!-- brand-wrap.// -->
                </div>
                <div class="col-md-4">

                </div> <!-- col.// -->
                <div class="col-md-4">
                    <form action="" method="GET" class="widget-header float-right">
                        <div class="input-group">
                            <input id="inp" type="text" name="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Search">
                            <span class="input-group-text border-0 bg-secondary" id="search-addon">
                                    <i class="fas fa-search"></i>
                                </span>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
</header> <!-- section-header.// -->

<!-- ========================= SECTION CONTENT  ========================= -->
@yield('content')

<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg-primary">
    <div class="container">
        <section class="footer-top padding-top">
            <div class="row">
                <aside class="col-sm-3  col-md-3 white">
                    <h5 class="title">Contul meu</h5>
                    <ul class="list-unstyled">
                        @if (Auth::check())
                        <li> <a href="{{ route('dashboard') }}"> Dashboard</a></li>
                        @endif
                        <li> <a href="{{ route('login') }}"> Logare client </a></li>
                        <li> <a href="{{route('register')}}"> &#206;nregistrare </a></li>
                        <li> <a href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </aside>
            </div> <!-- row.// -->
            <br>
        </section>
    </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->

</body>
</html>
