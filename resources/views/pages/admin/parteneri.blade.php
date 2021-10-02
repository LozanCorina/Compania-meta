@extends('layouts.admin')
<!-- ========================= SECTION CONTENT ========================= -->
@section('content')
<section class="section-content bg padding-y border-top">
    <div class="container">
    <h1 class="h1-responsive font-weight-bold text-center my-5">Parteneri</h1>
     <!-- Section description -->
     <section class=" col-6 my-5 mx-auto">
    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if($message=Session::get('message'))
            <div class="alert-success">
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{$message}}</strong>
                </div>
            </div>
            @endif
    </section>
     <nav class="mb-3">
			<a  type="button" class="btn btn-block" href="{{route('crud.create')}}">Create</a>
    </nav>
        @if($data->count())
        @foreach($data as $row)
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
                    <aside class="col-sm-3">
                        <div class="border-left pl-3">
                            <div class="price-wrap">
                                <span class="h3 price"> Actions</del>
                            </div> <!-- info-price-detail // -->
                            <p>
                                <form action="{{route('crud.show', $row->id)}}" method="GET"> @csrf<button type="submit"  class="btn btn-success">Edit</button></form>
                                <form action="{{route('crud.destroy', $row->id)}}" method="POST"> @method('delete') @csrf<button type="submit"  class="btn btn-danger">Delete</button></form>
                            </p>
                        </div> <!-- action-wrap.// -->
                    </aside> <!-- col.// -->
                </div> <!-- row.// -->
            </article> <!-- itemlist.// -->
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
