@extends('layouts.main')
        <!-- ========================= SECTION INTRO ========================= -->
        @section('content')
<section id="intro" class="intro bg-secondary pt-5">
	<div class="container">
		<div class="row d-flex" style="min-height:600px;">
            <div class="col-sm-6 d-flex align-items-center">
                <header class="intro-wrap text-white">
                    <h2 class="display-3"> Cu noi viața e mai dulce </h2>
                </header>  <!-- intro-wrap .// -->
            </div> <!-- col.// -->
		</div> <!-- row.// -->
	</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
<!-- ============== owl slide items  ============= -->
<div class="container">
<section class="padding-y">
</section>
	<div class="row">	
		<div class="owl-carousel owl-init slide-items" data-items="5" data-margin="20" data-dots="true" data-nav="true">
			<a href="products/tort.html">
			<div class="item-slide">
			<figure class="card card-product">
				<div class="img-wrap"> <img src="{{asset('front_assets/images/posts/5.jpg')}}"> 
			</div>		
			</figure> 
			<!-- card // -->
		</div>
			</a>
			<a href="products/bis.html">
			<div class="item-slide">
		<figure class="card card-product">
			<div class="img-wrap"> <img src="{{asset('front_assets/images/posts/5.jpg')}}">  </div>
		</figure> <!-- card // -->
			</div>
		</a>
		<a href="products/des.html">
			<div class="item-slide">
		<figure class="card card-product">
			<div class="img-wrap"> <img src="{{asset('front_assets/images/posts/5.jpg')}}">  </div>
		</figure> <!-- card // -->
			</div>
		</a>
		<a href="products/bis8.html">
			<div class="item-slide">
		<figure class="card card-product">
			<div class="img-wrap"><img src="{{asset('front_assets/images/posts/5.jpg')}}">  </div>
		</figure> <!-- card // -->
			</div>
		</a>
		<a href="products/mac.html">
			<div class="item-slide">
		<figure class="card card-product">
			<div class="img-wrap"> <img src="{{asset('front_assets/images/posts/5.jpg')}}"> </div>
		</figure> <!-- card // -->
			</div>
		</a>
		<a href="products/cro3.html">
			<div class="item-slide">
        <figure class="card card-product">
          <div class="img-wrap"><img src="{{asset('front_assets/images/posts/5.jpg')}}"> </div>
        </figure> <!-- card // -->
			</div>
		</a>
		</div>
	</div>
</div>
<section class="section-content bg-light padding-y border-top">
      <div class="container">
        <div class="row">
            <main class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
              <div class="container display d-flex padding-y">
                <div>
                  <header class="section-heading">
                    <h2 style="font-family: 'Forte' ">Ziua ta un pic mai Dulce</h2>
                  </header><!-- sect-heading -->
                    <p>În anul 2019, stabilim Motto-ul pentru strategia de dezvoltare a produsului –
                    DolceVita rEvoluționează. Acest motto are la bază diferențierea produsului, și anume tortul,
                    de tot ce este pe piață și elaborarea unor gusturi noi, specifice doar companiei DolceVita, la baza cărora stau
                    elementele avantajului nostru concurențial unic. Astfel, produsele marca DolceVita
                    au fost clasificate în 3 Serii:</p>
                    <p>
                      <ul>
                        <li>Seria Autor</li>
                        <li>Seria Fusion</li>
                        <li>Seria Raw&Veg</li>
                      </ul>
                    </p>
                    <p>Dorința de a fi într-un continuu proces de inovare și redescoperire a produselor noi, ce ar permite formarea unor
                    gusturi excepționale, pe care dorim sa le împărtășim tuturor;</p>
                    <p>
                    Materia primă de cea mai înaltă calitate, controlată riguros conform normativelor în domeniu: prelucrată,
                    modelată, ambalată și depozitată în spații de producție certificate de către instituțiile abilitate în domeniu;
                    </p>
                  </div>

                  <div style="float: right;" >
                    <img style="margin-left: 50px; height: auto; width: 100%;" src="{{asset('front_assets/images/avatars/bann.png')}}" alt="Tort">
                  </div>
            </div>
        </main> <!-- col.// -->
      </div>
    </div> <!-- container .//  -->
  </section>
	<!-- ============== owl slide items .end // ============= -->
<div class="d-flex justify-content-center bg-light py-3">
  <div class="row">
    @foreach($data as $row)
    <aside class="col-md-4">
    <div id="code_card_img">
      <div class="card hight:150px;">
        <img class="card-img-top img-fluid"  src="{{asset('/uploads/'.$row->img)}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$row->title}}</h5>
      </div>  <!-- card.// -->
    </div> <!-- code wrap.// -->
    </aside> <!-- col.// -->
    @endforeach
  </div> <!-- row.// -->
</div>

@endsection
