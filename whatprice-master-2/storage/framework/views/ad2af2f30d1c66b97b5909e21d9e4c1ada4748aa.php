<?php $__env->startSection('content'); ?>

<section class="probootstrap-section probootstrap-section-lighter">
  <div class="container">
    <h1 class="text-center" style="margin-top: 3rem;">Liste de </h1><br>
           <div id="custom-search-input">
             <form action="/searchProduit" method="POST" role="search">
               <?php echo e(csrf_field()); ?>

              <div class="input-group col-md-12">
                  <input type="text" name="q" class="  search-query form-control" placeholder="Chercher un produit" />
                  <span class="input-group-btn">
                      <button type="submit" class="btn btn-danger" type="button">
                          <span class=" fa fa-search"></span>
                      </button>
                  </span>
              </div>
            </form>
          </div><br>

          <?php if(isset($details)): ?>
          <p> Les résultats de recherche pour <b> <?php echo e($query); ?> </b> sont :</p>


    <div class="row">
      <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-4 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            <img src="/img/photos/<?php echo e($produit->image); ?>" class="img-responsive" alt="<?php echo e($produit->serie); ?>">
            <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading"><a href="#"><?php echo e($produit->serie); ?></a></h2>
            <div class="probootstrap-listing-location">
              <i class="icon-location2"></i> <span><?php echo e($produit->marque); ?></span>
            </div>
            <div class="probootstrap-listing-category for-sale"><span>Le moins cher !</span></div>
            <div class="probootstrap-listing-price"><strong><?php echo e($produit->prix); ?> FCFA</strong></div>
          </div>
          <div class="probootstrap-card-extra">
            <ul>
              <li>
                Area
                <span>2400 m2</span>
              </li>
              <li>
                Beds
                <span>3</span>
              </li>
              <li>
                Baths
                <span>2</span>
              </li>
              <li>
                Garages
                <span>1</span>
              </li>
            </ul>
          </div>
        </div>
        <!-- END listing -->
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php else: ?>

      <div class="row">
        <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 col-sm-6">
          <div class="probootstrap-card probootstrap-listing">
            <div class="probootstrap-card-media">
              <img src="/img/photos/<?php echo e($produit->image); ?>" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
              <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading"><a href="#"><?php echo e($produit->serie); ?></a></h2>
              <div class="probootstrap-listing-location">
                <i class="icon-location2"></i> <span><?php echo e($produit->marque); ?></span>
              </div>
              <div class="probootstrap-listing-category for-sale"><span>Le moins cher !</span></div>
              <div class="probootstrap-listing-price"><strong><?php echo e($produit->prix); ?> FCFA</strong></div>
            </div>
            <div class="probootstrap-card-extra">
              <ul>
                <li>
                  Area
                  <span>2400 m2</span>
                </li>
                <li>
                  Beds
                  <span>3</span>
                </li>
                <li>
                  Baths
                  <span>2</span>
                </li>
                <li>
                  Garages
                  <span>1</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- END listing -->
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endif; ?>

    </div>
  </div>
</section>



<section class="probootstrap-section">
  <div class="container">
    <div class="row heading">
      <h2 class="mt0 mb50 text-center">Explore Our Neighborhoods</h2>
    </div>
    <div class="row probootstrap-gutter10">
      <div class="col-md-6 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/haus/img/slider_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>New York</h3>
            <p>430 Properties</p>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/haus/img/slider_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>San Francisco</h3>
            <p>294 Properties</p>
          </div>
        </a>
      </div>
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-4 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/haus/img/slider_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Brooklyn</h3>
            <p>300 Properties</p>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/haus/img/slider_4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Chicago</h3>
            <p>268 Properties</p>
          </div>
        </a>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-4 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/haus/img/slider_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Los Angeles</h3>
            <p>342 Properties</p>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>
<!-- END: section -->

<section class="probootstrap-half reverse">
  <div class="image-wrap">
    <div class="image" style="background-image: url(/haus/img/slider_5.jpg);"></div>
  </div>
  <div class="text">
    <p class="mb10 subtitle">Why Choose Us</p>
    <h3 class="mt0 mb40">You Will Love Our Services</h3>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
    <p class="mb50">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    <p><a href="#" class="btn btn-primary mb10">Find out more</a></p>
  </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>