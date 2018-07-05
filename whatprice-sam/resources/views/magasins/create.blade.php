<!DOCTYPE html>
<html lang="en">
<head>
    <title>What Price | Add Magasin </title>
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
        <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/whatprice-produit/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

        <button class="contact100-btn-show">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
        </button>

        <div class="wrap-contact100">
            <button class="contact100-btn-hide">
                <i class="fa fa-close" aria-hidden="true"></i>
            </button>

            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Ajouter un magasin
                </span>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Nom is required">
                    <span class="label-input100">Nom</span>
                    <input class="input100" type="text" name="Nom" placeholder="ex: Fnac Cap Sud, Playce, ... ">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Localisation is required ">
                    <span class="label-input100">Localisation</span>
                    <input class="input100" type="text" name="Localisation" placeholder="ex: Abidjan Treichville zone 3 blvd ,..">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Contacts is required">
                    <span class="label-input100">Contacts</span>
                    <input class="input100" name="Contacts" placeholder="00 00 00 00"></input>
                    <span class="focus-input100"></span>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="js/whatprice-produit/map-custom.js"></script>
<!--===============================================================================================-->
    <script src="js/whatprice-produit/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>