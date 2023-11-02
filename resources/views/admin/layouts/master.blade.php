<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dashui.codescandy.com/dashuipro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 13:53:42 GMT -->
<head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Codescandy">

 <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-M8S4MT3EYG');
 </script>


<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/dashuipro/assets/images/favicon/favicon.ico') }}">


<!-- Libs CSS -->
<link href="{{ asset('template/dashuipro/assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('template/dashuipro/assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('template/dashuipro/assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">



<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('template/dashuipro/assets/css/theme.min.css') }}">
    <title>Project | Dash UI - Responsive Bootstrap 5 Admin Dashboard</title>
</head>

<body>
    <main id="main-wrapper" class="main-wrapper">

        <div class="header">
  <!-- navbar -->
  <div class="navbar-custom navbar navbar-expand-lg">
    <div class="container-fluid px-0">
    <a class="navbar-brand d-block d-md-none" href="index.html">
      <img src="{{ asset('template/dashuipro/assets/images/brand/logo/logo-2.svg') }}"  alt="Image">
  </a>



    <a id="nav-toggle" href="#!" class="ms-auto ms-md-0 me-0 me-lg-3 ">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-text-indent-left text-muted" viewBox="0 0 16 16">
        <path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
      </svg></a>

    <div class="d-none d-md-none d-lg-block">
    </div>
    <!--Navbar nav -->
    <ul class="navbar-nav navbar-right-wrap ms-lg-auto d-flex nav-top-wrap align-items-center ms-4 ms-lg-0">
      <a href="#" class="form-check form-switch theme-switch btn btn-ghost btn-icon rounded-circle mb-0 ">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault"></label>

			   </a>
        </li>

      <!-- List -->
      <li class="dropdown ms-2">
        <a class="rounded-circle" href="#!" role="button" id="dropdownUser"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md avatar-indicators avatar-online">
            <img alt="avatar" src="{{ asset('template/dashuipro/assets/images/avatar/avatar-11.jpg') }}" class="rounded-circle">
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end"
          aria-labelledby="dropdownUser">
          <div class="px-4 pb-0 pt-2">


            <div class="lh-1 ">
              <h5 class="mb-1"> John E. Grainger</h5>
            </div>
            <div class=" dropdown-divider mt-3 mb-2"></div>
          </div>

          <ul class="list-unstyled">
            <li>
              <a class="dropdown-item" href="index.html">
                <i class="me-2 icon-xxs dropdown-item-icon"
                  data-feather="power"></i>Sign Out
              </a>
            </li>
          </ul>

        </div>
      </li>
    </ul>
    </div>
  </div>
</div>
        <!-- navbar vertical -->
        <div class="app-menu">
         <!-- Sidebar -->

 <div class="navbar-vertical navbar nav-dashboard">
     <div class="h-100" data-simplebar>
         <!-- Brand logo -->
         <a class="navbar-brand" href="index.html">
             <img src="{{ asset('template/dashuipro/assets/images/brand/logo/logo-2.svg') }}" alt="dash ui - bootstrap 5 admin dashboard template">
         </a>
         <!-- Navbar nav -->
         <ul class="navbar-nav flex-column" id="sideNavbar">

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link" href="#!"
                     data-bs-toggle="collapse" data-bs-target="#navDashboard" aria-expanded="false"
                     aria-controls="navDashboard">
                     <i data-feather="home" class="nav-icon me-2 icon-xxs" >
                     </i> Dashboard
                 </a>
             </li>

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link"
                     href="pages/calendar.html">
                     <i data-feather="calendar" class="nav-icon me-2 icon-xxs" >
                     </i> Laporan Kegiatan
                 </a>
             </li>
             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link"
                     href="pages/chat-app.html">
                     <i data-feather="message-square" class="nav-icon me-2 icon-xxs" >
                     </i> Daftar Ekskul
                 </a>
                </li>
             </li>

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link collapsed " href="#!"
                     data-bs-toggle="collapse" data-bs-target="#navEmail" aria-expanded="false"
                     aria-controls="navEmail">
                     <i data-feather="mail" class="nav-icon me-2 icon-xxs" >
                     </i> Jadwal Ekskul
                 </a>

                 <div id="navEmail" class="collapse "
                     data-bs-parent="#sideNavbar">
                 </div>
             </li>

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow  collapsed " href="#!"
                     data-bs-toggle="collapse" data-bs-target="#navKanban" aria-expanded="false"
                     aria-controls="navKanban">
                     <i data-feather="layout" class="nav-icon me-2 icon-xxs" >
                     </i> Presensi
                 </a>
             </li>

             <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!"
                    data-bs-toggle="collapse" data-bs-target="#navKanban" aria-expanded="false"
                    aria-controls="navKanban">
                    <i data-feather="layout" class="nav-icon me-2 icon-xxs" >
                    </i> Nilai
                </a>
            </li>
        </ul>
    </div>

    <div id="navCRM" class="collapse "
        data-bs-parent="#sideNavbar">
        <ul class="nav flex-column">


            <li class="nav-item">
                <a class="nav-link has-arrow "
                    href="pages/crm-contacts.html">

                    Contacts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link has-arrow "
                    href="pages/crm-company.html">

                   Company
                </a>
            </li>
        </ul>
    </div>
</li>
            </div>
        </div>
    </div>
