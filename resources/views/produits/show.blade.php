
@extends('layouts.menu')

@section('content')



<section class="show-section" id="show-id" data-sortbtn="btn-primary">

    

   <div class="container1">
        <div class="col-md-6 ">
            <div class="images">
                <img class="image-produit" alt="" src="/img/photos/{{$produit->image}}" >
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="text-serie">
                    <div class="serie">
                        <h2 class="serie-produit"><font style="vertical-align: inherit;">{{$produit->serie}}</font>
                        </h2>
                        <div class="prix">
                            <span class="prix-produit"><font style="vertical-align: inherit; "><strong>{{$produit->prix}} </strong> FCFA</font>
                            </span>
                        </div>
                        <div class="description-produit">
                            <font style="vertical-align: inherit;">
                             @foreach ($produit->magasins as $magasin)
                             @if($magasin->com === '')
                             <font style="vertical-align: inherit;">Vendu par <strong>{{$magasin->nom_magasin}}</strong>    
                            </font>
                            @else
                             <font style="vertical-align: inherit;">Vendu par <strong>{{$magasin->nom_magasin}}</strong> à <strong>{{$magasin->com}}</strong></font>
                             @endif
                            @endforeach
                             
                             <br><br>
                                  
                             <font style="vertical-align: inherit;">
                             <font style="vertical-align: inherit;">Type d'appareil :    <strong>{{$produit->categorie->nom_categorie}}</strong></font>
                             </font>
                             <br>

                             <ul> 
                                    <li><font style="vertical-align: inherit; ">Fabricant:   <strong style="text-transform: uppercase;">{{$produit->marque}}</strong></font></font>
                                    </li>
                                     <li><font style="vertical-align: inherit;">100% original</font></font>
                                     </li>
                                     <li><font style="vertical-align: inherit;">Region:   <strong>Côte d'Ivoire</strong></font></font>
                                    </li>
                            </ul> 
                        <div class="bouton" >
                             <button class="btn" onclick="window.location.href='#home'">Voir les contacts du magasin</a> 
                             </button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
   </div>

                <div class="col-xs-9" style="margin-top: 3rem;">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Détails du magasin</a></li>
                    </ul>
                    <div class="tab-content">

                    <!--details du magasin-->
                    <div class="tab-pane fade in active" id="home">
                        <small>
                            <ul>
                                <br>
                              @foreach($produit->magasins as $magasin)
                                <li>Nom : {{$magasin->nom_magasin}}</li>
                                @if($magasin->localisation === '')
                                <li>Site Web : <a href="https://{{$magasin->site}}" target="_blank">{{$magasin->site}}</a></li>
                                @else
                                <li>Adresse : {{$magasin->localisation}}</li>
                                @endif
                                <li>Contact : <strong>{{$magasin->contact}}</strong></li>
                              @endforeach

                            </ul>
                        </small>
                    </div>
                    <!--fin details du magasin-->
                  </div>
                </div>

</section>

@endsection
