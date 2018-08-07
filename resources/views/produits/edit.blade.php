@extends('layouts.menu-login')
@section('title', 'Modifier un produit')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ url('produits', $produit) }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Modifier un produit
        </span>
        {{ csrf_field() }}
        {{ method_field('patch') }}

        <div class="wrap-input100 validate-input" data-validate = "Mettez un nom de marque valide s'il vous plait">
          <input class="input100" type="text" name="marque" value="{{$produit->marque}}" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-apple" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Mettez une série valide s'il vous plait">
          <input class="input100" type="text" name="serie" value="{{$produit->serie}}" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-mobile-phone" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Mettez un prix s'il vous plaît">
          <input class="input100" type="text" name="prix" value="{{$produit->prix}}" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-money" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Sélectionnez une catégorie s'il vous plait">
          <select name="categorie_id" class="form-control" style="">
            @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->nom_categorie }}</option>
            @endforeach
          </select>
          <span class="focus-input100"></span>

        </div>

        <div class="wrap-input100">
          <input style="padding: 10px 10px 2px 68px;" class="input100" type="file" name="image">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-image" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Sélectionnez une catégorie s'il vous plait">
          <select name="magasin_id" class="form-control" style="">
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
        </div>
      </form>
    </div>
  </div>
</div>



@endsection
