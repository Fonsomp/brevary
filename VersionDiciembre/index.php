<?php
	session_start();
	require 'Language/requiereLenguage.php';
	require 'listFiles.php';
	clearstatcache();
?>
<!DOCTYPE HTML>

<html ng-app="App" lang="es">
	<head>
		<title>Breviary</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/normalize.css">
		<script src="scripts/viewAdmin.js"></script>
		<script src="js/modernizr-custom.js"></script>	
		
	</head>
	<body ng-controller="mainCtrl">

		<!-- Wrapper -->
			<div id="wrapper" ng-controller="mainCtrl" >

				<!-- Main -->
					<div id="main"  ng-controller="mainCtrl">
						<div class="inner"  ng-controller="mainCtrl">	
							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong><?php echo $titulo; ?></strong><?php echo $titulo1; ?></a>
										<ul class="icons">
										<li><strong><a href="Language/changeLanguage.php?language=es">ES</a></strong></li>
										<li><strong><a href="Language/changeLanguage.php?language=en">EN</a></strong></li>
										<li><strong><a href="Language/changeLanguage.php?language=pt">PT</a></strong></li>
										<li><strong><a href="Language/changeLanguage.php?language=it">IT</a></strong></li>
										<li><strong><a href="Language/changeLanguage.php?language=es">ES-LT</a></strong></li>
										<li><?php echo date("d-M-Y");  ?></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<div class="" id="contenido">
											<header>
												<center><h1><?php echo $tituloH1Header; ?></h1></center>
											</header>
											<p><center><img src="images/EscudoAR.png" width="90%" height="90%"></center></p>	
										</div>
										<div class="ocultar" id="verArchivos">
											<header><h1>Biblioteca de Archivos <i class="icon fa-file"></i></h1></header>
											<header><h3>Lista de Archivos</h3></header>
											<?php echo listarArchivos('docs/');?>
			 							</div>
			 							<div class="ocultar" id="verNotificaciones">
			 								<header><h1>Nuevas Notificaciones <i class="icon fa-comment"></i></h1></header>
											<?php include("conexion/mostrarNotificaciones2.php");?>
										</div>
										<div class="ocultar" id="login">
										<center>	
											<form action="conexion/login.php" method="post" id="formlg">
												<center><span class="icon fa fa-user fa-5x"></span></center>
												<p>Username<input type="text" placeholder="User" name="userlg" required/></p>
												<p>Password<input type="password" placeholder="Password" name="passwordlg" required/></p>
												<p><center><input type="submit" value="Ingresar"/></input></center>
											</form>
										</center>
										</div>
									</div>
								</section>
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar" ng-controller="mainCtrl">
						<div class="inner"  ng-controller="mainCtrl">

							<!-- Search -->
								<section id="search" class="alt">
									<form method=" " action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu" ng-controller="mainCtrl">
									<header class="major">
										<h2><?php echo $menu; ?></h2>
									</header>
									<ul>
										<li><a href="liturgia.php"><?php echo $btLitugias; ?></a></li>
										<li><a href="#"><?php echo $btEjercicios; ?></a></li>
										<li onclick="viewFiles()"><a href="#"><?php echo $btbiblioteca; ?></a></li>
										<li onclick="viewNotifications();"><a href="#"><?php echo $btnotificaciones; ?></a></li>
										<li onclick="viewLogin();"><a href=""><?php echo $btIngresar; ?></a></li>
									</ul>
								</nav>						

							<!-- Section -->
								<section>

									<ul class="contact">
										<li><img src="images/EscudoAR.png" width="80%" height="80%"></li>
										<li onclick="gps();" class="fa-map-marker" id="geolocation-test"><a href=""><?php echo $ubicacion; ?></a><img src="images/Interrogacion.png" width="20" height="20" id="flag" /></li>
										<li id="flag"></li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/lib/angular.min.js"></script>
			<script type="text/javascript" src="scripts/viewAdmin.js"></script>
			<script src="scripts/gps.js"></script>
			
			<script >
			(function(){
				var app = angular.module('App',[ ]);
				app.controller('mainCtrl', ['$scope', function($scope){}]);
				})();
			</script>
	</body>
</html>