<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.input-masks'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                                        <label for="validationDefault03" class="form-label">Contract Code</label>
                                        <input type="text" class="form-control" id="validationDefault03" required>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="cleave-delimiter" class="form-label">Loan Type</label>
                                        <select class="form-select mb-3" aria-label=".form-select-lg example" required>
                                            <option selected>Model One</option>
                                            <option value="1">1.</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Facility Amount</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiter" class="form-label">Service Charges</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Registration Fee</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiter" class="form-label">Welfare Fee</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Other Changes</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiter" class="form-label">Interest Rate &nbsp;(M%)</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Period</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example" required>
                                        <option selected>20 Days</option>
                                        <option value="1">1.</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiter" class="form-label">Daily Installment</label>
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
                                            <label for="validationDefault03" class="form-label">Account Name</label>
                                            <input type="text" class="form-control" id="validationDefault03" required>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-delimiter" class="form-label">Account Number</label>
                                            <input type="text" class="form-control" id="validationDefault03" required>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="validationDefault03" class="form-label">Bank name</label>
                                            <input type="text" class="form-control" id="validationDefault03" required>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-delimiter" class="form-label">Bank Code</label>
                                            <input type="text" class="form-control" id="validationDefault03" required>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="validationDefault03" class="form-label">Branch</label>
                                            <select class="form-select mb-3" aria-label=".form-select-lg example">
                                                <option selected></option>
                                                <option value="1">1.</option>
                                            </select>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-delimiter" class="form-label">Branch Code</label>
                                            <input type="text" class="form-control" id="validationDefault03" required>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form><!-- end form -->
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/libs/cleave.js/cleave.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/pages/form-masks.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sales layout.layouts-detached', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Loan_serv_L/resources/views/sales/application/loan-details-form.blade.php ENDPATH**/ ?>