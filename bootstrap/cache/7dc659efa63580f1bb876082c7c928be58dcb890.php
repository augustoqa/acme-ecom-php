<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

    <div class="dashboard">
        <div class="row expanded">
            <h1>Dashboard</h1>
            <?php echo \App\Classes\CSRFToken::_token(); ?>

            <br>
            <?php echo \App\Classes\Session::get('token'); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\acme-ecommerce\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>