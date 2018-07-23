<?php $__env->startSection('title', 'Créer un magasin'); ?>

<?php $__env->startSection('content'); ?>


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="<?php echo e(route('magasins.store')); ?>" class="login100-form validate-form">
        <span class="login100-form-title">
          Créer un magasin
        </span>
        <?php echo e(csrf_field()); ?>


        <div class="wrap-input100 validate-input" data-validate = "Mettez un nom de magasin valide s'il vous plait">
          <input class="input100" type="text" name="nom_magasin" placeholder="Exemple : Carrefour">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-home" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Mettez une localisation valide s'il vous plait">
          <input class="input100" type="text" name="localisation" placeholder="Exemple : Marcory">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Mettez un contact s'il vous plaît">
          <input class="input100" type="text" name="contact" placeholder="Exemple : 21 37 12 77">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <input style="padding: 10px 10px 2px 68px;" class="input100" type="file" name="image">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-image" aria-hidden="true"></i>
          </span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Créer le magasin
          </button>
        </div>


        <div class="text-center p-t-136">
          <a class="txt2" href="/">
            Allez à la page d'accueil
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.menu-login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>