

<?php $__env->startSection('contenido'); ?>

    <h1>registrar libro</h1>

    <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

    <?php endif; ?>

    <form action="/libros/nuevo" method="POST">

        <?php echo csrf_field(); ?>

        <label for="titulo">titulo</label>
        <input type="text" id="titulo" name="titulo">

        <br><br>

        <label for="precio">precio en Bs</label>
        <input type="number" id="precio" name="precio">
        <br><br>

        <button type="submit">Registrar libro</button>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arte\resources\views/libros-nuevo.blade.php ENDPATH**/ ?>