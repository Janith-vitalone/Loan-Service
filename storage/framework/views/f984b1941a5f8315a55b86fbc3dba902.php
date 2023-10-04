<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.input-masks'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Receipt Cancel</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="">
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Cancel No <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Type</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example" required>
                                <option selected>Part Payment Receipt</option>
                                <option value="1">One</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Receipt No <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
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
                            <label for="validationDefault03" class="form-label">Type</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Amount</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Bank</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example" required>
                                <option selected>HNB</option>
                                <option value="1">One</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="exampleFormControlTextarea5" class="form-label">Comment <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea5" rows="5" required></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
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

<?php echo $__env->make('layouts.sales layout.layouts-detached', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Loan_serv_L/resources/views/sales/installment/receipt-cancel.blade.php ENDPATH**/ ?>