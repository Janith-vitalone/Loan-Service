<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('translation.Apex_Radialbar_Chart'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?>
Apexcharts
<?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?>
Apex Radialbar Charts
<?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Simple Radialbar Chart</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="basic_radialbar" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Multiple Radialbar</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="multiple_radialbar" data-colors='["--vz-primary", "--vz-success", "--vz-secondary", "--vz-info"]' class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Circle Chart - Custom Angle</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="circle_radialbar" data-colors='["--vz-primary", "--vz-primary-rgb, 0.65", "--vz-primary-rgb, 0.45", "--vz-primary-rgb, 0.30"]' class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Gradient Circle Chart</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="gradient_radialbar" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Stroked Circle Chart</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="stroked_radialbar" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Radialbars with Image</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="radialbar_with_img" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Semi Circular Chart</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="semi_radialbar" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('build/libs/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/pages/apexcharts-radialbar.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Loan_serv_L/resources/views/charts-apex-radialbar.blade.php ENDPATH**/ ?>