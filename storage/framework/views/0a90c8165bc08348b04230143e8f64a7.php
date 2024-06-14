<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba 1</title>
</head>
<body>
    <h1>Vista de prueba</h1>

    <table>
        <tr>
            <th>Id</th>
            <th>Clave</th>
            <th>Nombre</th>
            <th>Precio</th>

        </tr>
        <?php $__currentLoopData = $medicinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($medicina -> MEDICINAS_ID); ?></td>
            <td><?php echo e($medicina -> CLAVE); ?></td>
            <td><?php echo e($medicina -> NOMBRE); ?></td>
            <td><?php echo e($medicina -> PRECIO); ?></td>
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH C:\laragon\www\fsinicio\resources\views/vista1.blade.php ENDPATH**/ ?>