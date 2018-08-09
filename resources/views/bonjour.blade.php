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
                    <i class="icon-location2"></i>
                    <input type="text" class="form-control" placeholder="Rechercher un produit">
                  </div>
          <!--        <div class="search-category">
                    <i class="icon-chevron-down"></i>
                    <select name="#" id="" class="form-control">
                      <option value="">Smartphone</option>
                      <option value="">Ordinateur</option>
                    </select>
                  </div> -->
                </div>
                <button class="btn btn-success" type="submit"><i class="icon-magnifying-glass t2"></i> Chercher</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
  <ul class="slides">
    <li style="background-image: url(haus/img/slider_1.jpg);" class="overlay"></li>
    <li style="background-image: url(haus/img/slider_4.jpg);" class="overlay"></li>
    <li style="background-image: url(haus/img/slider_2.jpg);" class="overlay"></li>
  </ul>
</section>
<!-- END: slider  -->

<!--
<section class="probootstrap-section probootstrap-section-lighter">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="probootstrap-card text-center probootstrap-animate">
          <div class="probootstrap-card-media svg-sm colored">
            <img src="haus/img/flaticon/svg/001-prize.svg" class="svg" alt="Free HTML5 Template by uicookies.com">
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading">Award Winning Brooker</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p><a href="#">Find out more</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="probootstrap-card text-center probootstrap-animate">
          <div class="probootstrap-card-media svg-sm colored">
            <img src="haus/img/flaticon/svg/005-new.svg" class="svg" alt="Free HTML5 Template by uicookies.com">
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading">New Houses</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p><a href="#">Find out more</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="probootstrap-card text-center  probootstrap-animate">
          <div class="probootstrap-card-media svg-sm colored">
            <img src="haus/img/flaticon/svg/006-coin.svg" class="svg" alt="Free HTML5 Template by uicookies.com">
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading">Affordable Houses</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p><a href="#">Find out more</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- END: section -->

<section class="probootstrap-section">
  <div class="container">
    <div class="row heading">
      <h2 class="mt0 mb50 text-center">Parcourez nos catégories</h2>
    </div>
    <div class="row probootstrap-gutter10">
      <div class="col-md-6 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/img/smartphone.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Smartphones</h3>
            <p>{{$smartphones->count()}} produits</p>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="/img/tablette.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Tablettes</h3>
            <p>{{$tablettes->count()}} produits</p>
          </div>
        </a>
      </div>
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-4 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
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
      @foreach($smartphones as $smartphone)
        @foreach($smartphone->magasins as $magasin)
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            <img style="margin: auto;" height="150" src="/img/photos/{{$smartphone->image}}" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading"><a href="{{route('produits.show', $smartphone)}}">{{$smartphone->serie}}</a></h2>
            <div class="probootstrap-listing-location">
              <i class="icon-location2"></i> <span>{{$smartphone->marque}}</span>
            </div>

            <div class="probootstrap-listing-price"><strong>{{$smartphone->prix}} FCFA</strong>
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
      {{ $smartphones->links() }}
  </div>


  </div>
</section>

<section class="probootstrap-half reverse">
  <div class="image-wrap">
    <div class="image" style="background-image: url(/img/roi.jpg);"></div>
  </div>
  <div class="text">
    <p class="mb10 subtitle">Pourquoi Whatprice</p>
    <h3 class="mt0 mb40">Devenez enfin Roi !</h3>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
    <p class="mb50">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    <p><a href="#" class="btn btn-primary mb10">Find out more</a></p>
  </div>
</section>

<!--
<section class="probootstrap-section">
  <div class="container">
    <div class="row heading">
      <h2 class="mt0 mb50 text-center">Our Services</h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><i class="icon-list2"></i></div>
          <h2 class="heading">Property Listing</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><i class="icon-power-cord"></i></div>
          <h2 class="heading">Property Management</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><i class="icon-price-tag2"></i></div>
          <h2 class="heading">Renting Properties</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="clearfix visible-lg-block visible-md-block"></div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><i class="icon-direction"></i></div>
          <h2 class="heading">Selling Properties</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><i class="icon-home3"></i></div>
          <h2 class="heading">Brook A Property</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
        <div class="service text-center">
          <div class="icon"><i class="icon-magnifying-glass"></i></div>
          <h2 class="heading">Search Property</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="clearfix visible-lg-block visible-md-block"></div>
    </div>
  </div>
</section>  -->

<!-- END: section -->

<!--
<section class="probootstrap-section probootstrap-section-lighter">
  <div class="container">
    <div class="row heading">
      <h2 class="mt0 mb50 text-center">Our Agents</h2>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="probootstrap-card probootstrap-person text-left">
          <div class="probootstrap-card-media">
            <img src="haus/img/person_1.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading mb0">Jeremy Slater</h2>
            <p><small>Real Estate Brooker</small></p>
            <p><a href="#">View Details</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="probootstrap-card probootstrap-person text-left">
          <div class="probootstrap-card-media">
            <img src="haus/img/person_2.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading mb0">James Butterly</h2>
            <p><small>Buying Agent</small></p>
            <p><a href="#">View Details</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="probootstrap-card probootstrap-person text-left">
          <div class="probootstrap-card-media">
            <img src="haus/img/person_3.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading mb0">James Smith</h2>
            <p><small>Real Estate Brooker</small></p>
            <p><a href="#">View Details</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="probootstrap-card probootstrap-person text-left">
          <div class="probootstrap-card-media">
            <img src="haus/img/person_4.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading mb0">Chris White</h2>
            <p><small>Selling Agent</small></p>
            <p><a href="#">View Details</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

@endsection
