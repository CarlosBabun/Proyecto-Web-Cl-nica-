
<?php $__env->startSection('content'); ?>
    <h1>Doctores</h1>
    <a href="<?php echo e(route('doctores.create')); ?>" class="btn btn-primary">Nuevo doctor</a>
    <table class="table table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $doctores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($doctor->id); ?></td>
                    <td><?php echo e($doctor->nombre); ?></td>
                    <td><?php echo e($doctor->apellido); ?></td>
                    <td><?php echo e($doctor->especialidad); ?></td>
                    <td>
                        <form action="<?php echo e(route('doctores.destroy', $doctor->id)); ?>" method="POST">
                            <a href="<?php echo e(route('doctores.show', $doctor->id)); ?>" class="btn btn-primary">Mostrar datos</a>
                            <a href="<?php echo e(route('doctores.edit', $doctor->id)); ?>" class="btn btn-primary">Modificar</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <!-- Código agregado para agregarle paginación -->
    <?php echo e($doctores->links('vendor.pagination.bootstrap-5')); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fsinicio\resources\views/doctores/index.blade.php ENDPATH**/ ?>