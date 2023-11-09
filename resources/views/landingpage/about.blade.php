@section('container')
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Siskul | {{ $title }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

         <!-- Libraries Stylesheet -->
         <link href="{{ asset('template/page/lib/animate/animate.min.css') }}" rel="stylesheet">
         <link href="{{ asset('template/page/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

         <!-- Customized Bootstrap Stylesheet -->
         <link href="{{ asset('template/page/css/bootstrap.min.css') }}" rel="stylesheet">

         <!-- Template Stylesheet -->
         <link href="{{ asset('template/page/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

         @include('partials.navbar')

        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">Tentang</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- About Start -->
        <div class="container-fluid py-5 my-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="h-100 position-relative">
                            <img src="{{ asset('template/page/img/about-1.jpg') }}" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                            <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                <img src="{{ asset('template/page/img/about-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                        <h5 class="text-primary">Tentang</h5>
                        <h1 class="mb-4">Sistem Informasi Ekstrakulikuler SMKN 1 PUSAKANAGARA</h1>
                        <p>Sistem Informasi Ekskul kami mempermudah siswa dalam mendaftar ke ekskul pilihan. Pendaftaran online yang sederhana dan praktis menghilangkan hambatan administratif. Selain itu, akses informasi ekskul yang komprehensif, seperti jadwal, nilai, absensi, dan sertifikat, memungkinkan siswa untuk mengelola ekskul mereka dengan efisien.</p>
                        <p class="mb-4">Sistem ini juga memberikan manfaat bagi pengurus ekskul dan guru. Mereka dapat dengan mudah memantau perkembangan siswa, mengatur jadwal ekskul, dan mengakses data ekskul yang relevan. Semua ini bertujuan untuk menciptakan lingkungan yang lebih terstruktur dalam pengembangan diri siswa dan meningkatkan efisiensi dalam pengelolaan ekskul.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>


         <!-- JavaScript Libraries -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
         <script src="{{ asset('template/page/lib/wow/wow.min.js') }}"></script>
         <script src="{{ asset('template/page/lib/easing/easing.min.js') }}"></script>
         <script src="{{ asset('template/page/lib/waypoints/waypoints.min.js') }}"></script>
         <script src="{{ asset('template/page/lib/owlcarousel/owl.carousel.min.js') }}"></script>

         <!-- Template Javascript -->
         <script src="{{ asset('template/page/js/main.js') }}"></script>
    </body>

</html>
