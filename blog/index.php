<?php
	$titulo_pagina = "Blog informático";
	$icono = "favicon.png";
	$encabezado = "encabezado.jpg";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog Informático</title>
		<link rel="icon" type="image/png" sizes="32x32" href="images/<?php echo $icono; ?>">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	    <script src="js/jquery.min.js"></script>
	    <script src="js/angular.min.js"></script>
	    <script src="js/angular-route.min.js"></script>   	  
	    <script src="js/angular-sanitize.min.js"></script>  	  
	    <script src="js/angular-locale_es-es.js"></script>    
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/bootbox.min.js"></script>  

		<script src="prog/controladores.js"></script>
	</head>
	<body ng-app="miAp" style="background: grey">
		<div class="container" >
			<div class="row" style="padding-bottom: 5px">
				<div class="col-md-12">
					<img class="img-fluid" alt="Responsive image" src="images/<?php echo $encabezado; ?>">
				</div>
			</div>
			<?php include("menu.php");?>
			<div ng-view></div>
		</div>

	</body>
</html>