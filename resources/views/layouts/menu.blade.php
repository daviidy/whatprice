<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trouvez le produit le moins cher sur le marché &mdash; Whatprice</title>
    <meta name="description" content="Trouvez le produit le moins cher sur le marché !">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="haus/css/styles-merged.css">
    <link rel="stylesheet" href="haus/css/style.css">
    <link rel="stylesheet" href="haus/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/formcreate/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <div class="probootstrap-loader"></div>

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
                <a class="dropdown-item" href="{{ route('produits.create') }}">Créer un produit</a><br>
                <a class="dropdown-item" href="{{ route('produits.index') }}">Voir la liste des produits</a>
              </div>
            </li>
            <li class="dropdown {{ Request::path() == 'magasins.index' ? 'active' : "" }}">
              <a href="#" data-toggle="dropdown">
                Magasins
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('magasins.create') }}">Créer un magasin</a><br>
                <a class="dropdown-item" href="{{ route('magasins.index') }}">Voir la liste des magasins</a>
              </div>
            </li>
            <li class="dropdown {{ Request::path() == 'categories.index' ? 'active' : "" }}">
              <a href="#" data-toggle="dropdown">
                  Catégories
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('categories.create') }}">Créer une catégorie</a><br>
                <a class="dropdown-item" href="{{ route('categories.index') }}">Voir la liste des catégories</a>
              </div>
            </li>
            <li class="{{ Request::path() == 'contact' ? 'active' : "" }}"><a href="/contact">Travaillez avec nous</a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Address</h5>
            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
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
          <h4 class="heading">About Haus.</h4>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          <p><a href="#">Read more...</a></p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="probootstrap-footer-widget probootstrap-link-wrap">
          <h4 class="heading">Quick Links</h4>
          <ul class="stack-link">
            <li><a href="#">Property Listing</a></li>
            <li><a href="#">Rent Properties</a></li>
            <li><a href="#">Sell Properties</a></li>
            <li><a href="#">Agents</a></li>
            <li><a href="#">Testimonial</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="probootstrap-footer-widget">
          <h4 class="heading">Popular Cities</h4>
          <ul class="stack-link">
            <li><a href="#">New York <small>(320 properties)</small></a></li>
            <li><a href="#">San Francisco <small>(294 properties)</small></a></li>
            <li><a href="#">Brooklyn <small>(300 properties)</small></a></li>
            <li><a href="#">Chicago <small>(268 properties)</small></a></li>
            <li><a href="#">Los Angeles <small>(342 properties)</small></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
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
      </div>
    </div>
    <div class="row copyright">
      <div class="col-md-6">
        <div class="probootstrap-footer-widget">
          <p>&copy; 2017 <a href="https://uicookies.com/">uiCookies:Haus</a>. Designed by <a href="https://uicookies.com/">uicookies.com</a> <br> Demo Photos from <a href="https://pixabay.com/">Pixabay</a> &amp; <a href="https://unsplash.com/">Unsplash</a></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="probootstrap-footer-widget right">
          <ul class="probootstrap-footer-social">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>


  <script src="haus/js/scripts.min.js"></script>
  <script src="haus/js/main.min.js"></script>
  <script src="haus/js/custom.js"></script>

  </body>
</html>
