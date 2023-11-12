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
    <title>Siskul | SMKN 1 Pusakanagara</title>
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

         @include('admin.layouts.sidebar')

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
                                    <h2 class="mb-0  text-white">Dashboard Admin</h2>
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
                                        <h2 class=" mb-1 fw-bold">18</h2>
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
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="mb-0">Pembimbing</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                      <i  data-feather="list" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h2 class="  mb-1 fw-bold">132</h2>
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
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="mb-0">Ekstrakulikuler</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                      <i  data-feather="users" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h2 class="  mb-1 fw-bold">12</h2>
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
                                <div class="card-header">
                                    <h3 class="card-tittle">Ekstrakulikuler</h3>
                                    <div class="card-tools">
                                        <button type="button" a href="" class="btn btn-primary">Tambah</button>
                                    </div>

                                </div>
                                <!-- table  -->
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead class="thead-dark">
                                            <tr>
                                                <div class="d flex justify-content-center">
                                                <th style="width: 50px;">No.</th>
                                                <th>Nama</th>
                                                <th>Prodi</th>
                                                <th>Ketua Ekskul</th>
                                                </div>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">1</td>
                                                <td>John Doe</td>
                                                <td>Teknik Informatika</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">2</td>
                                                <td>Jane Doe</td>
                                                <td>Sistem Informasi</td>
                                                <td></td>
                                            </tr>
                                            <!-- Tambahkan baris tabel sesuai kebutuhan -->
                                        </tbody>
                                    </table>
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
