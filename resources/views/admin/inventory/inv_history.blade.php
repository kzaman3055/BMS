@extends('admin.admin_master')
@section('admin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>History of {{ $blood_group }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-12 col-sm-12">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="donor-list-tab" data-toggle="pill"
                                            href="#donor-list" role="tab" aria-controls="donor-list"
                                            aria-selected="true">Available unit List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            id="add-donor-tab" data-toggle="pill" href="#add-donor" role="tab"
                                            aria-controls="add-donor" aria-selected="false">Donate History</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade show active" id="donor-list" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-home-tab">
                                      
                                        <div class="card" data-table-title="donor List">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Donor Name</th>
                                                        <th>Available Unit</th>
                                                        <th>Donate Date</th>
                                                        <th>Exp: Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($inventoryData as $key => $data)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ \App\Models\admin\donor::where('slug', $data->donor_slug)->value('name') }}</td>
                                                        <td>{{ $data->remain_unit }}</td>
                                                        <td>{{ date('d M Y', strtotime($data->donate_date)) }}</td>
                                                        <td>{{ date('d M Y', strtotime($data->expire_date)) }}</td>

                                                        <td>{{ $data->phone }}</td>
                                                     

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="add-donor" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-profile-tab">
                                        <div class="card" data-table-title="donor List">
                                            <table id="example2" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Donor Name</th>
                                                        <th>Available Unit</th>
                                                        <th>Donate Date</th>
                                                        <th>Exp: Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($allInventoryData as $key => $data)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ \App\Models\admin\donor::where('slug', $data->donor_slug)->value('name') }}</td>
                                                        <td>{{ $data->remain_unit }}</td>
                                                        <td>{{ date('d M Y', strtotime($data->donate_date)) }}</td>
                                                        <td>{{ date('d M Y', strtotime($data->expire_date)) }}</td>

                                                        <td>{{ $data->phone }}</td>
                                                     

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
