<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

    <div class="dashboard">
        <div class="row expanded">
            <h1>Dashboard</h1>
            <form action="/admin" method="post" enctype="multipart/form-data">
                <input type="text" name="product" value="testing">
                <input type="file" name="image">
                <input type="submit" value="Go" name="submit">
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\acme-ecommerce\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>