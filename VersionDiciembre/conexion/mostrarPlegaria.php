<?php
//session_start();
require_once("conexionDB.php"); 
$language = $_SESSION["language"];
$subType = $_SESSION["PE"]; 

$objConexion = new conexionDB();

//Sentencia para realizar consulta
$registro = mysql_query("SELECT * FROM Misal WHERE Type = 'Plegaria Eucarística' AND SubType = '$subType' AND Language = '$language'") or die("Problemas al consultar la base de datos".mysql_error());

while ($reg = mysql_fetch_array($registro)) {

	echo $reg['TextB']."<br>"; //muestra el texto de la liturgia de acuerdo al dia que esta en la variable $fechaDia
}	
?>