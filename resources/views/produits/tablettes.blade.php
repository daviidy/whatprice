@extends('layouts.menu')

@section('content')

<section class="probootstrap-section probootstrap-section-lighter">
  <div class="container">
    <h1 class="text-center" style="margin-top: 3rem;">Liste des Tablettes </h1><br>
           <div id="custom-search-input">
             <form action="/searchTablettes" method="POST" role="search">
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
  @guest
      @foreach($details as $tablette)      
        @foreach($tablette->magasins as $magasin)
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            <img style="margin: auto;" height="150" src="/img/photos/{{$tablette->image}}" class="img-responsive" alt="{{$tablette->serie}}">
            <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading"><a href="{{route('produits.show', $tablette)}}">{{$tablette->serie}}</a></h2>
            <div class="probootstrap-listing-location">
               <img src="/img/facture.png" style="width: 42px;  margin-top: -9px; margin-left: 0 !important;"> <span>{{$tablette->marque}}</span>
            </div>
            <div class="probootstrap-listing-price"><strong>{{$tablette->prix}} FCFA</strong>
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
   
    @elseif(Auth::user()->isAdmin())
      @foreach($details as $tablette)      
        @foreach($tablette->magasins as $magasin)
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            <img style="margin: auto;" height="150" src="/img/photos/{{$tablette->image}}" class="img-responsive" alt="{{$tablette->serie}}">
            <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading"><a href="{{route('produits.show', $tablette)}}">{{$tablette->serie}}</a></h2>
            <div class="probootstrap-listing-location">
               <img src="/img/facture.png" style="width: 42px;  margin-top: -9px; margin-left: 0 !important;"> <span>{{$tablette->marque}}</span>
            </div>

             @include('layouts.bouton-modifier-tablettes')
            
            <div class="probootstrap-listing-price"><strong>{{$tablette->prix}} FCFA</strong>
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
    @endguest

    
      @foreach($details as $tablette)
          @foreach($tablette->magasins as $magasin)
            @auth
            @if(Auth::user()->isMarchand())
              @if($magasin->nom_magasin === $user )
        <div class="col-md-3 col-sm-6">
          <div class="probootstrap-card probootstrap-listing">
            <div class="probootstrap-card-media">
              <img style="margin: auto;" height="150" src="/img/photos/{{$tablette->image}}" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
              <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading"><a href="{{route('produits.show', $tablette)}}">{{$tablette->serie}}</a></h2>
              <div class="probootstrap-listing-location">
               <img src="/img/facture.png" style="width: 42px;  margin-top: -9px; margin-left: 0 !important;"> <span>{{$tablette->marque}}</span>
              </div>

               @include('layouts.bouton-modifier-tablettes')

               <div class="probootstrap-listing-price"><strong>{{$tablette->prix}} FCFA</strong>
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
            
              @endif
              @endif
              @endauth

        @endforeach
        @endforeach
    </div>

      @elseif(isset($message))

        <p>{{ $message }}</p>

      @else

    <div class="row">

      <div class="row">
      @guest
      @foreach($tablettes as $tablette)      
        @foreach($tablette->magasins as $magasin)
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            <img style="margin: auto;" height="150" src="/img/photos/{{$tablette->image}}" class="img-responsive" alt="{{$tablette->serie}}">
            <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading"><a href="{{route('produits.show', $tablette)}}">{{$tablette->serie}}</a></h2>
            <div class="probootstrap-listing-location">
               <img src="/img/facture.png" style="width: 42px;  margin-top: -9px; margin-left: 0 !important;"> <span>{{$tablette->marque}}</span>
            </div>
            <div class="probootstrap-listing-price"><strong>{{$tablette->prix}} FCFA</strong>
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

    @elseif(Auth::user()->isAdmin())
      @foreach($tablettes as $tablette)      
        @foreach($tablette->magasins as $magasin)
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            <img style="margin: auto;" height="150" src="/img/photos/{{$tablette->image}}" class="img-responsive" alt="{{$tablette->serie}}">
            <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
          </div>
          <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading"><a href="{{route('produits.show', $tablette)}}">{{$tablette->serie}}</a></h2>
            <div class="probootstrap-listing-location">
               <img src="/img/facture.png" style="width: 42px;  margin-top: -9px; margin-left: 0 !important;"> <span>{{$tablette->marque}}</span>
            </div>

             @include('layouts.bouton-modifier-tablettes')

            <div class="probootstrap-listing-price"><strong>{{$tablette->prix}} FCFA</strong>
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
      @endguest

        @foreach($tablettes as $tablette)
          @foreach($tablette->magasins as $magasin)
            @auth
            @if(Auth::user()->isMarchand())
              @if($magasin->nom_magasin === $user )
        <div class="col-md-3 col-sm-6">
          <div class="probootstrap-card probootstrap-listing">
            <div class="probootstrap-card-media">
              <img style="margin: auto;" height="150" src="/img/photos/{{$tablette->image}}" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
              <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading"><a href="{{route('produits.show', $tablette)}}">{{$tablette->serie}}</a></h2>
              <div class="probootstrap-listing-location">
               <img src="/img/facture.png" style="width: 42px;  margin-top: -9px; margin-left: 0 !important;"> <span>{{$tablette->marque}}</span>
              </div>

               @include('layouts.bouton-modifier-tablettes')

               <div class="probootstrap-listing-price"><strong>{{$tablette->prix}} FCFA</strong>
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
            
            @endif
            @endif
            @endauth
             
          @endforeach
        @endforeach
        {{ $tablettes->links() }}
        </div>

        @endif


  </div>
</section>



@include('layouts.section-categories')

@include('layouts.section-pourquoi')


@endsection
