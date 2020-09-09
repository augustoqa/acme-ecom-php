<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel - <?php echo $__env->yieldContent('title'); ?></title>

    <link rel="stylesheet" href="/css/all.css">
</head>
<body>

<div class="off-canvas position-left reveal-for-large" id="offCanvas" data-off-canvas>
    <!-- Side bar -->
    <ul class="vertical menu">
        <li><a href="#">Foundation</a></li>
        <li><a href="#">Dot</a></li>
        <li><a href="#">ZURB</a></li>
        <li><a href="#">Com</a></li>
        <li><a href="#">Slash</a></li>
        <li><a href="#">Sites</a></li>
    </ul>
    <!-- end Side bar -->
</div>

<div class="off-canvas-content" data-off-canvas-content>
    <!-- Your page content lives here -->

    <?php echo $__env->yieldContent('content'); ?>
</div>

<script src="/js/all.js"></script>
</body>
</html><?php /**PATH C:\wamp64\www\acme-ecommerce\resources\views/admin/layout/base.blade.php ENDPATH**/ ?>