</div>

        <!-- Page content -->
        <div id="app-content">

            <!-- Container fluid -->

            <div class="app-content-area">
                <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
                <div class="container-fluid mt-n22 ">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <!-- Page header -->
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="mb-2 mb-lg-0">
                                    <h3 class="mb-0  text-white">Dashboard Admin</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lift">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="mb-0">Siswa</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                            <i  data-feather="briefcase" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class=" mb-1 fw-bold">18</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lift">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                        <div>
                                            <h4 class="mb-0">Pembimbing</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary
                      rounded-2">
                      <i  data-feather="list" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class="  mb-1 fw-bold">132</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lift">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                        <div>
                                            <h4 class="mb-0">Ekstrakulikuler</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary
                      rounded-2">
                      <i  data-feather="users" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class="  mb-1 fw-bold">12</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row  -->
                    <div class="row">
                        <div class="">
                            <!-- card  -->
                            <div class="card">
                                <!-- card header  -->
                                <div class="card-header ">
                                    <h4 class="mb-0">Ekstrakulikuler</h4>

                                </div>
                                <!-- table  -->
                                <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered table-hover" >
                                        <thead class="table-light">
                                            <tr >
                                                <th>Project name</th>
                                                <th>Hours</th>
                                                <th>Priority</th>
                                                <th>Members</th>
                                                <th>Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr >
                                                <td>
                                                    <div class="d-flex
                            align-items-center">
                                                        <div>
                                                            <div >
                                                                <img src="{{ asset('template/dashuipro/assets/images/svg/brand-logo-1.svg') }}" alt="dash ui - bootstrap 5 admin dashboard template">
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#!" class="text-inherit">Dropbox
                                                                    Design
                                                                    System</a></h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td>34</td>
                                                <td><span class="badge badge-warning-soft">Medium</span></td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar bootstrap 5" src="assets/images/avatar/avatar-11.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="bootstrap 5 avatar" src="assets/images/avatar/avatar-2.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="bootstrap 5 avatar in circle" src="assets/images/avatar/avatar-3.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span class="avatar-initials rounded-circle
                                fs-6">+5</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class=" text-dark">
                                                    <div class="float-start me-3">15%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width:15%" aria-valuenow="15" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td>
                                                    <div class="d-flex
                            align-items-center">
                                                        <div>
                                                            <div >
                                                                <img src="assets/images/svg/brand-logo-2.svg" alt="Image">
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#!" class="text-inherit">Slack
                                                                    Team UI Design</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>47</td>
                                                <td><span class="badge badge-danger-soft">High</span></td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-4.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-5.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-6.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span class="avatar-initials rounded-circle
                                fs-6">+5</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class=" text-dark">
                                                </td>
                                            </tr>
                                            <tr >
                                                <td>
                                                    <div class="d-flex
                            align-items-center">
                                                        <div>
                                                            <div >
                                                                <img src="assets/images/svg/brand-logo-3.svg" alt="Image">
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#!" class="text-inherit">GitHub
                                                                    Satellite</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>120</td>
                                                <td><span class="badge badge-info-soft">Low</span></td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-7.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-8.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-9.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span class="avatar-initials rounded-circle
                                fs-6">+1</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class=" text-dark">
                                                    <div class="float-start me-3">75%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width:75%" aria-valuenow="75" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td>
                                                    <div class="d-flex
                            align-items-center">
                                                        <div>
                                                            <div >
                                                                <img src="assets/images/svg/brand-logo-6.svg" alt="Image">
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#!" class="text-inherit">3D
                                                                    Character Modelling</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>89</td>
                                                <td><span class="badge badge-warning-soft">Medium</span></td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-10.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-11.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-12.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span class="avatar-initials rounded-circle
                                fs-6">+5</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class=" text-dark">
                                                    <div class="float-start me-3">63%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width:63%" aria-valuenow="63" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td>
                                                    <div class="d-flex
                            align-items-center">
                                                        <div>
                                                            <div >
                                                                <img src="assets/images/svg/brand-logo-4.svg" alt="Image">
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#!" class="text-inherit">Webapp
                                                                    Design System</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>108</td>
                                                <td><span class="badge badge-success-soft">Track</span></td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-13.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-14.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-15.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span class="avatar-initials rounded-circle
                                fs-6">+5</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class=" text-dark">
                                                    <div class="float-start me-3">100%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width:100%" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr >
                                                <td>
                                                    <div class="d-flex
                            align-items-center">
                                                        <div>
                                                            <div >
                                                                <img src="assets/images/svg/brand-logo-5.svg" alt="Image">
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#!" class="text-inherit">Github
                                                                    Event Design</a>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td>120</td>
                                                <td><span class="badge badge-info-soft">Low</span></td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-13.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-14.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-15.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span class="avatar-initials rounded-circle
                                fs-6">+1</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class=" text-dark ">
                                                    <div class="float-start me-3">75%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width:75%" aria-valuenow="75" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                <!-- card footer  -->
                                <div class="card-footer text-center">
                                    <a href="#!">
                                         <!-- right alignment -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                        </ul>
                                    </nav>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->

    <!-- Libs JS -->
<script src="{{ asset('template/dashuipro/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('template/dashuipro/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template/dashuipro/assets/libs/feather-icons/dist/feather.min.js') }}"></script>
<script src="{{ asset('template/dashuipro/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>




<!-- Theme JS -->
<script src="{{ asset('template/dashuipro/assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('template/dashuipro/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template/dashuipro/assets/js/vendors/chart.js') }}"></script>








</body>


<!-- Mirrored from dashui.codescandy.com/dashuipro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 13:54:32 GMT -->
</html>
