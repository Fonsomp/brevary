<?php
//session_start();
require_once("conexionDB.php");

$fechaLocal = date('Y-m-d');
echo $fechaLocal;
//echo $_SESSION['session_name'] = $_GET['session_name'];

$objConexion = new conexionDB();

//Sentencia para realizar consulta
$registro = mysqli_query("SELECT * FROM notificaciones WHERE DateN='$fechaLocal'") or die("Problemas al consultar la base de datos".mysql_error());
//if (isset($_GET['session_name'])) {

	//$_SESSION['session_name'] = $_GET['session_name'];
	while ($reg = mysqli_fetch_array($registro)) {
		echo $reg['Notification']."<br>"; //muestra la notificación de acuerdo al dia que esta en la variable $fechaDia
	}

//}

?>