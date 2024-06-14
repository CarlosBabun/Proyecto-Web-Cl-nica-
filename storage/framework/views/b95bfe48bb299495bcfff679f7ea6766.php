
<?php $__env->startSection('content'); ?>
    <h1>Pacientes</h1>
    <a href="<?php echo e(route('pacientes.create')); ?>" class="btn btn-primary">Nuevo paciente</a>
    <table class="table table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>sexo</th>
                <th>Acciones</th>


            </tr>
            <thead>
            <tbody>
                <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($paciente->id); ?></td>
                        <td><?php echo e($paciente->nombre); ?></td>
                        <td><?php echo e($paciente->apellido); ?></td>
                        <td><?php echo e($paciente->edad); ?></td>
                        <td><?php echo e($paciente->sexo); ?></td>
                        <td>
                            <form action="<?php echo e(route('pacientes.destroy', $paciente->id)); ?>" method="POST">
                                <a href="<?php echo e(route('pacientes.show', $paciente->id)); ?>" class="btn btn-primary">Mostrar
                                    datos</a>
                                <a href="<?php echo e(route('pacientes.edit', $paciente->id)); ?>" class="btn btn-primary">Modificar</a>
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
    <?php echo e($pacientes->links('vendor.pagination.bootstrap-5')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fsinicio\resources\views/pacientes/index.blade.php ENDPATH**/ ?>