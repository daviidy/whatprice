
@extends('layouts.menu')

@section('title', $produit->serie)
@section('content')



<section class="show-section" id="show-id" data-sortbtn="btn-primary">



   <div class="container1">
        <div class="col-md-6 ">
            <div class="images">
                <img style="border-radius: 8px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="image-produit" alt="" src="/img/photos/{{$produit->image}}" >
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="text-serie">
                    <div class="serie">
                        <h2 class="serie-produit"><font style="vertical-align: inherit; text-transform: capitalize;">{{$produit->serie}} </font>
                        </h2>
                        <div class="prix">
                            <span class="prix-produit"><font style="vertical-align: inherit; "><strong>{{$produit->prix}} </strong> FCFA</font>
                            </span>
                        </div>
                        <div class="description-produit">




                             <br>
                             <font style="vertical-align: inherit;">Type d'appareil :    <strong>{{$produit->categorie->nom_categorie}}</strong></font>
                             </font>
                             <br>

                             <ul>
                                    <li><font style="vertical-align: inherit; ">Fabricant:   <strong style="text-transform: uppercase;">{{$produit->marque}}</strong></font></font>
                                    </li>
                                     <li><font style="vertical-align: inherit;">100% original</font></font>
                                     </li>
                            </ul>
                            @foreach($produit->magasins as $magasin)
                            <font style="vertical-align: inherit;">Vendu par <strong style="">{{$magasin->nom_magasin}}</strong></font>
                        <div class="bouton" >
                             <button class="btn" data-toggle="modal" data-target="#myModal">Voir les contacts du magasin</a></button>
                        </div>

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Infos du magasin</h4>
                              </div>
                              <div class="modal-body">
                                <ul>
                                  <li>Nom du magasin: {{$magasin->nom_magasin}}</li>
                                  <li>Contact: {{$magasin->contact}}</li>
                                  <li>Adresse: {{$magasin->localisation}}</li>
                                </ul>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>

                          </div>
                        </div> <!--fin modal-->
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
   </div>
</section>


                <div class="col-xs-9" style="margin-top: 3rem;">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Détails produit</a></li>
                      <li><a data-toggle="tab" href="#menu1">Prix</a></li>
                      <li><a data-toggle="tab" href="#menu2">Détails du magasin</a></li>
                    </ul>
                    <div class="tab-content">
                    <!--details du produit-->
                    <div class="tab-pane fade in active" id="home">

                        <small>
                            <ul>
                                <br>
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
                            <br>
                              <li>{{$produit->prix}}</li>
                          </ul>
                        </small>
                    </div>
                    <!--fin details prix-->

                    <!--details du magasin-->
                    <div class="tab-pane fade" id="menu2">
                        <small>
                            <ul>
                                <br>
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

</section>

@endsection
