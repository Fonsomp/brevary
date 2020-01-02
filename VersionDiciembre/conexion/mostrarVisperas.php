<?php
include("conexionDB.php");
 
$fechaDia = date("d");//Variable que captura el dia de la fecha del servidor
$fechaMes = date("m");//Variable que captura el mes en numero de la fecha del servidor

//Sentencia para conectar con el servidor
$con = mysql_connect($host,$user,$password)or die("Problemas de conexion");
//Sentencia para seleccionar la base de datos
mysql_select_db($db,$con) or die("Problemas con la conexion a la DB");
//Sentencia para realizar consulta
$registro = mysql_query("SELECT * FROM Breviario WHERE Day='$fechaDia' AND Month='$fechaMes' AND Type = 'Visperas'") or die("Problemas al consultar la base de datos".mysql_error());

while ($reg = mysql_fetch_array($registro)) {

	echo $reg['TextB']."<br>"; //muestra el texto de la liturgia de acuerdo al dia que esta en la variable $fechaDia
	
}
	
?>