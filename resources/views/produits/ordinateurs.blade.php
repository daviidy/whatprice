@extends('layouts.menu')

@section('content')

<section class="probootstrap-section probootstrap-section-lighter">
  <div class="container">
    <h1 class="text-center" style="margin-top: 3rem;">Liste des Ordinateurs </h1><br>
           <div id="custom-search-input">
             <form action="/searchOrdinateurs" method="POST" role="search">
               {{ csrf_field() }}
              <div class="input-group col-md-12">
                  <input type="text" name="q" class="  search-query form-control" placeholder="Chercher un produit" required />
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
      @foreach($details as $ordinateur)
        @foreach($ordinateur->magasins as $magasin)
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            <img style="margin: auto;" height="150" src="/img/photos/{{$ordinateur->image}}" class="img-responsive" alt="{{$ordinateur->serie}}">
            <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading"><a href="{{route('produits.show', $ordinateur)}}">{{$ordinateur->serie}}</a></h2>
            <div class="probootstrap-listing-location">
              <i class="icon-location2"></i> <span>{{$ordinateur->marque}}</span>
            </div>
            @auth
            @if (Auth::user()->isMarchand() || Auth::user()->isAdmin())
            <!--BOUTON MODIFIERr-->

              <div class="probootstrap-card-text" style="margin-top: -79px; margin-left: 160px; ">
              <a href="{{route('produits.edit', $ordinateur)}}" style=" font-size: 12px; color: green ; font-weight: 500;">Modifier</a>
            </div>
              <!---->
              @endif
              @endauth
            <div class="probootstrap-listing-price"><strong>{{$ordinateur->prix}} FCFA</strong>
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
      {{ $ordinateurs->links() }}
    </div>

      @elseif(isset($message))
      <p>{{ $message }}</p>

      @else

      <div class="row">
        @foreach($ordinateurs as $ordinateur)
          @foreach($ordinateur->magasins as $magasin)
        <div class="col-md-3 col-sm-6">
          <div class="probootstrap-card probootstrap-listing">
            <div class="probootstrap-card-media">
              <img style="margin: auto;" height="150" src="/img/photos/{{$ordinateur->image}}" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
              <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading"><a href="{{route('produits.show', $tablette)}}">{{$ordinateur->serie}}</a></h2>
              <div class="probootstrap-listing-location">
                <i class="icon-location2"></i> <span>{{$ordinateur->marque}}</span>
              </div>
              @auth
              @if (Auth::user()->isMarchand() || Auth::user()->isAdmin())
              <!--BOUTON MODIFIERr-->

                <div class="probootstrap-card-text" style="margin-top: -79px; margin-left: 160px; ">
                <a href="{{route('produits.edit', $ordinateur)}}" style=" font-size: 12px; color: green ; font-weight: 500;">Modifier</a>
              </div>
                <!---->
                @endif
                @endauth

              <div class="probootstrap-listing-price"><strong>{{$ordinateur->prix}} FCFA</strong>
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
        {{ $ordinateurs->links() }}
        </div>

        @endif


  </div>
</section>


@include('layouts.section-categories')


@include('layouts.section-pourquoi')


@endsection
