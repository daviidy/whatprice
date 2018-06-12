<html lang="en" class=" js "><head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Expanding Search Bar Deconstructed</title>
		<meta name="description" content="Expanding Search Bar Deconstructed">
		<meta name="keywords" content="transition, search, expanding, search input, sliding input, css3, javascript">
		<meta name="author" content="Codrops">
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css">
		<link rel="stylesheet" type="text/css" href="css/component.css">
		<script src="js/modernizr.custom.js"></script>
		<style type="text/css">
			body
			{
				margin: 0;
				padding: 0; 
				background-color: white;
			}
			.search  
			{
				height: 50px;
				position: relative;
	
			}
			.search form
			{
				position: absolute;
				top: 130px;
				left: 40px;
				width: 80%;
				border: 2px solid;
				border-radius: 5px;
				border-color: lightgray;
				padding: 0;
				margin: 0;
				margin-top: -60px;
				margin-left: 50px;
				height: 45px;
				
			}
			.search form input
			{
				top: 130px;
    left: 40px;
    width: 100%;
    height: 40px;
    border-radius: 5px;
    border: none;
    padding: 0;
    margin: 0;
    font-size: 25px;
    text-shadow: 0px,0px,0px,#FFF;
    outline: none
				
			}
			.search form input:focus
			{
				top: 130px;
				left: 40px;
				width: 100%;
				height: 45px;
				border-radius: 5px;
				border: none;
				padding: 0;
				margin: 0;
				font-size: 25px;
				text-shadow: 0px 0px 0px #FFF;
				outline: none;
				box-shadow: 1px 2px 2px 2px lightgray;
				opacity: 1px;
				
			}

       </style>

	</head>

	<body>
    	<div class="logosite">
    		<img src="logo_whatprice.png" style="position: center;" >
    	</div>
    		<div class="search">
    				
    			<form action="" id="searchbar">
    				<input type="searchbar" name="recherche" id="find"/>
    				
    			</form>

    		</div> 
    		<div>
    			
    				
    			</button>
    		</div>
    </body>


</html>

