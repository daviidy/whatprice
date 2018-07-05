<html lang="en" class=" js "><head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>WhatPrice</title>
		<meta name="description" content="Expanding Search Bar Deconstructed">
		<meta name="keywords" content="transition, search, expanding, search input, sliding input, css3, javascript">
		<meta name="author" content="Codrops">
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/whatprice-accueil/default.css">
		<link rel="stylesheet" type="text/css" href="css/whatprice-accueil/component.css">
		<!--Menu-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/whatprice-accueil/style.css">
		
		<script src="js/whatprice-accueil/modernizr.custom.js"></script>
	</head>
	<body cz-shortcut-listen="true">

		<div class="container">
			<!-- Top Navigation -->
			<div class="menunav">
				<a href="#" class="btn">Home</a>
   				<a href="#" class="btn">Magasins</a>
    			<a href="#" class="btn">Catégories</a>
    			<a href="#" class="btn">Produits</a>

			</div>
			
			<!-- Top Navigation -->
			
			<div class="main clearfix">
				<!-- Optional columns for small components -->
				<div class="column">
					<div class="logo">
						<img src="images/whatprice-accueil/logo_whatprice.png" width="150%">
						<p style="font-size: 1.5em">Comparateur de prix des Appareils électroniques modernes de communication</p>
					</div>
			
				</div>
				<div class="column">
					<img src="images/whatprice-accueil/icone produit 2.jpg" width="150%" style="max-width: 222px; margin-top: 34px; margin-left: 11px;">
					</div>
					<div class="research" style="margin-left: -32px;">
					<div id="sb-search1" class="sb-search1">
						<form class="sami">
							<input class="sb-search-input1" placeholder="Que cherchez-vous?" type="search" value="" name="search1" id="search1" style="margin: 55; height: 60px; padding: 10px; width: 100%">
							<input class="sb-search-submit1" type="submit" value="" style="margin: -115px; margin-left: 93%; width: 60px; height: 60; background-color: #2586b5; color: #FFF;">
							
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="js/whatprice-accueil/classie.js"></script>
		<script src="js/whatprice-accueil/uisearch.js"></script>
		<script>
			new UISearch( document.getElementById( 'sb-search1' ) );
		</script>
	
</body></html>

 
