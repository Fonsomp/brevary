<?php

#Si no existe sesion llamada language la variable $lang
if (empty($_SESSION["language"])) {

	#la variable toma del servidor los dos primeros caracteres que indican el lenguaje en el navegador
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);
	#La sesion va a ser el idioma del navegador si  la sesion no existe
	$_SESSION["language"] = $lang; }

	if (isset($_SESSION["language"])) {
		$lang = $_SESSION["language"]; }

	switch ($lang) {
		case "es":
			//echo "Español";
			require("Language/es.php");
			break;
		case "en":
			//echo "Ingles";
			require("Language/en.php");
			break;
		case "pt":
			//echo "Portugues";
			require("Language/po.php");
			break;
		case "it":
			//echo "Italiano";
			require("Language/it.php");
			break;	
		default:
			require("Language/es.php");
			break;
	}
	
?>