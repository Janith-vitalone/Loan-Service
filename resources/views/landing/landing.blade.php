@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.landing')
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('body')
    <body data-bs-spy="scroll" data-bs-target="#navbar-example">
    @endsection
    @section('content')
        <!-- Begin page -->
        <div class="layout-wrapper landing">


            <section class="section pb-0 hero-section" >
                <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
                    <div class="container">
                        <a class="navbar-brand" href="{{URL::asset('/index')}}">
                            <img src="{{ URL::asset('build/images/logo-dark.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="17">
                            <img src="{{ URL::asset('build/images/logo-light.png') }}" class="card-logo card-logo-light" alt="logo light"
                                 height="17">
                        </a>
                        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">

                            </ul>

                            <div class="">
                                <a href="{{URL::asset('/auth-signup-basic')}}" class="btn btn-primary">Log Out</a>
                            </div>
                        </div>

                    </div>
                </nav>

            </section>
            <!-- start team -->
            <section class="section bg-light" id="team">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""
                                             class="img-fluid rounded-circle">
                                        <a href="{{URL::asset('/apps-mailbox')}}"
                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="{{URL::asset('/pages-profile')}}" class="text-body">SALES </a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Module</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt=""
                                             class="img-fluid rounded-circle">
                                        <a href="{{URL::asset('/apps-mailbox')}}"
                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="{{URL::asset('/pages-profile')}}" class="text-body">FINANCE</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Module</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt=""
                                             class="img-fluid rounded-circle">
                                        <a href="{{URL::asset('/apps-mailbox')}}"
                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="{{URL::asset('/pages-profile')}}" class="text-body">HR</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Module</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt=""
                                             class="img-fluid rounded-circle">
                                        <a href="{{URL::asset('/apps-mailbox')}}"
                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="{{URL::asset('/pages-profile')}}" class="text-body">OPERATION</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Module</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt=""
                                             class="img-fluid rounded-circle">
                                        <a href="{{URL::asset('/apps-mailbox')}}"
                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="{{URL::asset('/pages-profile')}}" class="text-body">ADMIN</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Module</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt=""
                                             class="img-fluid rounded-circle">
                                        <a href="{{URL::asset('/apps-mailbox')}}"
                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="{{URL::asset('/pages-profile')}}" class="text-body">PLANNING</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Module</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end team -->

        </div>
        <!-- end layout wrapper -->
    @endsection
    @section('script')
        <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ URL::asset('build/js/pages/landing.init.js') }}"></script>
@endsection
