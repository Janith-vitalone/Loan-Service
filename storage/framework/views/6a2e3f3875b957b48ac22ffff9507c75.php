<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.input-masks'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Cash In Hand To Bank &nbsp;(Daily Payment-BL)</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Deposit Bank</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example">
                                        <option selected></option>
                                        <option value="1"></option>
                                        <option value="2"></option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Type</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example">
                                        <option selected>Part Payment Receipt</option>
                                        <option value="1">1.</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Branch Code</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example">
                                        <option selected></option>
                                        <option value="1"></option>
                                        <option value="2"></option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">CRO</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example">
                                        <option selected>Part Payment Receipt</option>
                                        <option value="1">1.</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="validationDefault03" class="form-label">Root</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="exampleInputdate" class="form-label">Date </label>
                                    <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="25 12,2021">
                                </div>
                                <div class="text-end">
                                    <button type="button" class="btn btn-soft-danger">Search</button>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
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

<?php echo $__env->make('layouts.sales layout.layouts-detached', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Loan_serv_L/resources/views/sales/installment/cash-in-hand-to-bank.blade.php ENDPATH**/ ?>