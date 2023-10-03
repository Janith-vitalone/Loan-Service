@extends('layouts.sales layout.layouts-detached')
@section('title')
    @lang('translation.input-masks')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/classic.min.css') }}" /> <!-- 'classic' theme -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/monolith.min.css') }}" /> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/nano.min.css') }}" /> <!-- 'nano' theme -->
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')

        @endslot
        @slot('title')

        @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">BL Add Recovery Holiday</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="">
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">Holiday Date</label>
                            <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="25 12,2021">
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">Branch</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example" required>
                                <option selected>All</option>
                                <option value="1">1.</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">Center</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example" required>
                                <option selected>All</option>
                                <option value="1">1.</option>
                            </select>
                        </div>
                        <div class="text-start">
                            <button type="submit" class="btn btn-success">Add</button>
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
    <script src="{{ URL::asset('build/libs/@simonwep/pickr/pickr.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/form-pickers.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
