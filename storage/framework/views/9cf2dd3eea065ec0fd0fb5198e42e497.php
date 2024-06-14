<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba 1</title>
</head>
<body>
    <h1>datos de la especialidad</h1>
    <a href="<?php echo e(route('especialidades.index')); ?>">Regresar</a>
    <p>Id: <?php echo e($especialidad -> id); ?></p>
    <p>Nombre: <?php echo e($especialidad -> nombre); ?></p>
    <p>Descripcion: <?php echo e($especialidad -> descripcion); ?></p>
</body>
</html><?php /**PATH C:\laragon\www\fsinicio\resources\views/especialidades/show.blade.php ENDPATH**/ ?>