@extends('layouts.dashboard')

@section('content')
    
  @include('admin.sidebar')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-dark">Bed</h6>
               <button class=" d-sm-inline-block btn btn-sm btn-success" data-toggle="modal" data-target="#add-bed"><i class="fas fa-plus pr-2"></i>Add Bed</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Bed Number</th>
                      <th>Image</th>
                      <th>Bed Type</th>
                      <th>Description</th>
                      <th>Ward No</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td>10</td>
                    <td><i class="fas fa-bed fa-2x"></td>
                      <td></td>
                      <td></td>
                      <td>7</td>
                      <td>
                          <button class="d-sm-inline-block btn btn-sm btn-success" data-toggle="modal" data-target="#edit-appointment">Edit</button>
                          <button class="d-sm-inline-block btn btn-sm btn-danger"><i class="fas fa-trash"></button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                      <td><i class="fas fa-bed fa-2x"></td>
                      <td></td>
                      <td></td>
                      <td>3</td>
                      <td>
                          <button class="d-sm-inline-block btn btn-sm btn-success" data-toggle="modal" data-target="#edit-appointment">Edit</button>
                          <button class="d-sm-inline-block btn btn-sm btn-danger"><i class="fas fa-trash"></button></td>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><i class="fas fa-bed fa-2x"></td>
                      <td></td>
                      <td></td>
                      <td>12</td>
                      <td>
                          <button class="d-sm-inline-block btn btn-sm btn-success" data-toggle="modal" data-target="#edit-appointment">Edit</button>
                          <button class="d-sm-inline-block btn btn-sm btn-danger"><i class="fas fa-trash"></button></td>
                      </td>
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
      
        <!-- Apply-for-Appointment Modal -->
        <div class="modal fade none-border" id="apply-for-appointment">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"> Apply for Appointment </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label col-form-label">Doctor</label>
                                    <select class="form-control" name="select-doctor">
                                         <option>Select a Doctor...</option>
                                        <option value="1">John Doe</option>
                                        <option value="2">Paul Smith</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Date and Time</label>
                                    <input class="form-control" placeholder="Enter Date" type="datetime-local" name="" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Remarks</label>
                                    <input class="form-control" placeholder="Remarks..." type="text" name="remarks" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Request Appointment</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Apply-for-Appointment Modal -->

         <!-- Edit-Appointment Modal -->
        <div class="modal fade none-border" id="edit-appointment">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"> Edit Appointment </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Doctor</label>
                                    <select class="form-control" name="select-doctor">
                                         <option>Select a Doctor...</option>
                                        <option value="1">John Doe</option>
                                        <option value="2">Paul Smith</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Date and Time</label>
                                    <input class="form-control" placeholder="Change Date" type="datetime-local"  />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Remarks</label>
                                    <input class="form-control" placeholder="Remarks..." type="text" name="remarks" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Edit Appointment Modal -->

    </div>
    <!-- End of Content Wrapper -->

  </div>


@endsection