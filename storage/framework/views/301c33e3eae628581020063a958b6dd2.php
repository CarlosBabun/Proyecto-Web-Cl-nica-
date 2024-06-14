<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicion de doctores</title>
</head>
<body>
    <h1>editar Doctores</h1>
    <form action="<?php echo e(route('pacientes.update', $paciente->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>   
        <?php echo method_field('PUT'); ?>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo e($paciente->nombre); ?>">
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="<?php echo e($paciente->apellido); ?>">
        </div>
        <div>
            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="edad" value="<?php echo e($paciente->edad); ?>">
        </div>
        <div>
            <label for="sexo">Sexo:</label>
            <input type="text" id="sexo" name="sexo" value="<?php echo e($paciente->sexo); ?>">
        </div>

        <button type="submit">Guardar</button>
    </form>
</body>
</html><?php /**PATH C:\laragon\www\fsinicio\resources\views/pacientes/edit.blade.php ENDPATH**/ ?>