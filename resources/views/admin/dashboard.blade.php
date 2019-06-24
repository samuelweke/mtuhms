@extends('layouts.dashboard')

@section('content')

    @include('admin.sidebar')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Dashboard</h2>
        </div>
        <div class="row">

            <!-- Doctor Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2  text-gray-600">
                                <div class="h2 font-weight-bold mb-2">2</div>
                                <div class="h6 mb-0 font-weight-bold">Doctor</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-stethoscope fa-4x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <!-- Patient Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2  text-gray-600">
                                <div class="h2 font-weight-bold mb-2">243</div>
                                <div class="h6 mb-0 font-weight-bold">Patient</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-first-aid fa-4x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <!-- Nurse Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2  text-gray-600">
                                <div class="h2 font-weight-bold mb-2">3</div>
                                <div class="h6 mb-0 font-weight-bold">Nurse</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-syringe fa-4x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <!-- Pharmacist Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2  text-gray-600">
                                <div class="h2 font-weight-bold mb-2">2</div>
                                <div class="h6 mb-0 font-weight-bold">Pharmacist</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-prescription fa-4x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <!-- Laboratorist Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2  text-gray-600">
                                <div class="h2 font-weight-bold mb-2">1</div>
                                <div class="h6 mb-0 font-weight-bold">Laboratorist</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-prescription-bottle-alt fa-4x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <!-- Record-Officer Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2  text-gray-600">
                                <div class="h2 font-weight-bold mb-2">1</div>
                                <div class="h6 mb-0 font-weight-bold">Record-Officer</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-file-medical fa-4x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <!-- Bed Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2  text-gray-600">
                                <div class="h2 font-weight-bold mb-2">8</div>
                                <div class="h6 mb-0 font-weight-bold">Bed</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-bed fa-4x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <!-- Doctor Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2  text-gray-600">
                                <div class="h2 font-weight-bold mb-2">0</div>
                                <div class="h6 mb-0 font-weight-bold">Medicine</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-pills fa-4x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
        </div>
    </div>

@endsection