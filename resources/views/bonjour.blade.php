@extends('layouts.menu')

@section('content')

<section id="search-home" class="probootstrap-slider flexslider">
  <div class="probootstrap-wrap-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <div class="probootstrap-home-search probootstrap-animate">
            <form action="/searchProduit" method="post">
              <h2 class="heading">Quel produit cherchez-vous ? Nous vous trouvons le moins cher sur le marché</h2>
              <div class="probootstrap-field-group">
                <div class="probootstrap-fields">

                  @csrf

                  <div class="search-field">
                    <i class="fa fa-search"></i>
                    <input name="q" type="text" class="form-control" placeholder="Rechercher un produit" required>
                  </div>
          <!--        <div class="search-category">
                    <i class="icon-chevron-down"></i>
                    <select name="#" id="" class="form-control">
                      <option value="">Smartphone</option>
                      <option value="">Ordinateur</option>
                    </select>
                  </div> -->
                </div>
                <button class="btn btn-success" type="submit"> Chercher</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
  <ul class="slides">
    <li style="background-image: url(haus/img/slider1.jpg);" class="overlay"></li>
    <li style="background-image: url(haus/img/slider1.jpg);" class="overlay"></li>
    <li style="background-image: url(haus/img/slider1.jpg);" class="overlay"></li>
  </ul>
</section>


<section class="probootstrap-section">
  <div class="container">
    <div class="row heading">
      <h2 class="mt0 mb50 text-center">Parcourez nos catégories</h2>
    </div>
    <div class="row probootstrap-gutter10">
      <div class="col-md-6 col-sm-6">
        <a href="{{ url('smartphones') }}" class="probootstrap-hover-overlay">
          <img src="/img/smartphone.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Smartphones</h3>
            <p>{{$smartphones->count()}} produits</p>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-sm-6">
        <a href="{{ url('tablettes') }}" class="probootstrap-hover-overlay">
          <img src="/img/tablette.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Tablettes</h3>
            <p>{{$tablettes->count()}} produits</p>
          </div>
        </a>
      </div>
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-4 col-sm-6">
        <a href="{{ url('ordinateurs') }}" class="probootstrap-hover-overlay">
          <img src="/img/ordi.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Ordinateurs</h3>
            <p>{{$ordinateurs->count()}} produits</p>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/img/tv.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Télévision</h3>
            <p>Bientôt disponible</p>
          </div>
        </a>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-4 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/img/electro.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Electro-ménagers</h3>
            <p>Bientôt disponible</p>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>
<!-- END: section -->

<section class="probootstrap-section probootstrap-bg" style="background-image: url(/img/products.jpg);">
  <div class="container text-center probootstrap-animate" data-animate-effect="fadeIn">
    <h2 class="heading">Whatprice vous permet d'augmenter votre pouvoir d'achat</h2>
    <p class="sub-heading">Pensez à un produit que vous voulez acheter, et utiliser notre moteur de recherche pour trouver le moins cher sur le marché</p>
    <p><a href="#search-home" class="btn btn-primary mb10">Chercher maintenant</a></p>
  </div>
</section>
<!-- END: section -->

<section class="probootstrap-section probootstrap-section-lighter">
  <div class="container">
    <div class="row heading">
      <h2 class="mt0 mb50 text-center">Quel est le smartphone le moins cher ?</h2>
    </div>
    <div class="row">
      @foreach($smartphoneshomes as $smartphoneshome)
        @foreach($smartphoneshome->magasins as $magasin)
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            <img style="margin: auto;" height="150" src="/img/photos/{{$smartphoneshome->image}}" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading"><a href="{{route('produits.show', $smartphoneshome)}}">{{$smartphoneshome->serie}}</a></h2>
            <div class="probootstrap-listing-location">
               <img src="/img/facture.png" style="width: 42px;  margin-top: -9px; margin-left: 0 !important;"> <span>{{$smartphoneshome->marque}}</span>
            </div>
            @auth
            @if (Auth::user()->isMarchand() || Auth::user()->isAdmin())
            <!--BOUTON MODIFIERr-->

              <div class="probootstrap-card-text" id="editer" >
              <a href="{{route('produits.edit', $smartphoneshome)}}" style=" font-size: 12px; color: green ; font-weight: 500;">Modifier</a>
            </div>
              <!---->
              @endif
              @endauth

            <div class="probootstrap-listing-price"><strong>{{$smartphoneshome->prix}} FCFA</strong>
              <div style="float: right;" class="probootstrap-listing-category for-sale">
                @if ($loop->parent->first)
                <span>Le moins cher !</span>
                @endif
              </div>
            </div>
          </div>
          <div class="probootstrap-card-extra">
             <ul>
              <li>
                {{$magasin->nom_magasin}}
                <span>Magasin</span>
              </li>
               @if($magasin->localisation === '')
              <li style=" margin-left: -13px !important;">
                <a href="https://{{$magasin->site}}" target="_blank">{{$magasin->site}}</a>
                <span>Site</span>
              </li>
              <li style="margin-left: 10px;">
                {{$magasin->contact}}
                <span>Contact</span>
              </li>
              @else
              <li>
                {{$magasin->localisation}}
                <span>Lieu</span>
              </li>
              <li>
                {{$magasin->contact}}
                <span>Contact</span>
              </li>
              @endif
            </ul>
          </div>
        </div>
        <!-- END listing -->
      </div>
        @endforeach
      @endforeach
      {{ $smartphoneshomes->links() }}
  </div>


  </div>
</section>

@include('layouts.section-pourquoi')



@endsection
