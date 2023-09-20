@extends('layouts.landingtop')
@section('title')
    Job landing
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css"/>

@endsection
@section('body')

    <body class="body" data-bs-spy="scroll" data-bs-target="#navbar-example">
    @endsection
    @section('content')

        <!-- Begin page -->
        <div class="layout-wrapper landing">

            <div class="container-fluid">
                <div class="col p-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm position-relative mb-4 mx-auto">
                                        <div class="job-icon-effect"></div>
                                        <div
                                            class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-pencil-ruler-2-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="#!" class="stretched-link">
                                        <h5 class="fs-17 pt-1">SALE</h5>
                                    </a>
                                    <p class="mb-0 text-muted">Module</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm position-relative mb-4 mx-auto">
                                        <div class="job-icon-effect"></div>
                                        <div
                                            class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-airplay-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="#!" class="stretched-link">
                                        <h5 class="fs-17 pt-1">FINANCE</h5>
                                    </a>
                                    <p class="mb-0 text-muted">Module</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm mb-4 mx-auto position-relative">
                                        <div class="job-icon-effect"></div>
                                        <div
                                            class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-bank-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="#!" class="stretched-link">
                                        <h5 class="fs-17 pt-1">HR</h5>
                                    </a>
                                    <p class="mb-0 text-muted">Module</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm position-relative mb-4 mx-auto">
                                        <div class="job-icon-effect"></div>
                                        <div
                                            class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-pencil-ruler-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="#!" class="stretched-link">
                                        <h5 class="fs-17 pt-1">OPERATION</h5>
                                    </a>
                                    <p class="mb-0 text-muted">Module</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm position-relative mb-4 mx-auto">
                                        <div class="job-icon-effect"></div>
                                        <div
                                            class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-line-chart-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="#!" class="stretched-link">
                                        <h5 class="fs-17 pt-1">ADMIN</h5>
                                    </a>
                                    <p class="mb-0 text-muted">Module</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm position-relative mb-4 mx-auto">
                                        <div class="job-icon-effect"></div>
                                        <div
                                            class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-briefcase-2-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="#!" class="stretched-link">
                                        <h5 class="fs-17 pt-1">Planing</h5>
                                    </a>
                                    <p class="mb-0 text-muted">Module</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
        <!-- end layout wrapper -->

    @endsection
    @section('script')
        <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ URL::asset('build/js/pages/job-lading.init.js') }}"></script>
@endsection
