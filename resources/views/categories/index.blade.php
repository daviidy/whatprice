@extends('layouts.menu')

@section('content')

<section class="probootstrap-section" style="background: #00000005; margin-top: 85px;">
  <div class="container">
    <div class="row heading">
      <h2 class="mt0 mb50 text-center">Nos Catégories de Produits</h2>
    </div>
    @guest
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img class="iconeCategorie"src="/img/iconephone1.png"></div>
          <h2 class="heading">Smartphones</h2>
          <p>Une panoplie de smartphones de toutes marques des moins chers au plus chers selon les magasins </p>
          <p><a href="{{ url('smartphones') }}">Voir les smartphones</a></p>
        </div>
      </div>
     
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img class="iconeCategorie" src="/img/iconetab1.png" ></div>
          <h2 class="heading">Tablettes</h2>
          <p>Toutes les marques de tablettes des plus abordables aux plus onéreuses suivant leur lieu de vente</p>
          <p><a href="{{ url('tablettes') }}">Voir les tablettes</a></p>
        </div>
      </div>
     
      <div class="clearfix visible-sm-block"></div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img src="/img/ordinateur.png" style="width: 49px; margin: 10px;"></div>
          <h2 class="heading">Ordinateurs</h2>
          <p>Les ordinateurs de diverses marques partant des prix les plus bas aux plus élevés avec leur point de vente</p>
          <p>
            <a href="{{ url('ordinateurs') }}">Voir les ordinateurs</a>
          </p>
        </div>
      </div>
@else
@if (Auth::user()->isMarchand())
 <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img class="iconeCategorie"src="/img/iconephone1.png"></div>
         
          <p></p>
          <p><a href="{{ url('smartphones') }}">Voir toutes vos offres de smartphones</a></p>
        </div>
      </div>
     
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img class="iconeCategorie" src="/img/iconetab1.png" ></div>
          
          <p></p>
          <p><a href="{{ url('tablettes') }}">Voir toutes vos offres de tablettes</a></p>
        </div>
      </div>
     
      <div class="clearfix visible-sm-block"></div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img src="/img/ordinateur.png" style="width: 49px; margin: 10px;"></div>
          
          <p></p>
          <p>
            <a href="{{ url('ordinateurs') }}">Voir toutes vos offres ordinateurs</a>
          </p>
        </div>
      </div>
@endif
@if (Auth::user()->isAdmin())
<div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img class="iconeCategorie"src="/img/iconephone1.png"></div>
         
          <p></p>
          <p><a href="{{ url('smartphones') }}">Voir les offres de smartphones disponibles</a></p>
        </div>
      </div>
     
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img class="iconeCategorie" src="/img/iconetab1.png" ></div>
          
          <p></p>
          <p><a href="{{ url('tablettes') }}">Voir les offres de tablettes disponibles</a></p>
        </div>
      </div>
     
      <div class="clearfix visible-sm-block"></div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img src="/img/ordinateur.png" style="width: 49px; margin: 10px;"></div>
          
          <p></p>
          <p>
            <a href="{{ url('ordinateurs') }}">Voir les offres d'ordinateurs disponibles</a>
          </p>
        </div>
      </div>
  @endif
@endguest

      </div>
      <div class="clearfix visible-lg-block visible-md-block"></div>
    </div>
  </div>
</section>

<!-- END: section -->


@endsection
