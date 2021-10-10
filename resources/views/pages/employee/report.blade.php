@extends('layouts.employee')
<!-- ========================= SECTION CONTENT ========================= -->
@section('content')
    <section class="section-content bg padding-y">
        <section class=" col-6 my-5 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <div class="d-flex flex-column">
                        <h4 class="mb-1 text-dark">Required Fields</h4>
                        <span>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                     </span>
                    </div>
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
            <div class="card col-xl-4 col-lg-4 col-md-5 col-sm-8">
                <article class="card-body">
                    <h4 class="card-title mb-4 mt-1">Create Partner</h4>
                    <form method="POST" action="{{route('reports.store')}}">
                        @csrf
                        <input name="month" class="form-control" type="month" value="{{$date}}">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label><strong>Matches</strong></label>
                                    <input name="matches" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                                <div class="col-6">
                                    <label><strong>Corner</strong></label>
                                    <input name="corners" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                            </div>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label><strong>Shots</strong></label>
                                    <input name="shots" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                                <div class="col-6">
                                    <label><strong>Reviews</strong></label>
                                    <input name="reviews" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                            </div>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label><strong>Trainings</strong></label>
                                    <input name="trainings" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                                <div class="col-6">
                                    <label><strong>Transfers</strong></label>
                                    <input name="transfers" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                            </div>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label><strong>Profiling</strong></label>
                                    <input name="profiling" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                                <div class="col-6">
                                    <label><strong>Test</strong></label>
                                    <input name="test" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                            </div>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label><strong>Scouting</strong></label>
                                    <input name="scouting" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                                <div class="col-6">
                                    <label><strong>Adm4_test</strong></label>
                                    <input name="adm4_test" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                            </div>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label><strong>Matches from 4 AM</strong></label>
                                    <input name="m_4am" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                                <div class="col-6">
                                    <label><strong>Matches from 5 PM?</strong></label>
                                    <input name="m_5pm" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                            </div>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label><strong>Tag Trainer</strong></label>
                                    <input name="tag_trainer" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                                <div class="col-6">
                                    <label><strong>Rating</strong></label>
                                    <input name="rating" class="form-control" type="number" min="0" step="0.01" placeholder="0">
                                </div>
                            </div>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label><strong>Account</strong></label>
                                    <select name="user_id" class="form-control">
                                        <option value="">Select account</option>
                                        @foreach(\App\Models\User::all() as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label><strong>Matches from another account</strong></label>
                                    <input name="m_account" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                            </div>
                        </div> <!-- form-group// -->
                        <div class="form-group my-1">
                            <div class="row">
                                <div class="d-flex btn-group">
                                    <button type="button" class="btn btn-primary btn-block">Preview </button>
                                    <button type="submit" class="btn btn-primary btn-block" >Submit </button>
                                </div>
                            </div>
                        </div> <!-- form-group// -->
                    </form>
                </article>
            </div> <!-- card.// -->
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $("div.alert").fadeOut('slow');
            }, 3000);
        });
    </script>
@endsection
