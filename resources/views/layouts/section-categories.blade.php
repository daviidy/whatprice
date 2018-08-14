<section class="probootstrap-section">
  <div class="container">
    <div class="row heading">
      <h2 class="mt0 mb50 text-center">Parcourez nos catégories</h2>
    </div>
    <div class="row probootstrap-gutter10">
      <div class="col-md-6 col-sm-6">
        <a href="{{ url('smartphones') }}" class="probootstrap-hover-overlay">
          <img src="/img/smartphone.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Smartphones</h3>
            <p>{{$smartphones->count()}} produits</p>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-sm-6">
        <a href="{{ url('tablettes') }}" class="probootstrap-hover-overlay">
          <img src="/img/tablette.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Tablettes</h3>
            <p>{{$tablettes->count()}} produits</p>
          </div>
        </a>
      </div>
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-4 col-sm-6">
        <a href="{{ url('ordinateurs') }}" class="probootstrap-hover-overlay">
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
