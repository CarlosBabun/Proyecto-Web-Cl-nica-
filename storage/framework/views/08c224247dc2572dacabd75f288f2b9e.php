
<?php $__env->startSection('content'); ?>
    <h1>editar Doctores</h1>
    <form action="<?php echo e(route('doctores.update', $doctor->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo e($doctor->nombre); ?>">
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="<?php echo e($doctor->apellido); ?>">
        </div>
        <div>
            <label for="especialidad">Especialidad:</label>
            <input type="text" id="especialidad" name="especialidad" value="<?php echo e($doctor->especialidad); ?>">
        </div>

        <button type="submit">Guardar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fsinicio\resources\views/doctores/edit.blade.php ENDPATH**/ ?>