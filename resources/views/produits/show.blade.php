@extends('layouts.single-product')

@section('content')


<div class="container">
        	<div class="row">
               <div class="col-xs-4 item-photo">
                    <img style="max-width:100%;" src="/img/photos/{{$produit->image}}" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{$produit->serie}}</h3>
                    @foreach($produit->magasins as $magasin)
                    <h5 style="color:#337ab7">vendu par <a href="#">{{$magasin->nom_magasin}}</a> · <small style="color:#337ab7">(5054 ventas)</small></h5>
                    @endforeach
                    <!-- Precios -->
                    <h6 class="title-price"><small>PRIX</small></h6>
                    <h3 style="margin-top:0px;">{{$produit->prix}} FCFA</h3>

                    <!-- Detalles especificos del producto -->
    <!--                <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>
                        <div>
                            <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                            <div class="attr" style="width:25px;background:white;"></div>
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>CAPACIDAD</small></h6>
                        <div>
                            <div class="attr2">16 GB</div>
                            <div class="attr2">32 GB</div>
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>CANTIDAD</small></h6>
                        <div>
                            <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                            <input value="1" />
                            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                        </div>
                    </div>  -->

                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-home" aria-hidden="true"></span> Voir les contacts du magasin</button>
  <!--                      <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6> -->
                    </div>
                </div>

                <div class="col-xs-9" style="margin-top: 3rem;">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Détails du produit</a></li>
                      <li><a data-toggle="tab" href="#menu1">Prix</a></li>
                      <li><a data-toggle="tab" href="#menu2">Détails du magasin</a></li>
                    </ul>
                    <div class="tab-content">
                    <!--details du produit-->
                    <div class="tab-pane fade in active" id="home">
                <!--      <p style="padding:15px;">
                            <small>
                            Stay connected either on the phone or the Web with the Galaxy S4 I337 from Samsung. With 16 GB of memory and a 4G connection, this phone stores precious photos and video and lets you upload them to a cloud or social network at blinding-fast speed. With a 17-hour operating life from one charge, this phone allows you keep in touch even on the go.

                            With its built-in photo editor, the Galaxy S4 allows you to edit photos with the touch of a finger, eliminating extraneous background items. Usable with most carriers, this smartphone is the perfect companion for work or entertainment.
                            </small>
                        </p> -->
                        <small>
                            <ul>
                                <li>{{$produit->serie}}</li>
                                <li>Marque: {{$produit->marque}}</li>
                                <li>Catégorie: {{$produit->categorie->nom_categorie}}</li>

                            </ul>
                        </small>
                    </div>
                    <!--fin details du produit-->

                    <!--details prix-->
                    <div class="tab-pane fade" id="menu1">
                        <small>
                          <ul>
                              <li>{{$produit->prix}}</li>
                          </ul>
                        </small>
                    </div>
                    <!--fin details prix-->

                    <!--details du magasin-->
                    <div class="tab-pane fade" id="menu2">
                        <small>
                            <ul>
                              @foreach($produit->magasins as $magasin)
                                <li>{{$magasin->nom_magasin}}</li>
                                <li>Adresse: {{$magasin->localisation}}</li>
                                <li>Contact: {{$magasin->contact}}</li>
                              @endforeach

                            </ul>
                        </small>
                    </div>
                    <!--fin details du magasin-->
                  </div>
                </div>
            </div>
        </div>

@endsection
