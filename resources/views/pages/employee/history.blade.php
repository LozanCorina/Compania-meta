@extends('layouts.employee')
<!-- ========================= SECTION CONTENT ========================= -->
@section('content')
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row justify-content-center" style="overflow-x: scroll;white-space: nowrap;">
                @if($message=Session::get('message'))
                    <div class="alert-success my-2">
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{$message}}</strong>
                        </div>
                    </div>
                @endif
                @if($data->count())
                    <table class="table table-striped table-responsive bg-dark mt-4"  id="table_reports">
                        <thead>
                        <tr>
                            <th>Month</th>
                            <th>Matches</th>
                            <th>Corners</th>
                            <th>Shots</th>
                            <th>Reviews</th>
                            <th>Trainings</th>
                            <th>Transfers</th>
                            <th>Profiling</th>
                            <th>Test</th>
                            <th>Scouting</th>
                            <th>Adm4 test</th>
                            <th>M.4 AM</th>
                            <th>M.5 PM</th>
                            <th>Trainer</th>
                            <th>Rating</th>
                            <th>Account</th>
                            <th>Matches from account</th>
                            <th>Updated at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                            <tr class="table-secondary">
                                <td>{{\Carbon\Carbon::parse($d->created_at, 'UTC')->format('M d, o')}}</td>
                                <td>{{$d->mathes}}</td>
                                <td>{{$d->corners}}</td>
                                <td>{{$d->corners}}</td>
                                <td>{{$d->shots}}</td>
                                <td>{{$d->reviews}}</td>
                                <td>{{$d->trainings}}</td>
                                <td>{{$d->profiling}}</td>
                                <td>{{$d->test}}</td>
                                <td>{{$d->scouting}}</td>
                                <td>{{$d->adm4_test}}</td>
                                <td>{{$d->m_4am}}</td>
                                <td>{{$d->m_5pm}}</td>
                                <td>{{$d->tag_trainer}}</td>
                                <td>{{$d->rating}}</td>
                                @if(isset($d->user_id))
                                <td>{{$d->account->name}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$d->m_account}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{route('reports.edit',$d->id)}}">Update</a>
                                            <span class="dropdown-item report_delete" data-id="{{$d->id}}">Delete</span>
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
            $("#table_reports").DataTable();

            setTimeout(function () {
                $("div.alert").fadeOut('slow');
            }, 3000);
            $('#table_reports').on("click", '.report_delete',function(){
                var id = $(this).data('id');
                Swal.fire({
                    text: "Are you sure you want to delete this item?",
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
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: '{{ route('reports.destroy', '') }}/' + id,
                            type: 'DELETE',
                            dataType: 'json',
                            data: {
                                'id': id,
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function (response) {
                                $("#item-" + id).remove(),
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: response.results,

                                    });
                                location.reload();
                            },
                            error: function (response) {
                                Swal.fire({
                                    icon: "error",
                                    title: 'Error!',
                                    text: response.results,
                                });
                            }
                        });
                    }
                })});
        });
    </script>

    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
