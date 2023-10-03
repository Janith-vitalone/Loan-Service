<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.input-masks'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Settlement & Rebate</h4>
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
                                        <label for="cleave-time-format" class="form-label">NIC</label>
                                        <input type="text" class="form-control" id="validationDefault03" required>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
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
                                    <label for="validationDefault03" class="form-label">Loan Amount</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiter" class="form-label">Loan Date</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiters" class="form-label">Interest Rate (%)</label>
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
                                    <label for="cleave-time-format" class="form-label">Period</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Pass Period</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Installment</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Arrears Amount</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="exampleInputdate" class="form-label">Paid Capital Amount</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Paid Interest Amount</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="exampleInputdate" class="form-label">Loan Balance</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-delimiters" class="form-label">Future Interest</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Rebate(%)</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Deduction Amount</label>
                                    <input type="text" class="form-control" id="validationDefault03" >
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">New Balance</label>
                                    <input type="text" class="form-control" id="validationDefault03" >
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-soft-dark">Request</button>
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

<?php echo $__env->make('layouts.sales layout.layouts-detached', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Loan_serv_L/resources/views/sales/approvals/settlement-rebate-approval-form.blade.php ENDPATH**/ ?>