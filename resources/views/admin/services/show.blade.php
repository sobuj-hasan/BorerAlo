@extends('admin.layouts.app')
@section('title',' Medicine details')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Doctor Details</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Doctor Details</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 style="margin-top: 20px" class="m-t-0 header-title pb-3 mt-4"><b>{{ $single_service->doctor_name }}</b></h4>
                    <div class="table-responsive">
                        <table class="table m-0 table-actions-bar">
                            <tr>
                                <th>Doctor Name</th>
                                <td>{{ $single_service->doctor_name }}</td>
                            </tr>
                            <tr>
                                <th>User Name</th>
                                <td>{{ $single_service->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Doctor Phone</th>
                                <td>{{ $single_service->contact_number }}</td>
                            </tr>
                            <tr>
                                <th>Doctor Degree</th>
                                <td>{{ $single_service->degree }}</td>
                            </tr>
                            <tr>
                                <th>Doctor Education</th>
                                <td>
                                    {{ $single_service->education }}
                                </td>
                            </tr>
                            <tr>
                                <th>Current Working Hospital</th>
                                <td>
                                    {{ $single_service->working_hospital }}
                                </td>
                            </tr>
                            <tr>
                                <th>Medicine Image</th>
                                <td><img width="100" src="{{ asset('assets/img/') }}/{{ $single_service->image }}" alt=""></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_script')
    <script>
        function OrderDelete(){
            alert('Are you shure ? You want to delete this Doctor !')
        }
    </script>
@endsection
