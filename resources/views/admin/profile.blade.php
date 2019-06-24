@extends('layouts.dashboard')

@section('content')
    
  @include('admin.sidebar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
            </div>

            <div class="row">
                <!--Edit Profile Begins-->
                <div class="col-sm-7">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update Profile</h6>
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
                                <label for="" class="col-sm-3 control-label col-form-label">Age</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="" placeholder="Age">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 control-label col-form-label">Matric No</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="" placeholder="Matric No" autocomplete="on">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="" placeholder="Email" autocomplete="on">
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
                                <label for="" class="col-sm-3 control-label col-form-label">Tribe</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" placeholder="Tribe" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 control-label col-form-label">Religion</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" placeholder="Religion" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 control-label col-form-label">Occupation</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" placeholder="Occupation" >
                                </div>
                            </div>
                            <div class="modal-footer border-0 p-0">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Edit Profile Ends-->

                <!--Change Password Begins-->
                <div class="col-sm-5">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
                        </div>
                        <form action="">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-4 control-label col-form-label">Old Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="" placeholder="Old Password" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-4 control-label col-form-label">New Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="" placeholder="New Password" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-4 control-label col-form-label">Confirm New Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="" placeholder="Confirm New Password" required>
                                    </div>
                                </div>
                                <div class="modal-footer border-0 p-0">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Change Password Ends-->
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>

@endsection