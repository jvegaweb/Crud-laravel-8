

<?php $__env->startSection('title', 'CRUD con Laravel 8'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Listado de artículos</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <a href="articulos/create" class="btn btn-primary mb-3">CREAR</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($articulo->id); ?></td>
            <td><?php echo e($articulo->codigo); ?></td>
            <td><?php echo e($articulo->descripcion); ?></td>
            <td><?php echo e($articulo->cantidad); ?></td>
            <td><?php echo e($articulo->precio); ?></td>
            <td>
                <form action="<?php echo e(route ('articulos.destroy',$articulo->id)); ?>" method="POST">
                <a href="/articulos/<?php echo e($articulo->id); ?>/edit" class="btn btn-info">Editar</a>
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#articulos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp 7.4\htdocs\crmliveradminlte\resources\views/articulo/index.blade.php ENDPATH**/ ?>