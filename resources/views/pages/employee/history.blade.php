@extends('layouts.admin')
<!-- ========================= SECTION CONTENT ========================= -->
@section('content')
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6 d-flex justify-content-end">
            <a type="button" href="{{route('fuels.create')}}" class="btn btn btn-primary my-2"/> Create</a>
        </div>
        <!--end::Card header-->
        <div class="card-body pt-0">
            <table id="datatable_reports" class="table align-middle table-row-dashed fs-6 gy-5">
                <thead>
                <tr class="fw-bold fs-6 text-muted">
                    <th>Fuel Type</th>
                    <th>Fuel Code</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fuels as $fuel)
                    <tr id="item-{{$fuel->fuelTypeID}}">
                        <td>{{$fuel->FuelType}}</td>
                        <td>{{$fuel->FuelCode}}</td>
                        <!--begin::Action=-->
                        <td class="text-end">
                            <span class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                                  data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
                                <!--end::Svg Icon-->
                            </span>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <span data-id="{{$fuel->FuelID}}" data-bs-toggle="modal"
                                          data-bs-target="#kt_modal_account_view"
                                          class="acc-view menu-link px-3">View</span>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <span data-id="{{$fuel->fuelTypeID}}" class="acc_edit menu-link px-3">Edit</span>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <span data-id="{{$fuel->fuelTypeID}}"
                                          class="acc_delete menu-link px-3">Delete</span>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                        <!--end::Action=-->
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr class="fw-bold fs-6 text-muted">
                    <th>Fuel Type</th>
                    <th>Fuel Code</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

<script>
    $(document).ready(function (){
        $("#datatable_reports").dataTable();
    });
</script>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
