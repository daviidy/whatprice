@extends('layouts.menu')

@section('content')

<section class="probootstrap-section probootstrap-section-lighter">
  <div class="container">
    <h1 class="text-center" style="margin-top: 3rem;">Liste de </h1><br>
           <div id="custom-search-input">
             <form action="/searchProduit" method="POST" role="search">
               {{ csrf_field() }}
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

          @if(isset($details))
          <p> Les résultats de recherche pour <b> {{ $query }} </b> sont :</p>


    <div class="row">
      @foreach($details as $produit)
        @foreach($produit->magasins as $magasin)
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            <img style="margin: auto;" height="150" src="/img/photos/{{$produit->image}}" class="img-responsive" alt="{{$produit->serie}}">
            <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading"><a href="#">{{$produit->serie}}</a></h2>
            <div class="probootstrap-listing-location">
              <i class="icon-location2"></i> <span>{{$produit->marque}}</span>
            </div>
            <div class="probootstrap-listing-price"><strong>{{$produit->prix}} FCFA</strong>
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
      {{ $produits->links() }}
    </div>

      @elseif(isset($message))
      <p>{{ $message }}</p>

      @else

      <div class="row">
        @foreach($produits as $produit)
          @foreach($produit->magasins as $magasin)
        <div class="col-md-3 col-sm-6">
          <div class="probootstrap-card probootstrap-listing">
            <div class="probootstrap-card-media">
              <img style="margin: auto;" height="150" src="/img/photos/{{$produit->image}}" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
              <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading"><a href="#">{{$produit->serie}}</a></h2>
              <div class="probootstrap-listing-location">
                <i class="icon-location2"></i> <span>{{$produit->marque}}</span>
              </div>

              <div class="probootstrap-listing-price"><strong>{{$produit->prix}} FCFA</strong>
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
        {{ $produits->links() }}
        </div>

        @endif


  </div>
</section>



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


@endsection
