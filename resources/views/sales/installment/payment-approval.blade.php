@extends('layouts.sales layout.layouts-detached')
@section('title')
    @lang('translation.input-masks')
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Payment Approval</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Branch </label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example" required>
                                        <option selected></option>
                                        <option value="1"> 2</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">CRO </label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example" required>
                                        <option selected></option>
                                        <option value="1"> 2</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Center</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example" required>
                                        <option selected></option>
                                        <option value="1"> 2</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Deposit Bank</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example" required>
                                        <option selected></option>
                                        <option value="1"> 2</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <button type="button" class="btn btn-soft-dark">View</button>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-4 mt-4 p-3">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                        <tr class="table-active ">
                                            <th>Total Payment :</th>
                                            <td class="text-end">
                                            <span class="fw-semibold" id="cart-total">
                                                0.00
                                            </span>
                                            </td>
                                        </tr>
                                        <tr class="table-active">
                                            <th>Total Deposit :</th>
                                            <td class="text-end">
                                            <span class="fw-semibold" id="cart-total">
                                                0.00
                                            </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div><!-- end row -->
                        <div class="text-end">
                            <button class="btn btn-soft-info" type="button">Submit</button>
                            <button class="btn btn-soft-danger" type="button">Reject</button>
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
