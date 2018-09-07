
<!DOCTYPE html>

<html>
<head>
	<title>sami</title>
	<link rel="stylesheet" type="text/css" href="sami.css">
</head>
<body>



<section class="show-section" id="show-id" data-sortbtn="btn-primary">

    

   <div class="container">
    	<div class="col-md-6 image">
        	<img alt="" src="/img/photos/{{$produit->image}}" style="max-width: 75%;">
    	</div>
    	<div class="col-md-6 text">
        	<div class="serie">
            	<h2 class="serie-produit" style="margin-top: 15px;"><font style="vertical-align: inherit; font-size: 54px;">{{$produit->serie}} </font>
            	</h2>
            <div class="prix">
                <span class="prix-produit"><font style="vertical-align: inherit;"><strong>{{$produit->prix}} </strong>FCFA</font></font>
                </span>
            </div>
            <div class="description-produit"><font style="vertical-align: inherit;">
                @foreach($produit->magasins as $magasin)
                <font style="vertical-align: inherit;">Vendu par <strong>{{$magasin->nom_magasin}}</strong></font>
                </font>
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
                <div class="section" style="padding-bottom:20px;">
                        <button class="btn" onclick="window.location.href='#menu2'" style="color: white;">Voir les contacts du magasin</a> 
                        </button>
            	</div>
          	</div>
            
        </div>
   </div>

</body>
</html>