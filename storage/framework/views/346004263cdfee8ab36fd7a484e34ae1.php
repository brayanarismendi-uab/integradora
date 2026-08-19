<?php $__env->startSection('titulo', 'Artezzo'); ?>

<?php $__env->startSection('contenido'); ?>

    <section align="center">

        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Embutidos" width="400">

    </section>

    <h2>Bienvenidos</h2>

    <p>
        somos una pequeña fabrica dedicada a la elaboracion
        de productos alimenticios y relacionados de alta calidad utilizando
        ingredientes frescos y procesos cuidadosamente controlados
    </p>

    <section>

        <h2>Contáctanos</h2>

        <form id="form-pedido" action="<?php echo e(url('/pedido')); ?>" method="POST" novalidate>
            <?php echo csrf_field(); ?>

            <label for="nombre">Tu nombre</label><br>

            <input
                type="text"
                id="nombre"
                name="nombre"
                placeholder="Escribe tu nombre"
                required
            >

            <br><br>

            <label for="correo">Tu correo</label><br>

            <input
                type="email"
                id="correo"
                name="correo"
                placeholder="ejemplo@gmail.com"
                required
            >

            <br><br>

            <label for="msg">Tu pedido</label><br>

            <textarea
                id="msg"
                name="pedido"
                rows="5"
                placeholder="escribe el/los productos que desees"
                required
            ></textarea>

            <br><br>

            <button type="submit">Enviar</button>

            <p id="aviso-contacto" class="aviso"></p>

        </form>

    </section>

    <aside>

        <h3>Horario de atención</h3>

        <p>
            Lunes a Viernes<br>
            08:00 - 18:00 
            
        </p>

    </aside>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arte\resources\views/inicio.blade.php ENDPATH**/ ?>