<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba 1</title>
</head>
<body>
    <h1>datos de los pacientes</h1>
    <a href="<?php echo e(route('pacientes.index')); ?>">Regresar</a>    
    <p>Id: <?php echo e($paciente -> id); ?></p>
    <p>Nombre: <?php echo e($paciente -> nombre); ?></p>
    <p>Apellido: <?php echo e($paciente -> apellido); ?></p>
    <p>Edad: <?php echo e($paciente -> edad); ?></p>
    <p>Sexo: <?php echo e($paciente -> sexo); ?></p>

</body>
</html><?php /**PATH C:\laragon\www\fsinicio\resources\views/pacientes/show.blade.php ENDPATH**/ ?>