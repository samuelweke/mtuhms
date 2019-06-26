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
                      <th>Doctor</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>12 June, 2019</td>
                      <td>John Doe</td>
                      <td><button class="rounded-pill d-sm-inline-block btn btn-sm btn-dark">View Prescription</button></td>
                    </tr>
                    <tr>
                      <td>10 April, 2019</td>
                      <td>John Doe</td>
                      <td><button class="rounded-pill d-sm-inline-block btn btn-sm btn-dark">View Prescription</button></td>
                    </tr>
                    <tr>
                      <td>13 May, 2019</td>
                      <td>John Doe</td>
                      <td><button class="rounded-pill d-sm-inline-block btn btn-sm btn-dark">View Prescription</button></td>
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