@extends('layouts.menu-login')
@section('title', 'Créer une catégorie')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ route('categories.store') }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Créer une catégorie
        </span>
        {{ csrf_field() }}

        <div class="wrap-input100 validate-input" data-validate = "Mettez un nom de catégorie valide s'il vous plait">
          <input class="input100" type="text" name="nom_categorie" placeholder="Exemple : Smartphones">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-sitemap" aria-hidden="true"></i>
          </span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Créer la catégorie
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
