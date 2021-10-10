@extends('layouts.admin')
<!-- ========================= SECTION CONTENT ========================= -->
@section('content')
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row justify-content-center">
                @if($users->count())
                    <table class="table table-striped table-responsive bg-dark mt-4" id="table_users">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr class="table-secondary">
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{\Carbon\Carbon::parse($user->created_at, 'UTC')->format('M d, o')}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">View reports</a>
                                            <a class="dropdown-item" href="#">Delete user</a>
                                            <a class="dropdown-item" href="#">Compare report</a>
                                        </div>
                                    </div>
                                </td>
                                <!--end::Action=-->
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @else
                <div class="d-flex justify-content-center">
                    <h2 class="my-5">There is no data in database!</h2>
                </div>
        @endif
    </section>
    <script>
        $(document).ready(function (){
            $("#table_users").DataTable();
        });
    </script>

    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
