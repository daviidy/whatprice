@extends('layouts.menu')

@section('content')

<link rel="stylesheet" type="text/css" href="/haus/css/whatprice-accueil/default.css">
    <link rel="stylesheet" type="text/css" href="/haus/css/whatprice-accueil/component.css">
    <!--Menu-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="/haus/css/whatprice-accueil/style.css">

<section class="probootstrap-section probootstrap-section-lighter">
  <div class="container">
    <h1 class="text-center" style="margin-top: 3rem;">Produits</h1><br>
           <div id="custom-search-input">
             <form action="/searchProduit" method="POST" role="search">
               {{ csrf_field() }}
              <div class="input-group col-md-12">
                  <input type="text" name="q" class="search-query form-control" placeholder="Chercher un produit" />
                  <span class="input-group-btn">
                      <button type="submit" class="btn btn-danger" type="button">
                          <span class=" fa fa-search"></span>
                      </button>
                  </span>
              </div>
            </form>
          </div><br>

          @if(isset($details))
          <p> Les résultats de recherche pour <b> {{ $query }} </b> sont :</p>


    <div class="row">
      @foreach($details as $produit)
        @foreach($produit->magasins as $magasin)
      <div class="col-md-4 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            <img src="/img/photos/{{$produit->image}}" class="img-responsive" alt="{{$produit->serie}}">
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

      @elseif(isset($message))
      <p>{{ $message }}</p>

      @else

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
                 <img src="/img/facture.png" style="width: 47px; margin-right: 8px; margin-top: -9px;"> <span>{{$produit->marque}}</span>
              </div>
              <div class="probootstrap-listing-category for-sale" style="margin-top: -34px;">@if ($loop->parent->first)
              <span >Le moins cher !</span>
              @endif
            </div>
              <div class="probootstrap-listing-price" style="margin-top: -5px; margin-bottom: -25px;"><strong>{{$produit->prix}} FCFA</strong></div>
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

        @endif

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


@endsection
