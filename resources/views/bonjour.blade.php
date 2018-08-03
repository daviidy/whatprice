@extends('layouts.menu')

@section('content')


<link rel="stylesheet" type="text/css" href="/haus/css/whatprice-accueil/default.css">
    <link rel="stylesheet" type="text/css" href="/haus/css/whatprice-accueil/component.css">
    <!--Menu-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="/haus/css/whatprice-accueil/style.css">

<section class="probootstrap-slider flexslider" style="background-image: url(img/whatprice-accueil/image111.png); background-position: -249px;"
}




;" >

  <div class="probootstrap-wrap-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2" style="width: 95%">

          
      <div class="main clearfix" style="margin-left: -70px;
    margin-right: 150px;">
        <!-- Optional columns for small components -->
        <div class="column">
          <div class="logo">
            <img src="/img/whatprice-accueil/logo_whatprice.png" width="150%">
            <p style="    color: rgba(0,0,0,.5); font-size: 18px;">Comparateur de prix des Appareils électroniques modernes de communication</p>
          </div>
      
        </div>
        <div class="column">
        
          </div>
          <div class="research" style="margin-left: -32px;">
          <div id="sb-search1" class="sb-search1">
            <form class="sami" action="/searchProduit" method="POST" role="search" style="margin-left: -10%; margin-right: 8%; margin-top: 392px;">
               {{ csrf_field() }}
              <input class="sb-search-input1" placeholder="Que cherchez-vous?" type="text" name="q"   style="margin: 55; height: 60px; padding: 10px; width: 93.2%; margin-left: 3%;">
              <button class="sb-search-submit1" type="submit"  type="button" value="" style="margin: -60px; margin-left: 98%; width: 60px; height: 60; background-color: #2586b5;">
      <img src="/img/iconerecherche.png" alt="icone" style="margin-top: -5px;
    width: 28px;"/>
    </button> 
            </form>
          </div>

        

        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: section -->

<section class="probootstrap-section">
  <div class="container">
    <div class="row heading">
      <h2 class="mt0 mb50 text-center">Explore Our Neighborhoods</h2>
    </div>
    <div class="row probootstrap-gutter10">
      <div class="col-md-6 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/img/smartphone1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>New York</h3>
            <p>430 Properties</p>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/img/smartphone2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>San Francisco</h3>
            <p>294 Properties</p>
          </div>
        </a>
      </div>
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-4 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/img/smartphone3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Brooklyn</h3>
            <p>300 Properties</p>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/img/smartphone4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Chicago</h3>
            <p>268 Properties</p>
          </div>
        </a>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-4 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/img/products.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
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

<section class="probootstrap-section probootstrap-bg" style="background-image: url(/img/products.jpg);">
  <div class="container text-center probootstrap-animate" data-animate-effect="fadeIn">
    <h2 class="heading"> Des centaines de Smartphones, Tablettes et Ordinateurs</h2>
    <p class="sub-heading">Recherchez, Comparez, ...Trouvez.</p>
    <p><a href="{{ route('produits.index') }}" class="btn btn-primary mb10">Explorer</a></p>
  </div>
</section>
<!-- END: section -->

<section class="probootstrap-section probootstrap-section-lighter">
  <div class="container">
    <div class="row heading">
      <h2 class="mt0 mb50 text-center">Quelques produits</h2>
    </div>
    <div class="row">
      @foreach($produits as $produit)
        @foreach($produit->magasins as $magasin)
      <div class="col-md-4 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            <img src="/img/photos/{{$produit->image}}" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading"><a href="#">{{$produit->serie}}</a></h2>
            <div class="probootstrap-listing-location">
              <img src="/img/facture.png" style="width: 47px; margin-right: 8px; margin-top: -9px;"><span>{{$produit->marque}}</span>
            </div>
            <div class="probootstrap-listing-category for-sale">
              @if ($loop->parent->first)
              <span >Le moins cher !</span>
              @endif
            </div>
            <div class="probootstrap-listing-price"><strong>{{$produit->prix}} FCFA</strong></div>
          </div>
          <div class="probootstrap-card-extra">
            <ul>
              <li>
                {{$magasin->nom_magasin}}
                <span>Magasin</span>
              </li>
              <li>
                {{$magasin->localisation}}
                <span>Lieu</span>
              </li>
              <li>
                {{$magasin->contact}}
                <span>Contact</span>
              </li>
            </ul>
          </div>
        </div>
        <!-- END listing -->
      </div>
        @endforeach
      @endforeach
  </div>


  </div>
</section>

<section class="probootstrap-half reverse">
  <div class="image-wrap">
    <div class="image" style="background-image: url(haus/img/slider_5.jpg);"></div>
  </div>
  <div class="text">
    <p class="mb10 subtitle">Why Choose Us</p>
    <h3 class="mt0 mb40">You Will Love Our Services</h3>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
    <p class="mb50">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    <p><a href="#" class="btn btn-primary mb10">Find out more</a></p>
  </div>
</section>

<section class="probootstrap-section">
  <div class="container">
    <div class="row heading">
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
