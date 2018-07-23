<?php $__env->startSection('title', 'Créer un produit'); ?>

<?php $__env->startSection('content'); ?>


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="<?php echo e(route('produits.store')); ?>" class="login100-form validate-form">
        <span class="login100-form-title">
          Créer un produit
        </span>
        <?php echo e(csrf_field()); ?>


        <div class="wrap-input100 validate-input" data-validate = "Mettez un nom de marque valide s'il vous plait">
          <input class="input100" type="text" name="marque" placeholder="Exemple : Apple">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-apple" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Mettez une série valide s'il vous plait">
          <input class="input100" type="text" name="serie" placeholder="Exemple : Iphone 7">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-mobile-phone" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Mettez un prix s'il vous plaît">
          <input class="input100" type="text" name="prix" placeholder="Exemple : 230000">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-money" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Sélectionnez une catégorie s'il vous plait">
          <select name="categorie_id" class="form-control" style="">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($categorie->id); ?>"><?php echo e($categorie->nom_categorie); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          <span class="focus-input100"></span>

        </div>

        <div class="wrap-input100">
          <input style="padding: 10px 10px 2px 68px;" class="input100" type="file" name="image">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-image" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Sélectionnez une catégorie s'il vous plait">
          <select name="magasin_id" class="form-control" style="">
            <?php $__currentLoopData = $magasins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $magasin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($magasin->id); ?>"><?php echo e($magasin->nom_magasin); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          <span class="focus-input100"></span>

        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Créer le produit
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