@extends('layouts.sales layout.layouts-detached')
@section('title')
    @lang('translation.input-masks')
@endsection
@section('content')

       <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">ADD VILLAGE</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="">
                        <div class="col-md-6">
                            <label for="employeeName" class="form-label">BRANCH CODE</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example">
                                <option selected>Select Branch CODE</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">VILLAGE</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
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
