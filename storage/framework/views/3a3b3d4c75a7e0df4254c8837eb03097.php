<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulo</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
</head>
<body>
    <div id="contenido" class="container">
        <div class="row">
            <div class="col">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\laragon\www\fsinicio\resources\views/layouts/app.blade.php ENDPATH**/ ?>