@extends('layouts.dashboard')

@section('content')
    
  @include('admin.sidebar')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-dark">Pharmacist</h6>
               <button class=" d-sm-inline-block btn btn-sm btn-success" data-toggle="modal" data-target="#"><i class="fas fa-plus pr-2"></i>Add Pharmacist</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td><img src="{{asset('img/user-pic.png')}}" alt="user-pic"></td>
                      <td>Akintomide Jeremiah</td>
                      <td>jerry@yahoo.com</td>
                      <td></td>
                      <td>08029238485</td>
                      <td>
                          <button class="d-sm-inline-block btn btn-sm btn-success" data-toggle="modal" data-target="#">View</button>
                          <button class="d-sm-inline-block btn btn-sm btn-primary" data-toggle="modal" data-target="#">Edit</button>
                          <button class="d-sm-inline-block btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>


@endsection