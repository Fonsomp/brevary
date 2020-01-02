<script type="text/javascript" src="../scripts/notification.js"></script>
<!--<script type="text/javascript" src="/Brevary/VersionAgosto/scripts/notification.js"></script>-->
<?php
require_once("conexionDB.php");

$country = $_POST['country'];
$dateNotification = $_POST['dateNotification'];
$txtNotificaciones = $_POST['txtNotificaciones'];//Envia texto del textarea

$hora = date("G:ia");
print_r($hora);

$objConexion = new conexionDB();

if($country != "Seleccione" && $dateNotification != "0000-00-00"){
	$sql = "INSERT INTO notificaciones(DateN,Notification,Country) VALUES('$dateNotification','$txtNotificaciones','$country')";
	$objConexion->execute($sql);
	echo "<script>AskForWebNotificationPermissions();</script>";
	echo "<script>
		alert('Las notificaciones fueron enviadas a la DB');
		window.location='../controlPanel.php';
		</script>";
 }
 else{
 	echo "<script>
	alert('No ha seleccionado un Pais o Fecha Correcta');
	window.location='../controlPanel.php';
	</script>";
 }
	
?>