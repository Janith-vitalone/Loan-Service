<?php $__env->startSection('title'); ?>
    Job landing
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('public/build/css/custom.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="land">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="card shadow-none text-center py-3">
                            <div class="card-body py-4">
                                <div class="avatar-sm position-relative mb-4 mx-auto">
                                    <div class="job-icon-effect"></div>
                                    <div
                                        class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-pencil-ruler-2-line fs-1"></i>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('sales.landing')); ?>" class="stretched-link">
                                    <h5 class="fs-17 pt-1">SALE</h5>
                                </a>
                                <p class="mb-0 text-muted">Module</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card shadow-none text-center py-3">
                            <div class="card-body py-4">
                                <div class="avatar-sm position-relative mb-4 mx-auto">
                                    <div class="job-icon-effect"></div>
                                    <div
                                        class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-airplay-line fs-1"></i>
                                    </div>
                                </div>
                                <a href="#!" class="stretched-link">
                                    <h5 class="fs-17 pt-1">FINANCE</h5>
                                </a>
                                <p class="mb-0 text-muted">Module</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card shadow-none text-center py-3">
                            <div class="card-body py-4">
                                <div class="avatar-sm mb-4 mx-auto position-relative">
                                    <div class="job-icon-effect"></div>
                                    <div
                                        class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-bank-line fs-1"></i>
                                    </div>
                                </div>
                                <a href="#!" class="stretched-link">
                                    <h5 class="fs-17 pt-1">HR</h5>
                                </a>
                                <p class="mb-0 text-muted">Module</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card shadow-none text-center py-3">
                            <div class="card-body py-4">
                                <div class="avatar-sm position-relative mb-4 mx-auto">
                                    <div class="job-icon-effect"></div>
                                    <div
                                        class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-pencil-ruler-line fs-1"></i>
                                    </div>
                                </div>
                                <a href="#!" class="stretched-link">
                                    <h5 class="fs-17 pt-1">OPERATION</h5>
                                </a>
                                <p class="mb-0 text-muted">Module</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card shadow-none text-center py-3">
                            <div class="card-body py-4">
                                <div class="avatar-sm position-relative mb-4 mx-auto">
                                    <div class="job-icon-effect"></div>
                                    <div
                                        class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-line-chart-line fs-1"></i>
                                    </div>
                                </div>
                                <a href="#!" class="stretched-link">
                                    <h5 class="fs-17 pt-1">ADMIN</h5>
                                </a>
                                <p class="mb-0 text-muted">Module</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card shadow-none text-center py-3">
                            <div class="card-body py-4">
                                <div class="avatar-sm position-relative mb-4 mx-auto">
                                    <div class="job-icon-effect"></div>
                                    <div
                                        class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-briefcase-2-line fs-1"></i>
                                    </div>
                                </div>
                                <a href="#!" class="stretched-link">
                                    <h5 class="fs-17 pt-1">Planing</h5>
                                </a>
                                <p class="mb-0 text-muted">Module</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/pages/job-lading.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.landing layouts.landingtop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Loan_serv_L/resources/views/landing/landing.blade.php ENDPATH**/ ?>