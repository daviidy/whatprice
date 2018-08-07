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
              <button class="sb-search-submit1" type="submit"  type="button" style="margin: -60px; margin-left: 98%; width: 60px; height: 60; background-color: #2586b5;">
      <img src="/img/iconerecherche.png" alt="icone" style="margin-top: -10px; width: 28px; position: static; margin-left: -29px;"/>
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
      <img src="/img/whatprice-accueil/logo_whatprice1.png" class="mt0 mb50 text-center" width="300px">
    </div>
    <p style="color: grey;">Vous ne savez pas où trouver le smartphone, la tablette ou l’ordinateur que vous désirez ? et surtout où vous faire plaisir tout en dépensant moins ? Laissez-nous donc vous inspirez dans votre choix...</p>

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
    <p class="mb10 subtitle" style="color: white">Pourquoi <strong>Whatprice</strong> ?</p>
    <h3 class="mt0 mb40"> </h3>
    <p style="color: white">La recherche des Smartphones, Tablettes et ordinateurs de <strong>Whatprice</strong> permet aux utilisateurs de comparer les prix de ces produits en seulement quelques clics afin de déterminer où les trouver et comment contacter leur fournisseur.</p>
    
    <p style="color: white"><strong>Whatprice</strong> est utilisé pour comparer des offres dans toutes les grandes surfaces et magasins revendeurs des appareils de communication modernes dans la ville d’Abidjan, Côte d’Ivoire. </p>


    <p class="mb50" style="color: white">Obtenir des informations pour le produit que vous désirez acheter et vous pouvez trouver sur <strong>Whatprice</strong> votre appareil et sa localisation rapidement et facilement.</p>
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
          <p><a href="/smartphone">Voir les smartphones</a></p>
        </div>
      </div>
     
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img src="/img/iconetab1.png" style="width: 47px; margin: 9px;"></div>
          <h2 class="heading">Tablettes</h2>
          <p>Toutes les marques de tablettes des plus abordables aux plus onéreuses suivant leur lieu de vente</p>
          <p><a href="/tablette">Voir les tablettes</a></p>
        </div>
      </div>
     
      <div class="clearfix visible-sm-block"></div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><img src="/img/ordinateur.png" style="width: 52px; margin: 8px;"></div>
          <h2 class="heading">Ordinateurs</h2>
          <p>Les ordinateurs de diverses marques partant des prix les plus bas aux plus élevés avec leur point de vente</p>
          <p>
            <a href="/ordinateur">Voir les ordinateurs</a>
          </p>
        </div>
      </div>

      </div>
      <div class="clearfix visible-lg-block visible-md-block"></div>
    </div>
  </div>
</section>

<!-- END: section -->


@endsection
