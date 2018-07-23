<?php $__env->startSection('content'); ?>

<section class="probootstrap-slider flexslider2 page-inner">
  <div class="overlay"></div>
  <div class="probootstrap-wrap-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <div class="page-title probootstrap-animate">
            <div class="probootstrap-breadcrumbs">
              <a href="#">Home</a><span>Magasinss</span>
            </div>
            <h1>Magasins</h1>
          </div>

        </div>
      </div>
    </div>
  </div>
  <ul class="slides">
    <li style="background-image: url(/haus/img/slider_1.jpg);"></li>
    <li style="background-image: url(/haus/img/slider_4.jpg);"></li>
    <li style="background-image: url(/haus/img/slider_2.jpg);"></li>
  </ul>
</section>
<!-- END: slider  -->

<section class="probootstrap-section probootstrap-section-lighter">
  <div class="container">
    <div class="row heading">
      <h2 class="mt0 mb50 text-center">Liste des magasins</h2>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-card probootstrap-person text-left">
          <div class="probootstrap-card-media">
            <img src="/haus/img/person_1.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading mb0">Jeremy Slater</h2>
            <p><small>Real Estate Brooker</small></p>
            <p><a href="#">View Details</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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