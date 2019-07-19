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

      <!-- Dashboard Sidebar -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin') }}" >
          <i class="fas fa-fw fa-clinic-medical"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Doctor Sidebar -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/doctor') }}" >
          <i class="fas fa-fw fa-stethoscope"></i>
          <span>Doctor</span>
        </a>
      </li>

      <!-- Patient Sidebar -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/patient') }}" >
          <i class="fas fa-fw fa-first-aid"></i>
          <span>Patient</span>
        </a>
      </li>

      <!-- Nurse Sidebar -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/nurse') }}" >
          <i class="fas fa-fw fa-syringe"></i>
          <span>Nurse</span>
        </a>
      </li>

      <!-- Pharmacist Sidebar -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/pharmacist') }}" >
          <i class="fas fa-fw fa-prescription"></i>
          <span>Pharmacist</span>
        </a>
      </li>

      <!-- Laboratorist Sidebar -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/laboratorist') }}" >
          <i class="fas fa-fw fa-prescription-bottle-alt"></i>
          <span>Laboratorist</span>
        </a>
      </li>

      <!-- Record-Officer Sidebar -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/record-officer') }}" >
          <i class="fas fa-fw fa-file-medical"></i>
          <span>Record-Officer</span>
        </a>
      </li>

      <!-- Bed/Ward Sidebar -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/bed') }}" >
          <i class="fas fa-fw fa-bed"></i>
          <span>Bed/Ward</span>
        </a>
      </li>

      <!-- Profile Sidebar -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/profile') }}" >
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span>
        </a>
      </li>
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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-custom" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header text-center">
                  Alerts
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">Your appointment has been accepted</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    Your appointment day was changed
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Your password has been successfully changed
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="{{ asset('img/user-pic.png') }}">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ url('admin/profile') }}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        
