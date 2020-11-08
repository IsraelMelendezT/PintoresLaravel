<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menú
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
  <button class="dropdown-item" type="button"><a href="<?php echo e(action('pintoresController@menu')); ?>">Inicio</a></button>
  <button class="dropdown-item" type="button"><a href="<?php echo e(action('pintoresController@daVinci')); ?>">Leonardo da Vinci</a></button>
  <button class="dropdown-item" type="button"><a href="<?php echo e(action('pintoresController@vanGogh')); ?>">Vincent van Gogh</a></button>
  <button class="dropdown-item" type="button"><a href="<?php echo e(action('pintoresController@munch')); ?>">Edvard Munch</a></button>
  <button class="dropdown-item" type="button"><a href="<?php echo e(action('pintoresController@diego')); ?>">Diego Rivera</a></button>
  <button class="dropdown-item" type="button"><a href="<?php echo e(action('pintoresController@toru')); ?>">Toru Kamei</a></button>
  <button class="dropdown-item" type="button"><a href="<?php echo e(action('pintoresController@login')); ?>" style="color: red;">Salir</a></button>


  </div>
</div>
<hr><?php /**PATH C:\laragon\www\PintoresLaravel\resources\views/includes/navbar.blade.php ENDPATH**/ ?>