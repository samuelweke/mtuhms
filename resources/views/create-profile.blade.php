@extends('layouts.dashboard')

@section('content')
    
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-custom sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <i class="fas fa-fw fa-stethoscope mr-1"></i>
            <div class="sidebar-brand-text">MTUHMS</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </nav>
                <!-- End of Topbar -->


                <div class="container-fluid">
                    <div class="card shadow mb-4 create-profile">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Create Profile</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Surname</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="" placeholder="Surname" autocomplete="on">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="" placeholder="First Name" autocomplete="on">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Other Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="" placeholder="Other Name" autocomplete="on">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" id="" >
                                            <option value="">Select Gender</option>
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Matric No</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="" placeholder="Matric No" autocomplete="on">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Phone No</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="" placeholder="Phone No" autocomplete="on">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="" placeholder="Email" autocomplete="on" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="" placeholder="Address" autocomplete="on">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Relationship</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" id="" >
                                            <option value="">Single</option>
                                            <option value="">Married</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Next of Kin</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="" placeholder="Next of Kin" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Address of NOK</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="" placeholder="Address of Next of Kin" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Number of NOK</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="" placeholder="Phone No of Next of Kin" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">State of Origin</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="" placeholder="State of Origin" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 control-label col-form-label">Upload Image</label>
                                </div>
                                <div class="modal-footer border-0 p-0">
                                    <button type="submit" class="btn btn-primary">Create Profile</button>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
        


@endsection