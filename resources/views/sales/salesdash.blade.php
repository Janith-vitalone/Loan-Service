@extends('layouts.sales layout.layouts-vertical-hovered')
@section('title')
    @lang('translation.hovered')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet"  />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Layouts
        @endslot
        @slot('title')
            Vertical Hovered Layout
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xxl-3">
            <div class="card card-height-100">
                <div class="card-header border-0 align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">My Portfolio</h4>
                    <div>
                        <div class="dropdown">
                            <button class="btn btn-soft-primary btn-sm" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-uppercase">Btc<i class="mdi mdi-chevron-down align-middle ms-1"></i></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">BTC</a>
                                <a class="dropdown-item" href="#">USD</a>
                                <a class="dropdown-item" href="#">Euro</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end cardheader -->
                <div class="card-body">
                    <div id="portfolio_donut_charts"
                        data-colors='["--vz-primary", "--vz-primary-rgb, 0.85", "--vz-primary-rgb, 0.65", "--vz-primary-rgb, 0.50"]'
                        class="apex-charts" dir="ltr"></div>

                    <ul class="list-group list-group-flush border-dashed mb-0 mt-3 pt-2">
                        <li class="list-group-item px-0">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-xs">
                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                        <img src="{{ URL::asset('build/images/svg/crypto-icons/btc.svg') }}" class="img-fluid" alt="">
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-1">Bitcoin</h6>
                                    <p class="fs-12 mb-0 text-muted"><i
                                            class="mdi mdi-circle fs-10 align-middle text-primary me-1"></i>BTC
                                    </p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">BTC 0.00584875</h6>
                                    <p class="text-success fs-12 mb-0">$19,405.12</p>
                                </div>
                            </div>
                        </li><!-- end -->
                        <li class="list-group-item px-0">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-xs">
                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                        <img src="{{ URL::asset('build/images/svg/crypto-icons/eth.svg') }}" class="img-fluid" alt="">
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-1">Ethereum</h6>
                                    <p class="fs-12 mb-0 text-muted"><i
                                            class="mdi mdi-circle fs-10 align-middle text-secondary me-1"></i>ETH
                                    </p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">ETH 2.25842108</h6>
                                    <p class="text-danger fs-12 mb-0">$40552.18</p>
                                </div>
                            </div>
                        </li><!-- end -->
                        <li class="list-group-item px-0">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-xs">
                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                        <img src="{{ URL::asset('build/images/svg/crypto-icons/ltc.svg') }}" class="img-fluid" alt="">
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-1">Litecoin</h6>
                                    <p class="fs-12 mb-0 text-muted"><i
                                            class="mdi mdi-circle fs-10 align-middle text-warning me-1"></i>LTC
                                    </p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">LTC 10.58963217</h6>
                                    <p class="text-success fs-12 mb-0">$15824.58</p>
                                </div>
                            </div>
                        </li><!-- end -->
                        <li class="list-group-item px-0 pb-0">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-xs">
                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                        <img src="{{ URL::asset('build/images/svg/crypto-icons/dash.svg') }}" class="img-fluid" alt="">
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-1">Dash</h6>
                                    <p class="fs-12 mb-0 text-muted"><i
                                            class="mdi mdi-circle fs-10 align-middle text-success me-1"></i>DASH
                                    </p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">DASH 204.28565885</h6>
                                    <p class="text-success fs-12 mb-0">$30635.84</p>
                                </div>
                            </div>
                        </li><!-- end -->
                    </ul><!-- end -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xxl-9 order-xxl-0 order-first">
            <div class="d-flex flex-column h-100">
                <div class="row h-100">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                            <i class="ri-money-dollar-circle-fill align-middle"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">
                                            Total Invested</p>
                                        <h4 class=" mb-0">$<span class="counter-value"
                                                data-target="2390.68">0</span></h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <span class="badge badge-soft-success"><i
                                                class="ri-arrow-up-s-fill align-middle me-1"></i>6.24
                                            %<span>
                                            </span></span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                            <i class="ri-arrow-up-circle-fill align-middle"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">
                                            Total Change</p>
                                        <h4 class=" mb-0">$<span class="counter-value"
                                                data-target="19523.25">0</span></h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <span class="badge badge-soft-success"><i
                                                class="ri-arrow-up-s-fill align-middle me-1"></i>3.67
                                            %<span>
                                            </span></span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                            <i class="ri-arrow-down-circle-fill align-middle"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Day
                                            Change</p>
                                        <h4 class=" mb-0">$<span class="counter-value"
                                                data-target="14799.44">0</span></h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <span class="badge badge-soft-danger"><i
                                                class="ri-arrow-down-s-fill align-middle me-1"></i>4.80
                                            %<span>
                                            </span></span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0 align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Market Graph</h4>
                                <div>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        1H
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        7D
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        1Y
                                    </button>
                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                        ALL
                                    </button>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body p-0">
                                <div
                                    class="bg-soft-light border-top-dashed border border-start-0 border-end-0 border-bottom-dashed py-3 px-4">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="d-flex flex-wrap gap-4 align-items-center">
                                                <h5 class="fs-19 mb-0">0.014756</h5>
                                                <p class="fw-medium text-muted mb-0">$75.69 <span
                                                        class="text-success fs-11 ms-1">+1.99%</span>
                                                </p>
                                                <p class="fw-medium text-muted mb-0">High <span
                                                        class="text-dark fs-11 ms-1">0.014578</span></p>
                                                <p class="fw-medium text-muted mb-0">Low <span
                                                        class="text-dark fs-11 ms-1">0.0175489</span>
                                                </p>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-6">
                                            <div class="d-flex">
                                                <div class="d-flex justify-content-end text-end flex-wrap gap-4 ms-auto">
                                                    <div class="pe-3">
                                                        <h6 class="mb-2 text-truncate text-muted">Total
                                                            Balance</h6>
                                                        <h5 class="mb-0">$72.8k</h5>

                                                    </div>
                                                    <div class="pe-3">
                                                        <h6 class="mb-2 text-muted">Profit</h6>
                                                        <h5 class="text-success mb-0">+$49.7k</h5>
                                                    </div>
                                                    <div class="pe-3">
                                                        <h6 class="mb-2 text-muted">Loss</h6>
                                                        <h5 class="text-danger mb-0">-$23.1k</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>
                            </div><!-- end cardbody -->
                            <div class="card-body p-0 pb-3">
                                <div id="Market_chart" data-colors='["--vz-success-rgb, 0.65", "--vz-primary-rgb, 0.65"]'
                                    class="apex-charts" dir="ltr"></div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </div><!-- end col -->
    </div><!-- end row -->


@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/dashboard-crypto.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
