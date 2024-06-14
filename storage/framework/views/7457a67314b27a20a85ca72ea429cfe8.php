
<?php $__env->startSection('content'); ?>
    <h1>Especialidades</h1>
    <a href="<?php echo e(route('especialidades.create')); ?>" class="btn btn-primary">Nueva especialidad</a>
    <table class="table table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>


            </tr>
            <thead>
            <tbody>
                <?php $__currentLoopData = $especialidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $especialidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($especialidad->id); ?></td>
                        <td><?php echo e($especialidad->nombre); ?></td>
                        <td><?php echo e($especialidad->descripcion); ?></td>
                        <td>
                            <form action="<?php echo e(route('especialidades.destroy', $especialidad->id)); ?>" method="POST">
                                <a href="<?php echo e(route('especialidades.show', $especialidad->id)); ?>" class="btn btn-primary">Mostrar datos</a>
                                <a href="<?php echo e(route('especialidades.edit', $especialidad->id)); ?>" class="btn btn-primary">Modificar</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" type="button" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
    </table>
    <!--codigo agregado para agregarle diferente paginacion-->
    <?php echo e($especialidades->links('vendor.pagination.bootstrap-4')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fsinicio\resources\views/especialidades/index.blade.php ENDPATH**/ ?>