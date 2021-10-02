@extends('layouts.admin')
<!-- ========================= SECTION CONTENT ========================= -->
@section('content')
<section class="section-content bg padding-y border-top">
<div class="container col-xl-10 col-sm-12 col-md-10 pt-5">
    @if($data->count())
<table class="table table-striped w-auto table-responsive-sm bg-dark">
<thead>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Date created</th>
  </tr>
</thead>
<tbody>
    @foreach($data as $row)
  <tr class="table-secondary">
    <th scope="row">{{$row->id}}</th>
    <td>{{$row->name}}</td>
    <td>{{$row->email}}</td>
    <td>{{$row->message}}</td>
    <td>{{$row->created_at}}</td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
@else
<div class="d-flex justify-content-center">
<h2 class="my-5">There is no data in database!</h2>
</div>

@endif
</section>

    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
