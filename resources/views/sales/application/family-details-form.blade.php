@extends('layouts.sales layout.layouts-detached')
@section('title')
    @lang('translation.input-masks')
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">BL APPLICATION - FAMILY DETAILS</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <form action="#">
                        <div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="validationDefault03" class="form-label">Contract Code</label>
                                        <input type="text" class="form-control" id="validationDefault03" required>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="validationDefault03" class="form-label">Joint Borrowers</label>
                                        <div class="row">
                                            <div class="col-12 mt-2">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                       id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                   Yes
                                                </label> &nbsp;&nbsp;&nbsp;&nbsp;

                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                       id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Spouse/Other NIC</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>

                            </div><!-- end col -->

                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Mobile No</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Spouse/Other Name</label>
                                    <input type="text" class="form-control" id="validationDefault03"  required>
                                </div>

                            </div><!-- end col -->

                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiter" class="form-label">Occupation</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example">
                                        <option selected>Select CRO</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiters" class="form-label">No Of Family Members</label>
                                    <input type="number" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Education</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example">
                                        <option selected>Primary</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiters" class="form-label">No Of Dependents</label>
                                    <input type="number" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Spouse/Other Incomes</label>
                                    <input type="number" class="form-control" id="validationDefault03"  required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Other Family Members Income</label>
                                    <input type="number" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label"> Movable Property </label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Immovable Property</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Savings</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Relationship</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="exampleInputdate" class="form-label">Date Of Birth</label>
                                    <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="25 12,2021">
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-primary danger">Update</button>
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
