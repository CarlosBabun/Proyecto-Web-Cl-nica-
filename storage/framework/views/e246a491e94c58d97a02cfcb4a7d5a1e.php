<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicion de especialidad</title>
</head>
<body>
    <h1>editar Especialidad</h1>
    <form action="<?php echo e(route('especialidades.update', $especialidad->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>   
        <?php echo method_field('PUT'); ?>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo e($especialidad->nombre); ?>">
        </div>
        <div>
            <label for="descripcion">Descripcion:</label>
            <input type="text" id="descripcion" name="descripcion" value="<?php echo e($especialidad->descripcion); ?>">
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html><?php /**PATH C:\laragon\www\fsinicio\resources\views/especialidades/edit.blade.php ENDPATH**/ ?>