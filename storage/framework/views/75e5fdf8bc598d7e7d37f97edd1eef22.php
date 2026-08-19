

<?php $__env->startSection('contenido'); ?>

    <h1>Catalogo de libros</h1>


    <p>
        Hay <?php echo e(count($libros)); ?> libros en el catálogo.
    </p>

    <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>
            <?php echo e($libro->titulo); ?> - <?php echo e($libro->precio); ?> Bs
        </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <p>Catalogo atendido por Brayan isai arismendi rodriguez</p>

    <a href="/libros/nuevo">registrar un libro</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arte\resources\views/libros.blade.php ENDPATH**/ ?>