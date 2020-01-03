<?php
session_start();
require_once("conexionDB.php");

$dateLiturgia = $_POST['dateLiturgia'];
$txa = $_POST['txtLiturgias'];//Envia texto del textarea
$oracion = $_POST['tipo'];//Captura el valor de la oración
$type = $_POST['brevaryDB'];//Captura el valor del tipo de de acuerdo a la oración
$language = $_SESSION["language"];

if($_POST['tipoS'] == "Hora Intermedia"){
	$subtype = $_POST['HI'];}
if($_POST['tipoS'] == "Prefacio"){
	$subtype = $_POST['Pre'];}
if($_POST['tipoS'] == "Ordinario de la Misa"){
	$subtype = $_POST['ODM'];}
if($_POST['tipoS'] == "Plegaria Eucarística"){
	$subtype = $_POST['PE'];}
if($_POST['tipoS'] == "Comunes"){
	$subtype = $_POST['Co'];}
if($_POST['tipoS'] == "Primera Parte: Preces y Celebraciones de la Comunidad"){
	$subtype = $_POST['PPPCC'];}
if($_POST['tipoS'] == "Segunda Parte: Ritual de la profesión religiosa"){
	$subtype = $_POST['SPRPR'];}
if($_POST['tipoS'] == "Tercera Parte"){
	$subtype = $_POST['TP'];}
if($_POST['tipoS'] == "Apéndice Musical"){
	$subtype = $_POST['AM'];}

echo $type;
echo $oracion;
$objConexion = new ConexionDB();

	switch ($oracion) {
		case 'Breviario':
			//Selecciona la DB brevario para verificar si exite o no el registro
			$result = mysql_query("SELECT * FROM Breviario WHERE DateLiturgia='$dateLiturgia' AND Type = '$type' AND SubType = '$subtype' AND Language = '$language'") or die("Problemas al consultar la base de datos".mysql_error());
			$registros = mysql_num_rows($result);

			if($registros == 0){//Si no encuentra resultados, ingresa los datos
				$sql = "INSERT INTO Breviario(DateLiturgia,TextB,Type,SubType,Language) VALUES('$dateLiturgia','$txa','$type','$subtype','$language')";
				$objConexion->execute($sql);
				echo "<script>
				alert('Los datos fueron enviados correctamente a ".$type."');
				window.location='../controlPanel.php';
				</script>";
				$objConexion->cerrar();}
			else{
				echo "<script>
				alert('El registro ya existe en ".$type."');
				window.location='../controlPanel.php';
				</script>";
				$objConexion->cerrar();}	
		break;
		case 'Misal':
			$result = mysql_query("SELECT * FROM Misal WHERE DateLiturgia='$dateLiturgia' AND Type = '$type' AND SubType = '$subtype' AND Language = '$language'") or die("Problemas al consultar la base de datos".mysql_error());
			$registros = mysql_num_rows($result);

			if($registros == 0){//Si no encuentra resultados, ingresa los datos
				$sql = "INSERT INTO Misal(DateLiturgia,TextB,Type,SubType,Language) VALUES('$dateLiturgia','$txa','$type','$subtype','$language')";
				$objConexion->execute($sql);
				echo "<script>
				alert('Los datos fueron enviados correctamente a ".$type."');
				window.location='../controlPanel.php';
				</script>";
				$objConexion->cerrar();}
			else{
				echo "<script>
				alert('El registro ya existe en ".$type."');
				window.location='../controlPanel.php';
				</script>";
				$objConexion->cerrar();}
		break;
		case 'Rituales OAR':
			$result = mysql_query("SELECT * FROM Rituales WHERE Day='$calendarDay' AND Month='$calendarMonth' AND Type = '$type'") or die("Problemas al consultar la base de datos".mysql_error());
			$registros = mysql_num_rows($result);

			if($registros == 0){//Si no encuentra resultados, ingresa los datos
				$sql = "INSERT INTO Rituales(Day,Month,TextB,Type,SubType) VALUES('$calendarDay','$calendarMonth','$txa','$type','$subtype')";
				$objConexion->execute($sql);
				echo "<script>
				alert('Los datos fueron enviados correctamente a ".$type."');
				window.location='../controlPanel.php';
				</script>";
				$objConexion->cerrar();}
			else{
				echo "<script>
				alert('El registro ya existe en ".$type."');
				window.location='../controlPanel.php';
				</script>";
				$objConexion->cerrar();}
		break;
		case 'Oraciones':
			$result = mysql_query("SELECT * FROM Oraciones WHERE Day='$calendarDay' AND Month='$calendarMonth' AND Type = '$type'") or die("Problemas al consultar la base de datos".mysql_error());
			$registros = mysql_num_rows($result);

			if($registros == 0){//Si no encuentra resultados, ingresa los datos
				$sql = "INSERT INTO Oraciones(Day,Month,TextB,Type) VALUES('$calendarDay','$calendarMonth','$txa','$type')";
				$objConexion->execute($sql);
				echo "<script>
				alert('Los datos fueron enviados correctamente a ".$type."');
				window.location='../controlPanel.php';
				</script>";
				$objConexion->cerrar();}
			else{
				echo "<script>
				alert('El registro ya existe en ".$type."');
				window.location='../controlPanel.php';
				</script>";
				$objConexion->cerrar();}
		break;
		case 'Ritual Sacramentos':
			$result = mysql_query("SELECT * FROM Ritual_sacramento WHERE Day='$calendarDay' AND Month='$calendarMonth' AND Type = '$type'") or die("Problemas al consultar la base de datos".mysql_error());
			$registros = mysql_num_rows($result);

			if($registros == 0){//Si no encuentra resultados, ingresa los datos
				$sql = "INSERT INTO Ritual_sacramento(Day,Month,TextB,Type) VALUES('$calendarDay','$calendarMonth','$txa','$type')";
				$objConexion->execute($sql);
				echo "<script>
				alert('Los datos fueron enviados correctamente a ".$type."');
				window.location='../controlPanel.php';
				</script>";
				$objConexion->cerrar();}
			else{
				echo "<script>
				alert('El registro ya existe en ".$type."');
				window.location='../controlPanel.php';
				</script>";
				$objConexion->cerrar();}
		break;
		
		default:
			echo "<script>
			alert('La selección no tuvo exito');
			window.location='../controlPanel.php';
			</script>";
			$objConexion->cerrar();
			break;}
?>