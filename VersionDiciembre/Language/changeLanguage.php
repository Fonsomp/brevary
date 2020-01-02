<?php
	session_start();
	if(isset($_GET["language"])){
		$_SESSION["language"] = $_GET["language"];
		//echo "entro al archivo";
		header('Location:'.$_SERVER['HTTP_REFERER']);
		die();
	}
	session_destroy();
?>