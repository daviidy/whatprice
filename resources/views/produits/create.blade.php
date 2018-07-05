<!DOCTYPE html>
<html lang="en">
<head>
	<title>What Price | Add product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/whatprice-produit/icons"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/whatprice-produitMagasin/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/whatprice-produit/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/whatprice-produitMagasin/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/whatprice-produitMagasin/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/whatprice-produitMagasin/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/whatprice-produitMagasin/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/whatprice-produitMagasin/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/whatprice-produit/util.css">
	<link rel="stylesheet" type="text/css" href="css/whatprice-produit/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		

		<div class="wrap-contact100">

			<form class="contact100-form validate-form" method="post" action="{{ route( 'produits.store' ) }}">
				<span class="contact100-form-title">
					Ajouter un produit
				</span>

				@csrf

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="marque is required">
					<span class="label-input100">marque</span>
					<input class="input100" type="text" name="marque" placeholder="ex: Apple ,Samsung ,Techno,...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "serie is required ">
					<span class="label-input100">serie</span>
					<input class="input100" type="text" name="serie" placeholder="ex: 6S plus ,galaxy s7 edge ,canon cx,..">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid prix is required: a Francs CFA">
					<span class="label-input100">prix</span>
					<input class="input100" name="prix" placeholder="XXXX Francs CFA"></input>
					<span class="focus-input100"></span>
				</div>
				<div class="liste" data-validate = "catégorie is required">
					<span class="label-input100">catégorie</span>
					<SELECT name="listeDeroulante" class="input100" id="listeCategorie">
						<option value="smartphone" selected="selected">Smartphone</option>
						<option value="tablette">Tablette</option>
						<option value="ordinateur">Ordinateur</option>
					</SELECT>					
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span style="margin-top: 15px;">
							Ajouter
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>

			<span class="contact100-more">
				Pour toute information, veuillez nous contacter: <span class="contact100-more-highlight">+25500000000</span>
			</span>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/whatprice-produitMagasin/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/whatprice-produitMagasin/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/whatprice-produitMagasin/bootstrap/js/popper.js"></script>
	<script src="vendor/whatprice-produitMagasin/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/whatprice-produitMagasin/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/whatprice-produitMagasin/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/whatprice-produitMagasin/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="js/whatprice-produit/main.js"></script>



</body>
</html>
