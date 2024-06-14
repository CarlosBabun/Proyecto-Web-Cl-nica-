
<?php $__env->startSection('content'); ?>
    <h1>datos de los doctores</h1>
    <a href="<?php echo e(route('doctores.index')); ?>" class="btn btn-primary">Regresar</a>    
    <p>Id: <?php echo e($doctor -> id); ?></p>
    <p>Nombre: <?php echo e($doctor -> nombre); ?></p>
    <p>Apellido: <?php echo e($doctor -> apellido); ?></p>
    <p>Especialidad: <?php echo e($doctor -> especialidad); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fsinicio\resources\views/doctores/show.blade.php ENDPATH**/ ?>