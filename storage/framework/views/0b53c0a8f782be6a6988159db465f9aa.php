

<?php $__env->startSection('titulo', 'Pedido recibido'); ?>

<?php $__env->startSection('contenido'); ?>

    <section>

        <h2>Pedido recibido, case</h2>

        <p><strong>Nombre:</strong> <?php echo e($nombre); ?></p>

        <p><strong>Correo:</strong> <?php echo e($correo); ?></p>

        <p><strong>Pedido:</strong> <?php echo e($pedido); ?></p>

    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arte\resources\views/pedido-recibido.blade.php ENDPATH**/ ?>