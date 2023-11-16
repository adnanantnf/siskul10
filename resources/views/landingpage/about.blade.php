@extends('layouts.main')
@section('container')

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
        @include('partials.about')
        <!-- About End -->

      @endsection
