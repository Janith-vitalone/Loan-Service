@extends('layouts.sales layout.layouts-detached')
@section('title')
    @lang('translation.input-masks')
@endsection
@section('content')

       <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Document</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="input-group-append mt-4">
                        <span>Bulk Receipt</span>&nbsp;
                        <button class="btn btn-soft-danger btn-sm" type="button">Print</button>
                    </div>
                    <div class="input-group-append mt-4">
                        <span>Service Charge Receipt</span>&nbsp;
                        <button class="btn btn-soft-danger btn-sm" type="button">Print</button>
                    </div>
                    <div class="input-group-append mt-4">
                        <span>Repayment Sheet</span>&nbsp;
                        <button class="btn btn-soft-danger btn-sm" type="button">Print</button>
                    </div>
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
