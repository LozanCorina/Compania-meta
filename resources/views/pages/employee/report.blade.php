@extends('layouts.employee')
<!-- ========================= SECTION CONTENT ========================= -->
@section('content')
    <section class="section-content bg padding-y">
        <section class=" col-6 my-2 mx-auto">
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
                    <h4 class="card-title mb-4 mt-1">Add Report</h4>
                    <form id="form" method="POST" action="{{route('reports.store')}}">
                        @csrf
                        <input  id="calendar" name="month" class="form-control" type="month" value="{{$date}}">
                        <div id="content">
                            <input name="employee" class="form-control" id="id" type="hidden" value="{{Illuminate\Support\Facades\Auth::id()}}">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label><strong>Matches</strong></label>
                                        <input name="matches" class="form-control" type="number" min="0" placeholder="0"  value="{{old('matches')}}">
                                    </div>
                                    <div class="col-6">
                                        <label><strong>Corner</strong></label>
                                        <input name="corners" class="form-control" type="number" min="0" placeholder="0" value="{{old('corners')}}">
                                    </div>
                                </div>
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label><strong>Shots</strong></label>
                                        <input name="shots" class="form-control" type="number" min="0" placeholder="0" value="{{old('shots')}}">
                                    </div>
                                    <div class="col-6">
                                        <label><strong>Reviews</strong></label>
                                        <input name="reviews" class="form-control" type="number" min="0" placeholder="0" value="{{old('reviews')}}">
                                    </div>
                                </div>
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label><strong>Trainings</strong></label>
                                        <input name="trainings" class="form-control" type="number" min="0" placeholder="0" value="{{old('trainings')}}">
                                    </div>
                                    <div class="col-6">
                                        <label><strong>Transfers</strong></label>
                                        <input name="transfers" class="form-control" type="number" min="0" placeholder="0" value="{{old('transfers')}}">
                                    </div>
                                </div>
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label><strong>Profiling</strong></label>
                                        <input name="profiling" class="form-control" type="number" min="0" placeholder="0" value="{{old('profiling')}}">
                                    </div>
                                    <div class="col-6">
                                        <label><strong>Test</strong></label>
                                        <input name="test" class="form-control" type="number" min="0" placeholder="0" value="{{old('test')}}">
                                    </div>
                                </div>
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label><strong>Scouting</strong></label>
                                        <input name="scouting" class="form-control" type="number" min="0" placeholder="0"  value="{{old('scouting')}}">
                                    </div>
                                    <div class="col-6">
                                        <label><strong>Adm4_test</strong></label>
                                        <input name="adm4_test" class="form-control" type="number" min="0" placeholder="0" value="{{old('adm4_test')}}">
                                    </div>
                                </div>
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label><strong>Matches from 4 AM</strong></label>
                                        <input name="m_4am" class="form-control" type="number" min="0" placeholder="0" value="{{old('m_4am')}}">
                                    </div>
                                    <div class="col-6">
                                        <label><strong>Matches from 5 PM?</strong></label>
                                        <input name="m_5pm" class="form-control" type="number" min="0" placeholder="0" value="{{old('m_5pm')}}">
                                    </div>
                                </div>
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label><strong>Tag Trainer</strong></label>
                                        <input name="tag_trainer" class="form-control" type="number" min="0" placeholder="0" value="{{old('tag_trainer')}}">
                                    </div>
                                    <div class="col-6">
                                        <label><strong>Rating</strong></label>
                                        <input name="rating" class="form-control" type="number" min="0" step="0.01" placeholder="0" value="{{old('rating')}}">
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
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-block">Preview </button>
                                        <button type="submit" class="btn btn-primary btn-block" id="btn-submit">Submit </button>
                                    </div>
                                </div>
                            </div> <!-- form-group// -->
                        </div> <!--form content-->
                    </form>
                </article>
            </div> <!-- card.// -->
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    <script>
        window.onload=function() {
            var valid = @json($validation);
            if (valid == 1) {
                document.getElementById('content').style.display = 'none';
            }
        }
        $(document).ready(function () {
            $('#calendar').change(function() {
                var date= $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{ route('reports.check') }}',
                    type: 'get',
                    dataType: 'json',
                    data: {
                        date : date,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        console.log(response);

                        if(response == 0)
                        {
                            document.getElementById('content').style.display = 'block';
                        }
                        else{
                            document.getElementById('content').style.display = 'none';
                        }


                    },
                });
            });

            setTimeout(function () {
                $("div.alert").fadeOut('slow');
            }, 3000);
            $('#btn-submit').on("click",function(e){
                e.preventDefault();
                var form = $('form');
                Swal.fire({
                    text: "Are you sure you want to submit the form?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    buttonsStyling: false,
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            });
        });
    </script>
@endsection
