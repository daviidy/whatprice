@extends('layouts.menu')

@section('content')

<section class="probootstrap-slider flexslider2 page-inner">
  <div class="overlay"></div>
  <div class="probootstrap-wrap-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <div class="page-title probootstrap-animate">
            <div class="probootstrap-breadcrumbs">
              <a href="#">Home</a><span>Magasins</span>
            </div>
            <h1>Liste des Magasins disponibles</h1>
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
      @foreach($magasins as $magasin)
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-card probootstrap-person text-left">
          <div class="probootstrap-card-media">
            <img src="/img/magasins/{{$magasin->image}}" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading mb0">{{$magasin->nom_magasin}}</h2>
            <p><small>{{$magasin->localisation}}</small></p>
            <p><a href="#">{{$magasin->contact}}</a></p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@include('layouts.section-pourquoi')

@endsection
