@extends('layouts.sales layout.layouts-detached')
@section('title')
    @lang('translation.input-masks')
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">BL Application</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <form action="#">
                        <div>
                            <h5 class="fs-14 mb-3 text-muted">Facility Details</h5>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="validationDefault03" class="form-label">Basic Income</label>
                                        <input type="text" class="form-control" id="validationDefault03" required>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="cleave-delimiter" class="form-label">Other Allowance</label>
                                        <input type="text" class="form-control" id="validationDefault03" required>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Basic Income</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiter" class="form-label">Other Allowance</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Basic Income</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiter" class="form-label">Other Allowance</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Basic Income</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiter" class="form-label">Other Allowance</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Basic Income</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiter" class="form-label">Other Allowance</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="border mt-3 border-dotted"></div>
                        <div class="border mt-0 border-dotted"></div>

                        <div class="mt-4">
                            <h5 class="fs-14 mb-3 text-muted">Client Banking Details</h5>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="validationDefault03" class="form-label">Basic Income</label>
                                            <input type="text" class="form-control" id="validationDefault03" required>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-delimiter" class="form-label">Other Allowance</label>
                                            <input type="text" class="form-control" id="validationDefault03" required>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="validationDefault03" class="form-label">Basic Income</label>
                                            <input type="text" class="form-control" id="validationDefault03" required>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-delimiter" class="form-label">Other Allowance</label>
                                            <input type="text" class="form-control" id="validationDefault03" required>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="validationDefault03" class="form-label">Basic Income</label>
                                            <input type="text" class="form-control" id="validationDefault03" required>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-delimiter" class="form-label">Other Allowance</label>
                                            <input type="text" class="form-control" id="validationDefault03" required>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div>
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
