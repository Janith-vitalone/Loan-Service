@extends('layouts.sales layout.layouts-detached')
@section('title')
    @lang('translation.input-masks')
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Credit Note</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="">
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Contract Code</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">NIC</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Name</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Loan Amount</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Arrears</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Full Balance</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Weekly Installment</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Type</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example" required>
                                <option selected>Credit</option>
                                <option value="1">One</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Remark</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-danger">Credited</button>
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
