@extends('layouts.dashboard')

@section('content')
    
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <div class="container-fluid pb-5">
                    <div class="card shadow mb-4 create-profile">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Create Profile</h6>
                        </div>
                       <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="card-body form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <label for="" class="control-label col-form-label">Surname</label>
                                        <div>
                                            <input type="text" name="surname" class="form-control" id="" placeholder="Surname" autocomplete="on" required >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                    <label for="" class=" control-label col-form-label">First Name</label>
                                        <div>
                                            <input type="text" name="firstname" class="form-control" id="" placeholder="First Name" autocomplete="on" required >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <label for="" class="control-label col-form-label">Middle Name</label>
                                        <div>
                                            <input type="text" name="middlename" class="form-control" id="" placeholder="Middle Name" autocomplete="on" required >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label for="" class="control-label col-form-label">Email</label>
                                        <div>
                                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="Email" autocomplete="on">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <label for="" class="control-label col-form-label">Password</label>
                                        <div>
                                            <input placeholder="Password" id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" required  />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label for="" class="control-label col-form-label">Confirm Password</label>
                                        <div>
                                            <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <label for="" class="control-label col-form-label">Role</label>
                                        <div>
                                            <select class="custom-select" id="" >
                                                <option value="">Select Role</option>
                                                <option value="">Patient</option>
                                                <option value="">Nurse</option>
                                                <option value="">Doctor</option>
                                                <option value="">Record Officer</option>
                                                <option value="">Laboratorist</option>
                                                <option value="">Pharmacist</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label col-form-label">Gender</label>
                                        <div>
                                            <select class="custom-select" id="" >
                                                <option value="">Select Gender</option>
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <label for="" class="control-label col-form-label">Matric No <span class="optional">(Optional)</span></label>
                                        <div>
                                            <input type="number" name="matricno" class="form-control" id="" placeholder="Matric No" autocomplete="on">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label for="" class="control-label col-form-label">Phone No <span class="optional">(Optional)</span></label>
                                        <div>
                                            <input type="number" name="phoneno" class="form-control" id="" placeholder="Phone No" autocomplete="on">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <label for="" class="control-label col-form-label">Home Address</label>
                                        <div>
                                            <input type="text" name="homeaddress" class="form-control" id="" placeholder="Home Address" autocomplete="on">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label for="" class="control-label col-form-label">Relationship</label>
                                        <div>
                                            <select class="custom-select" id="" >
                                                <option value="">Single</option>
                                                <option value="">Married</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <label for="" class="control-label col-form-label">Date of Birth</label>
                                        <div>
                                            <input type="date" class="form-control" id="" >
                                        </div>
                                    </div>
                                     <div class="col-md-6 col-sm-12">
                                        <label for="" class="control-label col-form-label">Upload Image</label>
                                    </div>
                                </div>
                                <div class="modal-footer border-0 pt-5">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                       </form>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
        


@endsection