@extends('layouts.main')
<!-- ========================= SECTION CONTENT ========================= -->
@section('content')
<section class="section-content bg padding-y border-top">
    <div class="container">
    <h1 class="h1-responsive font-weight-bold text-center my-5">Parteneri</h1>
                <!-- Section description -->
               
                <p class="text-center w-responsive">Vă prezentăm partenerii companiei noastre</p>
                @if($data->count())
            @foreach($data as $row)
            <a href="{{route('partner_detail',$row->id)}}">
                <div class="card"> 
                <article class="itemlist">
                    <div class="row row-sm">
                        <aside class="col-sm-3">
                            <div class="img-wrap"><img src="{{asset('/uploads/'.$row->img)}}"  class="img-md"></div>
                        </aside> <!-- col.// -->
                        <div class="col-sm-6">
                            <div class="text-wrap">
                                <h4 class="title"> {{$row->title}} </h4>
                                <p> {{$row->description}} </p>
                                
                            </div> <!-- text-wrap.// -->
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->
                </article> <!-- itemlist.// -->
                </div>
            </a>
            @endforeach
        @else
        <div class="d-flex justify-content-center">
            <h2 class="my-5">There is no data in database!</h2>
        </div>
        @endif
       
    </div> <!-- container .//  -->
 </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
