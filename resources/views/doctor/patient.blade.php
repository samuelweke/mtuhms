@extends('layouts.dashboard')

@section('content')
    
  @include('doctor.sidebar')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Prescription</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Patient</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>12 June, 2019</td>
                        <td>Odom Ifeanyi</td>
                        <td>
                            <button class="d-sm-inline-block btn btn-sm btn-success">Edit</button>
                            <button class="d-sm-inline-block btn btn-sm btn-dark">View Prescription</button>
                            <button class="d-sm-inline-block btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
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