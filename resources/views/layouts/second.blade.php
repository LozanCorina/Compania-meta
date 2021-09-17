<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>
<title>comania-meta.md</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('front_assets/images/icons/icon1.png')}}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                                  <li>
                                      <a class="nav-link" href="{{route('acasa')}}">Acas&#259; <span class="sr-only"></span></a>
                                  </li>
                                  <li>
                                    <a class="nav-link" href="{{route('crud.index')}}"> Parteneri </a>
                                  </li>
                                  <li>
                                    <a class="nav-link" href="{{route('message.index')}}"> Mesaje </a>
                                  </li>
                                  <li>
                                    <a  class="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                     </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>                               
                              </ul>
                          </div>

                      </div>
                  </div>
              </div>
          </nav>
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
                        <li> <a href="{{ route('login') }}"> Logare client </a></li>
                        <li> <a href=""> &#206;nregistrare </a></li>              
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
