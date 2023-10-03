@extends('layouts.sales layout.layouts-detached')
@section('title')
    @lang('translation.input-masks')
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Write Off </h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="form-label">Contract code</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control rounded-end flag-input" readonly
                                           placeholder=""
                                           data-bs-toggle="dropdown" aria-expanded="false"/>
                                    <div class="dropdown-menu w-100">
                                        <div class="p-2 px-3 pt-1 searchlist-input">
                                            <input type="text"
                                                   class="form-control form-control-sm border search-countryList"
                                                   placeholder="Search Society No..."/>
                                        </div>
                                        <ul class="list-unstyled dropdown-menu-list mb-0"></ul>
                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Contract Code</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Total Current Balance</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="validationDefault03" disabled>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Due Installment</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiter" class="form-label">Loan Amount</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiters" class="form-label">Over Payment</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Interest Amount</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Total Arrears</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Period</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Total Default</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Granting Date</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="exampleInputdate" class="form-label">Loan Stock</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Future Capital</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="exampleInputdate" class="form-label">Future Interest</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Write Off Amount</label>
                                    <input type="text" class="form-control" id="validationDefault03">
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-soft-dark">Conform</button>
                        </div>
                    </form><!-- end form -->
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
