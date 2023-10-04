<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.input-masks'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

       <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Document</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="input-group-append mt-4">
                        <span>Bulk Receipt</span>&nbsp;
                        <button class="btn btn-soft-danger btn-sm" type="button">Print</button>
                    </div>
                    <div class="input-group-append mt-4">
                        <span>Service Charge Receipt</span>&nbsp;
                        <button class="btn btn-soft-danger btn-sm" type="button">Print</button>
                    </div>
                    <div class="input-group-append mt-4">
                        <span>Repayment Sheet</span>&nbsp;
                        <button class="btn btn-soft-danger btn-sm" type="button">Print</button>
                    </div>
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

<?php echo $__env->make('layouts.sales layout.layouts-detached', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Loan_serv_L/resources/views/sales/approvels/document-form.blade.php ENDPATH**/ ?>