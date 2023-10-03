<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.input-masks'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Letter Inactive</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="">
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Contract Code</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Name</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">NIC</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Letter Type</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Letter Date</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Arrears</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Current Balance</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Loan Amount</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationDefault03" class="form-label">Letter Inactive</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example">
                                <option selected>Inactive</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="exampleFormControlTextarea5" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-dark">Submit</button>
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

<?php echo $__env->make('layouts.sales layout.layouts-detached', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Loan_serv_L/resources/views/sales/approvals/letter-inactive.blade.php ENDPATH**/ ?>