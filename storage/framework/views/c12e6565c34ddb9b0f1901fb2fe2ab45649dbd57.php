
<?php $__env->startSection('header'); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('cont'); ?>
    <?php $__env->startSection('login'); ?>
<form action="<?php echo e(action('pintoresController@validar')); ?> method = "POST">
    <?php echo e(csrf_field()); ?>

    <label for="user">Usuario</label>
    <input type="text"  name = "user"/>
    <br>
    <label for="pass">Password</label>
    <input type="text"  name = "pass"/>
    <br>
    <label for="llave">Llave</label>
    <input type="text"  name = "llave"/>
    <br>
    <input type="submit" value="Enviar">
    <br>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.masterinicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PintoresLaravel\resources\views/login.blade.php ENDPATH**/ ?>