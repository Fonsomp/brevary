<?php
	session_start();
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	require 'Language/requiereLenguage.php';
	require 'listFiles.php';

	if(isset($_GET["language"])){
		$_SESSION["language"] = $_GET["language"];
		header("Location:controlPanel.php");
		die();
	}

	if($_POST["subir"] == "cargar"){
		$ruta = "docs/".basename($_FILES['archivo']['name']);
		move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta);
		echo "<script>
			alert('El archivo se subio correctamente');
			window.location='controlPanel.php';
			</script>";}
?>
<!DOCTYPE HTML>

<html ng-app="App" lang="es">
	<head>
		<title>Breviary</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<script type="text/javascript" src="assets/js/jquery-1.12.0.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/editor.js"></script>

		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="assets/css/normalize.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/editor.css"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>	
		
		<script type="text/javascript">
		$(document).ready(function(){
			$('#txt-content').Editor();
			$('#notificaciones').Editor();

			$('#txt-content').Editor('setText', ['<p style="color:red;">Borre esta línea</p>']);

			$('#notificaciones').Editor('setText', ['<p style="color:red;">Borre esta línea</p>']);

			//Funcion para capturar el valor del label de los optgroup principal "Oracion"
			$('#type').change(function(){
				var selected = $(':selected', this);
				$('#tipo').val(selected.parent().attr('label'));
				//alert($('#tipo').val());
			});

			//Funcion para capturar el valor del label de los optgroup secundario "subtype"
			$('.ocultar').change(function(){
				var selected = $(':selected', this);
				$('#tipoS').val(selected.parent().attr('label'));
				//alert($('#tipoS').val());
			});

			$('#btnEnviar').click(function(e){
				e.preventDefault();
				$('#txt-content').text($('#txt-content').Editor('getText'));
				$('#frm-test').submit();				
			});

			$('#btn-notificaciones').click(function(e){
				e.preventDefault();
				$('#notificaciones').text($('#notificaciones').Editor('getText'));
				$('#frmNotification').submit();				
			});
		});	
		</script>
	</head>
	<body ng-controller="mainCtrl">
		<!-- Wrapper -->
		<div id="wrapper" ng-controller="mainCtrl" >
			<!-- Main -->
			<div id="main"  ng-controller="mainCtrl">
				<div class="inner"  ng-controller="mainCtrl">
					<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo"><strong><?php echo $titulo; ?></strong><?php echo $titulo1; ?></a>
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
 							<div class="" id="liturgias">
 								<header><h1><?php echo $tituloH1HeaderCP; ?> <i class="icon fa-book"></i></h1></header>
								<form action="conexion/insertar.php" method="post" id="frm-test" enctype="multipart/form-data" name="form1">
									<textarea id="txt-content" name="txtLiturgias"></textarea><br>
									<input type="submit" id="btnEnviar" name="guardar" value="<?php echo $btEnviar; ?>" disabled>
									<input type="submit" id="btnBuscar" onclick="this.form.action='seek.php'" name="buscar" value="<?php echo $btBuscar; ?>" disabled>
									<input type="date" id="dateL" name="dateLiturgia" disabled="true">

									<select class="ocultar" id="HI" name="HI">
										<option>Seleccion</option>
										<optgroup label="Hora Intermedia" >
												<option>Tercia</option>
												<option>Sexta</option>
												<option>Nona</option>
										</optgroup>

									</select>

									<select class="ocultar" id="Pre" name="Pre">
										<option>Seleccion</option>
										<optgroup label="Prefacio" >
												<option>Prefacio Común I</option>
												<option>Prefacio Común II</option>
												<option>Prefacio Común III</option>
												<option>Prefacio Común IV</option>
												<option>Prefacio Común V</option>
												<option>Prefacio Común VI</option>
												<option>Prefacio Común VII</option>
												<option>Prefacio Común VIII</option>
												<option>Prefacio Común IX</option>
												<option>Prefacio Común X</option>
												<option>Prefacio de Adviento I</option>
												<option>Prefacio de Adviento II</option>
												<option>Prefacio de Adviento III</option>
												<option>Prefacio de Adviento IV</option>
												<option>Prefacio de Navidad I</option>
												<option>Prefacio de Navidad II</option>
												<option>Prefacio de Navidad III</option>
												<option>Prefacio de Epifanía</option>
												<option>Prefacio de Cuaresma I</option>
												<option>Prefacio de Cuaresma II</option>
												<option>Prefacio de Cuaresma III</option>
												<option>Prefacio de Cuaresma IV</option>
												<option>Prefacio de Pascua I</option>
												<option>Prefacio de Pascua II</option>
												<option>Prefacio de Pascua III</option>
												<option>Prefacio de Pascua IV</option>
												<option>Prefacio de la Ascensión I</option>
												<option>Prefacio de la Ascensión II</option>
												<option>Prefacio de la Ascensión III</option>
												<option>Prefacio para después de la Ascensión</option>
												<option>Prefacio Dominical I</option>
												<option>Prefacio Dominical II</option>
												<option>Prefacio Dominical III</option>
												<option>Prefacio Dominical IV</option>
												<option>Prefacio Dominical V</option>
												<option>Prefacio Dominical VI</option>
												<option>Prefacio Dominical VII</option>
												<option>Prefacio Dominical VIII</option>
												<option>Prefacio Dominical IX</option>
												<option>Prefacio Dominical X</option>
												<option>Prefacio de la Santisima Trinidad</option>
												<option>Prefacio de Eucaristía I</option>
												<option>Prefacio de Eucaristía II</option>
												<option>Prefacio de Eucaristía III</option>
												<option>Prefacio de la Confirmación</option>
												<option>Prefacio de la pasión del Señor I</option>
												<option>Prefacio de la pasión del Señor II</option>
												<option>Prefacio de la S. Virgen María I</option>
												<option>Prefacio de la S. Virgen María II</option>
												<option>Prefacio de la S. Virgen María III</option>
												<option>Prefacio de la S. Virgen María IV</option>
												<option>Prefacio de la S. Virgen María V</option>
												<option>Prefacio de las Ordenaciones I</option>
												<option>Prefacio de las Ordenaciones II</option>
												<option>Prefacio de los Ángeles</option>
												<option>Prefacio de los Apóstoles I</option>
												<option>Prefacio de los Apóstoles II</option>
												<option>Prefacio de los Santos I</option>
												<option>Prefacio de los Santos II</option>
												<option>Prefacio de los Santos Mártires</option>
												<option>Prefacio de los Santos Pastores</option>
												<option>Prefacio de San José</option>
												<option>Prefacio de San Pedro y San Pablo, Apóstoles</option>
												<option>Prefacio de Santas Vírgenes y Santos Religiosos</option>
												<option>Prefacio en la fiesta de la conversión de San Agustín</option>
												<option>Prefacio en la fiesta de Ntra. Sra., Madre del buen consejo</option>
												<option>Prefacio en la fiesta de Santa Rita de Casia</option>
												<option>Prefacio en la fiesta de Santa Clara de Montefalco</option>
												<option>Prefacio en la memoria de San Ezequiel Moreno</option>
												<option>Prefacio en la fiesta de Santa Mónica</option>
												<option>Prefacio en la solemnidad de San Agustín</option>
												<option>Prefacio en la solemnidad de Ntra. Sra. Madre de la consolación</option>
												<option>Prefacio en la fiesta de San Nicolás de Tolentino</option>
												<option>Prefacio en la fiesta de Santo Tomás de Villanueva</option>
												<option>Prefacio en la fiesta den todos los Santos de la Orden</option>
												<option>Prefacio del Bautismo</option>
												<option>Prefacio de Difuntos I</option>
												<option>Prefacio de Difuntos II</option>
												<option>Prefacio de Difuntos III</option>
												<option>Prefacio de Difuntos IV</option>
												<option>Prefacio de Difuntos V</option>
										</optgroup>

									</select>
									<select class="ocultar" id="ODM" name="ODM">
										<option>Seleccione</option>
										<optgroup label="Ordinario de la Misa" >
												<option>Ritos Iniciales</option>
												<option>Credo</option>
												<option>Liturgia Eucarística</option>
												<option>Rito de Comunión</option>
												<option>Rito de Conclusión</option>
												<option>Bendición</option>
										</optgroup>

									</select>

									<select class="ocultar" id="PE" name="PE">
										<option>Seleccione</option>
										<optgroup label="Plegaria Eucarística" >
												<option>Plegaria Eucarística I</option>
												<option>Plegaria Eucarística II</option>
												<option>Plegaria Eucarística III</option>
												<option>Plegaria Eucarística IV</option>
												<option>Plegaria Eucarística V/a</option>
												<option>Plegaria Eucarística V/b</option>
												<option>Plegaria Eucarística V/c</option>
												<option>Plegaria Eucarística V/d</option>
												<option>Plegaria Eucarística sobre la reconciliación I</option>
												<option>Plegaria Eucarística sobre la reconciliación II</option>
												<option>Plegaria Eucarística para Niños I</option>
												<option>Plegaria Eucarística para Niños II</option>
										</optgroup>

									</select>
									<select class="ocultar" id="Co" name="Co">
										<option>Seleccione</option>
										<optgroup label="Comunes">
											<?php
												$comunes = array("Aniversario Dedicación de una Iglesia(en la Iglesia)","Aniversario Dedicación de una Iglesia(fuera de la Iglesia)","Común de Santa María Virgen I","Común de Santa María Virgen II","Común de Santa María Virgen III","Común de Santa María Virgen IV(Tiempo de Adviento)","Común de Santa María Virgen V(Tiempo de Navidad","Común de Santa María Virgen V(Tiempo Pascual)","Común de Santa María Virgen VI(Tiempo Pascual)","JesuCristo, Sumo y eterno Sacerdote","Sagrada Eucaristía I","Sagrada Eucaristía II","Santísima Trinidad","Los Santos Ángeles","San José","Misterio de la Santa Cruz","Sagrado Corazón de Jesús","Espititu Santo","Santisimo nombre de Jesús","Preciosísima sangre de Jesús","Todos los Santos","María, Madre de la Iglesia","Común de Mártires I(varios mártires)","Común de Mártires II(varios mártires)","Común de Mártires III(un mártir)","Común de Mártires IV(un mártir)","Común de Mártires V(virgen mártir)","Común de Mártires VI(mujer mártir)","Común de Mártires VII(un misionero)","Común de Mártires VIII(varios misioneros)","Común de Mártires IX(varios mártires en tiempo Pascual)","Común de Mártires X(varios mártires fuera del tiempo Pascual)","Común de Pastores I(Papas)","Común de Pastores II(Obispos)","Común de Pastores III(Pastores)","Común de Pastores IV(Fundador)","Común de Pastores V(Fundadores)","Común de Pastores VI(Misioneros)","Exequias(fuera del Tiempo Pascual)","Exequias(Tiempo Pascual)","Común de Doctores de la Iglesia","Unidad de los Cristianos","Por la Santa Iglesia","Misa Pro Papa","Por el Obispo","Por los Sacerdotes","Por las Vocaciones Sacerdotales","Acción de Gracias","Para la elección del Papa o del Obispo","Por el Concilio o el Sínodo","Misa por los Laicos","Misa por los Cristianos Perseguidos","Misa por la Paz y la Justicia","Misa en Tiempo de Guerra o Desorden","Misa por la Santificación del Trabajo","Misa por los Enfermos","Misa por cualquier Necesidad","Misa por la Familia","Por la evangelización de los Pueblos","Común de Virgenes I","Común de Virgenes II","Común de Virgenes III(varias Virgenes","Común de Santos y Santas I","Común de Santos y Santas II", "Común de Santos y Santas III(un santo)","Común de Santos y Santas IV(un abad)","Común de Santos y Santas V(religiosos)","Común de Santos y Santas VI(santos consagrados a una actividad caritativa)","Común de Santos y Santas VII(educadores)","Común de Santos y Santas VIII(santas mujeres)");
												for($i=0;$i<count($comunes);$i++){
													echo "<option>".$comunes[$i]."</option>";}
											?>
										</optgroup>
									</select>

									<select class="ocultar" id="PPPCC" name="PPPCC">
										<option>Seleccione</option>
										<optgroup label="Primera Parte: Preces y Celebraciones de la Comunidad">
											<?php
												$primeraParte = array("Oraciones Comunes","Preces por la Familia Agustino Recoleta y por los Bienhechores","Bendición de la Misa","Celebraciones en Honor de la B. V. María","Capítulo General y Provincial","Capítulo de Renovación","Día de la Recolección Agustiniana","Visita de Renovación","Toma de Posesión del Prior Local","Liturgía de los Hermanos Difuntos");
												for($i=0;$i<count($primeraParte);$i++){
													echo "<option>".$primeraParte[$i]."</option>";}
											?>
										</optgroup>
									</select>

									<select class="ocultar" id="SPRPR" name="SPRPR">
										<option>Seleccione</option>
										<optgroup label="Segunda Parte: Ritual de la profesión religiosa">
											<?php
												$segundaParte = array("Introducción","Iniciación en la Vida de Agustino Recoleta","Rito de la Profesión Simple dentro de la Misa","Rito de la Profesión Simple en la Celabración del Oficio Divino","Rito en la Profesión Solemne dentro de la Misa","Renovación de votos dentro de la Misa","Renovación de votos en la Celabración del Oficio Divino","Celebración del 25º y 50º Aniversario de la Profesión Religiosa y Ordenación Sacerdotal","Textos para la Misa de la Profesión Religiosa y Renovación de votos","Leccionario para la Profesión Religiosa y Renovación de votos");
												for($i=0;$i<count($segundaParte);$i++){
													echo "<option>".$segundaParte[$i]."</option>";}
											?>
										</optgroup>
									</select>

									<select class="ocultar" id="TP" name="TP">
										<option>Seleccione</option>
										<optgroup label="Tercera Parte">
											<?php
												$terceraParte = array("Bendiciones de la Orden","Indulgencias Concedidas a la Orden");
												for($i=0;$i<count($terceraParte);$i++){
													echo "<option>".$terceraParte[$i]."</option>";}
											?>
										</optgroup>
									</select>

									<select class="ocultar" id="AM" name="AM">
										<option>Seleccione</option>
										<optgroup label="Apéndice Musical">
											<?php
												$terceraParte = array("Cantos del Ordinario de la Misa","Cantos Eucarísticos","Himnos y Cánticos","Antífonas y Cánticos en Honor a la B. V. María","Cantos Agustinianos","Cantos en Liturgía de Difuntos","Cantos Varios");
												for($i=0;$i<count($terceraParte);$i++){
													echo "<option>".$terceraParte[$i]."</option>";}
											?>
										</optgroup>
									</select>

									<select name="brevaryDB" id="type" onchange="viewSelect()">
										<option>Seleccione</option>
										<optgroup label="Breviario">
											<?php
												$type = "brevario";
												$brevario = array("Oficios de Lectura","Laudes","Hora Intermedia","Visperas","Completas");
												for($i=0;$i<count($brevario);$i++){
													echo "<option>".$brevario[$i]."</option>";}
											?>
										</optgroup>	
										<optgroup label="Misal">
											<?php	
												$type = "misal";
												$misal = array("Ordinario de la misa", "Oración y Lecturas del día","Prefacio","Plegaria Eucarística","Comunes");
												for($i=0;$i<count($misal);$i++){
													echo "<option>".$misal[$i]."</option>";}	
											?>
										</optgroup>

										<optgroup label="Rituales OAR">
											<?php
												$type = "rituales";	
												$rituales = array("Primera Parte: Preces y Celebraciones de la Comunidad", "Segunda Parte: Ritual de la profesión religiosa","Tercera Parte","Apéndice Musical");
												for($i=0;$i<count($rituales);$i++){
													echo "<option>".$rituales[$i]."</option>";}	
											?>
										</optgroup>	
											
										
										<optgroup label="Oraciones">
											<?php
												$type = "oraciones";	
												$oraciones = array("Ángelus", "Regina Coeli", "Santo Rosario", "Letanías", "Credo", "Te Deum", "Veni Creator", "Adoración eucarística");
												for($i=0;$i<count($oraciones);$i++){
													echo "<option>".$oraciones[$i]."</option>";}	
											?>
										</optgroup>

										<optgroup label="Ritual Sacramentos">
											<?php
												$type = "ritualS";	
												$ritualesS = array("Bautismo", "Reconciliación", "Unión de enfermos", "Comunión y viático a los enfermos", "Matrimonio");
												for($i=0;$i<count($ritualesS);$i++){
													echo "<option>".$ritualesS[$i]."</option>";}	
											?>
										</optgroup>
										
										
										</select>
									<!--input vacio para capturar el valor de los label del optgroup que envia el codigo jquery-->
									<input id="tipo" name="tipo" type="hidden" value=" ">
									<input id="tipoS" name="tipoS" type="hidden" value=" ">
									
								</form>
		
							</div>
							<div class="ocultar" id="notificacion">
								<header><h1><?php echo $tituloNotificacion; ?><i class="icon fa-comment"></i></h1></header>
								<form action="conexion/insertarNotificaciones.php" method="post" id="frmNotification" enctype="multipart/form-data">
									<textarea id="notificaciones" name="txtNotificaciones"></textarea><br>
		 							<input type="submit" id="btn-notificaciones" value="<?php echo $btEnviar; ?>">
		 								<select name="country" required>
		 									<option>Seleccione</option>
		 									<optgroup label="Pais">
											<?php 
												$country = array("España","Colombia","Portugal","Brasil","Italia");
												for ($i=0; $i < count($country) ; $i++) { 
													echo "<option value=".$country[$i].">".$country[$i]."</option>";}
											 ?>
											 </optgroup>
									</select>
									<input type="date" name="dateNotification" required>
								</form>
 							</div>
 							<div class="ocultar" id="upFiles">
								<header><h1><?php echo $tituloSA; ?> <i class="icon fa-file"></i></h1></header>
								<form action="controlPanel.php" method="post" enctype="multipart/form-data">
									<input type="file" name="archivo" value="archivo"><br>
									<input type="submit" value="<?php echo $btCargar; ?>" name="subir">
								</form>
								<header><h2><?php echo $tituloLA; ?></h2></header>
								<?php echo listarArchivos('docs/');?>
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
						<form method="post" action="#">
							<input type="text" name="query" id="query" placeholder="Search" />
						</form>
					</section>
					<!-- Menu -->
					<nav id="menu" ng-controller="mainCtrl">
						<header class="major">
							<h2><?php echo $menu; ?></h2>
						</header>
						<ul >
							<li onclick="viewEditLiturgias()"><a href=""><?php echo $btLitugias; ?></a></li>
							<li onclick="viewEditNotifications()"><a href=""><?php echo $btnotificaciones; ?></a></li>
							<li onclick="viewUpFiles()"><a href=""><?php echo $btSubirArchivos; ?></a></li>
							<li><a href="index.php"><?php echo $btSalir; ?></a></li>
						</ul>
					</nav>													

							<!-- Section -->
								<section>
									
									<ul class="contact">
										<li><img src="images/EscudoAR.png" width="80%" height="80%"></li>
										<li onclick="gps()" class="fa-map-marker" id="geolocation-test"><a href=""><?php echo $ubicacion; ?></a><img id="flag" src="images/Interrogacion.png" width="20" height="20"/></li>
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
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/lib/angular.min.js"></script>	
			<script type="text/javascript" src="scripts/viewAdmin.js"></script>
			<script type="text/javascript" src="scripts/notification.js"></script>
			<script type="text/javascript" src="scripts/gps.js"></script>
			
			<!--<script src="assets/js/modernizr-custom.js"></script>
			<script src="assets/js/geolocalizacion.js"></script>-->
			
			<script >
			(function(){

				var app = angular.module('App',[ ]);
				app.controller('mainCtrl', ['$scope', function($scope){}]);
			})();
			</script>


	</body>
</html>