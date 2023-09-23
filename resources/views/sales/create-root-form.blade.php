@extends('layouts.sales layout.layouts-detached')
@section('title')
    @lang('translation.input-masks')
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">CREATE ROOT</h4>
                </div><!-- end card header -->
                <div class="card-body p-5">
                    <form action="">
                        <div class="col-md-6">
                            <label for="employeeName" class="form-label">BRANCH CODE</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example">
                                <option selected>Select Branch Code</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">ROOT ID</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-12">
                            <label for="employeeName" class="form-label">VILLAGE</label>
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <select class="form-select mb-3" aria-label=".form-select-lg example">
                                        <option selected>Select Branch CODE</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    <select class="form-select mb-3" aria-label=".form-select-lg example">
                                        <option selected>Select Branch CODE</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="employeeName" class="form-label">CRO</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example">
                                <option selected>Select Branch CODE</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">ROOT NAME</label>
                            <input type="text" class="form-control" id="validationDefault03" required disabled>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
