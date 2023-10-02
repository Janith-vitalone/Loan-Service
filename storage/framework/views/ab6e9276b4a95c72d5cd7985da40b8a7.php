<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.input-masks'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                            <input type="date" class="form-control mb-3" id="validationDefault03" required>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/libs/cleave.js/cleave.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/pages/form-masks.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sales layout.layouts-detached', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Loan_serv_L/resources/views/sales/recovery-holiday.blade.php ENDPATH**/ ?>