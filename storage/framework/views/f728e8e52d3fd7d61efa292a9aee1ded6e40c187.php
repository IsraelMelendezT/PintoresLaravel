
<?php $__env->startSection('header'); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('cont'); ?>
    <?php $__env->startSection('login'); ?>
    <hr>
    <center>
 <div>
         <center>
    <form action="<?php echo e(action('pintoresController@inicio')); ?>" method = "POST">
        <?php echo e(csrf_field()); ?>

        <label for="user" style="font-size: 150%;">Usuario</label><br>
        <input type="text"  name = "user"/>
        <br>
        <label for="pass" style="font-size: 150%;">Password</label><br>
        <input type="password"  name = "pass"/>
        <br>
        <label for="llave" style="font-size: 150%;">Llave</label><br>
        <input type="text"  name = "llave"/>
        <br>
        
     <!-- <input type="submit" value="Enviar">-->
        <br><button type="submit" class="btn btn-primary " value="Enviar">Ingresar</button>
        

        <br> <br></center>
    </form> <hr>
    <center>Hecho por: Israel Mélendez Tejeda 5°E <br>Pintores-2020<br>
        <img src="images/logo.png" alt="logo" width="100px"></center>
    
</div>
</center>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.masterinicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PintoresLaravel\resources\views/admon/login.blade.php ENDPATH**/ ?>