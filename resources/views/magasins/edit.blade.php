@extends('layouts.menu-login')
@section('title', 'Modifier un magasin')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ url('magasins', $magasin) }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Modifier un magasin
        </span>
        {{ csrf_field() }}
        {{ method_field('patch') }}

        <div class="wrap-input100 validate-input" data-validate = "Mettez un nom de magasin valide s'il vous plait">
          <input class="input100" type="text" name="nom_magasin" value="{{$magasin->nom_magasin}}" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-home" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Mettez une localisation valide s'il vous plait">
          <input class="input100" type="text" name="localisation" value="{{$magasin->localisation}}" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Mettez un contact s'il vous plaît">
          <input class="input100" type="text" name="contact" value="{{$magasin->contact}}" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <input style="padding: 10px 10px 2px 68px;" class="input100" type="file" name="image">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-image" aria-hidden="true"></i>
          </span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Modifier le magasin
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
