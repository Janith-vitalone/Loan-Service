<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.input-masks'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

       <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">ADD CRO</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="">
                        <div class="col-md-6">
                            <label for="employeeName" class="form-label">BRANCH</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example">
                                <option selected>Select Branch</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">CRO NO</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">EPF NO</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">NIC NO</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">CRO NAME</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">DESIGNATION</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">ADDRESS</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">MOBILE NO</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">Land LINE NO</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">USER NAME</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">PASSWORD</label>
                            <input type="password" class="form-control" id="validationDefault03" placeholder="Password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlTextarea5" class="form-label">DESCRIPTION</label>
                            <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Add</button>
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

<?php echo $__env->make('layouts.sales layout.layouts-detached', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Loan_serv_L/resources/views/sales/application/add-cro-form.blade.php ENDPATH**/ ?>