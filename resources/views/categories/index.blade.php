@extends('layouts.menu')

@section('content')


<link rel="stylesheet" type="text/css" href="/haus/css/whatprice-accueil/default.css">
    <link rel="stylesheet" type="text/css" href="/haus/css/whatprice-accueil/component.css">
    <!--Menu-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="/haus/css/whatprice-accueil/style.css">


<section class="probootstrap-section" style="margin-top: 158px">
  <div class="container">
    <div class="row heading" style="margin-bottom: 47px;">
      <h2 class="mt0 mb50 text-center">Nos Catégories de Produits</h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img src="/img/iconephone1.png" style="width: 41px; margin: 8px;"></div>
          <h2 class="heading">Smartphones</h2>
          <p>Une panoplie de smartphones de toutes marques des moins chers au plus chers selon les magasins </p>
          <p><a href="#">Voir les smartphones</a></p>
        </div>
      </div>
     
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img src="/img/iconetab1.png" style="width: 47px; margin: 9px;"></div>
          <h2 class="heading">Tablettes</h2>
          <p>Toutes les marques de tablettes des plus abordables aux plus onéreuses suivant leur lieu de vente</p>
          <p><a href="#">Voir les tablettes</a></p>
        </div>
      </div>
     
      <div class="clearfix visible-sm-block"></div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img src="/img/ordinateur.png" style="width: 52px; margin: 8px;"></div>
          <h2 class="heading">Ordinateurs</h2>
          <p>Les ordinateurs de diverses marques partant des prix les plus bas aux plus élevés avec leur point de vente</p>
          <p><a href="#">Voir les ordinateurs</a></p>
        </div>
      </div>

      </div>
      <div class="clearfix visible-lg-block visible-md-block"></div>
    </div>
  </div>
</section>

<!-- END: section -->


@endsection
