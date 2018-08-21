<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') &mdash; Whatprice</title>
    <meta name="description" content="Trouvez le produit le moins cher sur le marché !">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="/haus/css/styles-merged.css">
    <link rel="stylesheet" href="/haus/css/style.css">
    <link rel="stylesheet" href="/haus/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/formcreate/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

  <link rel="stylesheet" type="text/css" href="/haus/css/show.css">

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

  <style type="text/css" id="#jarallax-clip-0">#jarallax-container-0 {
   clip: rect(0 1280px 491px 0);
   clip: rect(0, 1280px, 491px, 0);
}</style>


  </head>
  <body>

<!--  <div class="probootstrap-loader"></div> -->

  <header role="banner" class="probootstrap-header">
    <!-- START: header -->
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <a href="/" class="probootstrap-logo">Whatprice<span>.</span></a>

        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="{{ Request::path() == 'home' ? 'active' : "" }}"><a href="/">Accueil</a></li>
            <li class="dropdown {{ Request::path() == 'produits.index' ? 'active' : "" }}">
              <a href="#" data-toggle="dropdown">
                Produits
              </a>
              <div class="dropdown-menu">
                @guest
                <span class="background-angular"></span>
                <a class="dropdown-item" href="{{ url('smartphones') }}">Smartphones</a> <br>
                <span class="background-react"></span>
                <a class="dropdown-item" href="{{ url('tablettes') }}">Tablettes</a><br>
                <span class="background-vue"></span>
                <a class="dropdown-item" href="{{ url('ordinateurs') }}">Ordinateurs</a>
                @else
                @if (Auth::user()->isMarchand() || Auth::user()->isAdmin())
                <span class="background-angular"></span>
                <a class="dropdown-item" href="{{ url('smartphones') }}">Smartphones</a> <br>
                <span class="background-react"></span>
                <a class="dropdown-item" href="{{ url('tablettes') }}">Tablettes</a><br>
                <span class="background-vue"></span>
                <a class="dropdown-item" href="{{ url('ordinateurs') }}">Ordinateurs</a><br>
                <span class="background-laravel"></span>
                <a class="dropdown-item" href="{{ route('produits.create') }}">Créer un produit</a>
                @endif
                @endguest
              </div>
            </li>


            @guest
            <li class="dropdown {{ Request::path() == 'magasins.index' ? 'active' : "" }}">
              <a href="{{route('magasins.index')}}">
                Magasins
              </a>
              <li class="dropdown {{ Request::path() == 'categories.index' ? 'active' : "" }}">
              <a href="{{route('categories.index')}}" >
                  Catégories
            @else
            @if (Auth::user()->isMarchand())
              <li class="dropdown {{ Request::path() == 'magasins.index' ? 'active' : "" }}" ">
                <a href="#" data-toggle="dropdown" style="display: none;>
                Magasins
                </a>
                <li class="dropdown {{ Request::path() == 'categories.index' ? 'active' : "" }}">
              <a href="{{route('categories.index')}}" >
                  Catégories
              </a>
              @else
              @if (Auth::user()->isAdmin())
              <li class="dropdown {{ Request::path() == 'magasins.index' ? 'active' : "" }}">
              <a href="#" data-toggle="dropdown">
                Magasins
              </a>
                @endif
              @endif
            @endguest
              <div class="dropdown-menu">
                @guest
                <span class="background-angular"></span>
                <a class="dropdown-item" href="{{ route('magasins.index') }}">Voir la liste des magasins</a>
                @else
                @if (Auth::user()->isAdmin())
                <span class="background-angular"></span>
                <a class="dropdown-item" href="{{ route('magasins.index') }}">Voir la liste des magasins</a><br>
                <span class="background-react"></span>
                <a class="dropdown-item" href="{{ route('magasins.create') }}">Créer un magasin</a>
                @endif
                @endguest
              </div>
            </li>
            @auth
            @if (Auth::user()->isAdmin())

            <li class="dropdown {{ Request::path() == 'categories.index' ? 'active' : "" }}">
              <a href="#" data-toggle="dropdown">
                  Catégories
              </a>
              <div class="dropdown-menu">
                <span class="background-react"></span>
                <a class="dropdown-item" href="{{ route('categories.index') }}">Voir la liste des catégories</a><br>
                <span class="background-angular"></span>
                <a class="dropdown-item" href="{{ route('categories.create') }}">Créer une catégorie</a>
              </div>
            </li>
            @endif
            @endauth
            <li class="{{ Request::path() == 'contact' ? 'active' : "" }}"><a href="#">Travaillez avec nous</a></li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Se déconnecter') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Adresse</h5>
            <p>Koumassi quartier Fanny</p>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>


@yield('content')





<footer class="probootstrap-footer probootstrap-bg" style="background-image: url(img/slider_3.jpg)">
  <div class="container">
    <div class="row mb60">
      <div class="col-md-3">
        <div class="probootstrap-footer-widget">
          <h4 class="heading">A propos.</h4>
          <p>Vous avez besoin de connaitre les différents prix d'un produit sur le marché, pour augmenter votre pouvoir d'achat ? Utilisez Whatprice </p>
          <p><a href="#search-home">Chercher un produit</a></p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="probootstrap-footer-widget probootstrap-link-wrap">
          <h4 class="heading">Catégories des produits</h4>
          <ul class="stack-link">
            <li><a href="{{ url('smartphones') }}">Smartphones <small>({{$smartphones->count()}} produits)</small></a></li>
            <li><a href="{{ url('tablettes') }}">Tablettes <small>({{$tablettes->count()}} produits)</small></a></li>
            <li><a href="{{ url('ordinateurs') }}">Ordinateurs <small>({{$ordinateurs->count()}} produits)</small></a></li>
            <li><a href="#">Télévision <small>(Bientôt disponible)</small></a></li>
            <li><a href="#">Electro-ménagers <small>(Bientôt disponible)</small></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="probootstrap-footer-widget">
          <h4 class="heading">Travaillez avec Whatprice</h4>
          <ul class="stack-link">
            <li><a href="#">Carrières</a></li>
            <li><a href="#">Marchand</a></li>
          </ul>
        </div>
      </div>
<!--      <div class="col-md-3">
        <div class="probootstrap-footer-widget probootstrap-link-wrap">
          <h4 class="heading">Subscribe</h4>
          <p>Far far away behind the word mountains far from.</p>
          <form action="#">
            <div class="form-field">
              <input type="text" class="form-control" placeholder="Enter your email">
              <button class="btn btn-subscribe">Send</button>
            </div>
          </form>
        </div>
      </div>  -->
    </div>
    <div class="row copyright">
      <div class="col-md-6">
        <div class="probootstrap-footer-widget">
          <p>&copy; 2018 <a href="https://whatprice.rikudotech.com/">Whatprice</a>. Par <a href="https://rikudotech.com/">Rikudo Technologies</a>
        </div>
      </div>

    </div>
  </div>
</footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>


  <script src="/haus/js/scripts.min.js"></script>
  <script src="/haus/js/main.min.js"></script>
  <script src="/haus/js/custom.js"></script>




  </body>
</html>
