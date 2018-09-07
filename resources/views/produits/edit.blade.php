@extends('layouts.menu-login')
@section('title', 'Modifier un produit')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/img/photos/{{$produit->image}}" alt="IMG">
      </div>


      <form method="post" enctype="multipart/form-data" action="{{ url('produits', $produit) }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Modifier un produit
        </span>
        {{ csrf_field() }}
        {{ method_field('patch') }}

         <div class="wrap-input100 validate-input" data-validate = "Mettez un nom de marque valide s'il vous plait">
          <input class="input100" type="text" name="marque" placeholder="Exemple : Apple" value="{{ $produit->marque }}">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-apple" aria-hidden="true"><br><br></i><i class="fa fa-android" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Mettez une série valide s'il vous plait">
          <input class="input100" type="text" name="serie" placeholder="Exemple : Iphone 7" value="{{ $produit->serie }}">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-mobile-phone" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Mettez un prix s'il vous plaît">
          <input class="input100" type="text" name="prix" placeholder="Exemple : 230000" value="{{ $produit->prix }}">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-money" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Sélectionnez une catégorie s'il vous plait">
          <select name="categorie_id" class="form-control">
            @foreach($categories as $categorie)
              
            <option value="{{ $categorie->id }}">{{ $categorie->nom_categorie }}</option>
            @endforeach
          </select>
          <span class="focus-input100"></span>

        </div>

        <div class="wrap-input100">
          <input style="padding: 10px 10px 2px 68px;" class="input100" type="file" name="image" value="{{ $produit->image }}">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-image" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Sélectionnez une catégorie s'il vous plait">
          <select name="magasin_id" class="form-control">
            @foreach($magasins as $magasin)
            <option value="{{ $magasin->id }}">{{ $magasin->nom_magasin }}</option>
            @endforeach
          </select>
          <span class="focus-input100"></span>

        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Modifier le produit
          </button>
        </div>


        <div class="text-center p-t-136">
          <a class="txt2" href="/">
            Allez à la page d'accueil
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
          @auth
          @if (Auth::user()->isAdmin() || Auth::user()->isMarchand())
          <br>
          <a href="" style="color: #EB5A5A" data-toggle="modal" data-target="#myModal">Ou supprimer ce produit</a>
          @endif
          @endauth
        </div>
      </form>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 style="font-size: 1.3rem;" class="modal-title">Attention, cette action est irréversible !</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Êtes-vous sûrs de vouloir supprimer ce produit ?
                <form action="{{ route('produits.destroy', $produit) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="btn btn-danger" type="submit">Supprimer ce produit</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
            </div>

        </div>
    </div>
</div>
<!-- fin modal -->



@endsection
