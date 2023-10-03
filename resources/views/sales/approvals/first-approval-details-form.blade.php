@extends('layouts.sales layout.layouts-detached')
@section('title')
    @lang('translation.input-masks')
@endsection
@section('content')

       <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">First Approval</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="">
                        <div class="col-md-6">
                            <label class="form-label">Society No</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-end flag-input" readonly placeholder="" data-bs-toggle="dropdown" aria-expanded="false" />
                                <div class="dropdown-menu w-100">
                                    <div class="p-2 px-3 pt-1 searchlist-input">
                                        <input type="text" class="form-control form-control-sm border search-countryList" placeholder="Search Society No..." />
                                    </div>
                                    <ul class="list-unstyled dropdown-menu-list mb-0"></ul>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/cleave.js/cleave.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/form-masks.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
