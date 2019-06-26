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
                                    <label for="lname" class="col-sm-4 control-label col-form-label">Current Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="" placeholder="Current Password" required>
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