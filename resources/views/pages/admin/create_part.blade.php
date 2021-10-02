@extends('layouts.admin')
<!-- ========================= SECTION CONTENT ========================= -->
@section('content')
<section class="section-content bg padding-y">
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
<div class="d-flex justify-content-center">
  <div class="card col-xl-3 col-lg-4 col-md-5 col-sm-8">
        <article class="card-body">
        <h4 class="card-title mb-4 mt-1">Create Partner</h4>
            <form method="POST" action="{{route('crud.store')}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label>Title</label>
                <input name="title" class="form-control" type="text">
            </div> <!-- form-group// -->
            <div class="form-group">
                <label>Description</label>
                <input class="form-control" name="description" type="text">
            </div> <!-- form-group// -->
            <div class="form-group my-1">
            <input type="file" name="img">
            </div> <!-- form-group// -->
            <div class="form-group my-1">
                <button type="submit" class="btn btn-primary btn-block">Submit </button>
            </div> <!-- form-group// -->
        </form>
        </article>
        </div> <!-- card.// -->
    </div> <!-- container .//  -->
 </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
