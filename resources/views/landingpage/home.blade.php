@extends('layouts.main')
@section('container')
        <!-- Carousel Start -->
        <div class="container-fluid px-0">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{ asset('template/page/img/carousel-1.jpg') }}" class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">Siskul </h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">Sistem Informasi Ekstrakulikuler</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Ayo Ikuti Ekstrakulikuler Favoritmu Sekarang!</p>
                                <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Login Disini</button></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        @include('partials.about')
        <!-- About End -->


        <!-- Services Start -->
        @include('partials.ekstrakulikuler')
        <!-- Services End -->


        <!-- Blog Start -->
        @include('partials.prestasi')
        <!-- Blog End -->

       @endsection
