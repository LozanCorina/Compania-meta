@extends('layouts.employee')
<!-- ========================= SECTION CONTENT ========================= -->
@section('content')
<section class="section-content bg py-5 border-top">
    <div class="container py-5">
    <nav class="mb-3">
		<ol class="breadcrumb">
			<li><a class="nav-link" href="{{route('acasa')}}">Acasa</a></li>
		</ol>
    </nav>
    <div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12">
    <main class="card">
        <div class="row no-gutters">
            <aside class="col-sm-6 border-right">
                <article class="gallery-wrap">
                    <div class="img-wrap">
                        <a class="fancy" href="{{asset('/uploads/'.$partner->img)}}"><img src="{{asset('/uploads/'.$partner->img)}}" class="img-fuid mx-auto"></a>
                    </div> <!-- slider-product.// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
                <aside class="col-sm-6">
                <article class="card-body">
                <!-- short-info-wrap -->
                <h3 class="title mb-3">{{$partner->title}}</h3>
                <dl>
                <dt>Description</dt>
                <dd><p>{{$partner->description}}</p></dd>
                </dl>
                <!-- short-info-wrap .// -->
                </article> <!-- card-body.// -->
                </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </main> <!-- card.// -->
    <br>
</div><!-- container // -->
</section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
