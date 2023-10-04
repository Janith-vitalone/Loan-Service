<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.input-masks'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Loan Approval</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="cleave-time-format" class="form-label">Branch</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example" required>
                                        <option selected></option>
                                        <option value="1"> 2 </option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <label class="form-label">Root No</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control rounded-end flag-input" readonly
                                           placeholder="" data-bs-toggle="dropdown" aria-expanded="false"/>
                                    <div class="dropdown-menu w-100">
                                        <div class="p-2 px-3 pt-1 searchlist-input">
                                            <input type="text"
                                                   class="form-control form-control-sm border search-countryList"
                                                   placeholder="Search Root No..."/>
                                        </div>
                                        <ul class="list-unstyled dropdown-menu-list mb-0"></ul>
                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end row -->
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

<?php echo $__env->make('layouts.sales layout.layouts-detached', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Loan_serv_L/resources/views/sales/approvals/loan-approval-details-form.blade.php ENDPATH**/ ?>