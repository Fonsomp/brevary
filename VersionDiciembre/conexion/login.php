<?php 
session_start();
require_once("conexionDB.php");


$userlg = $_POST['userlg'];
$passwordlg = $_POST['passwordlg'];

$objConexion = new ConexionDB();

echo $userlg;
echo $passwordlg;

$sql = "SELECT * FROM users WHERE user='$userlg'";
$result = $objConexion->execute($sql);

/*foreach ($result as $value)
      echo $value['id']."-".$value['user']."<br>";*/

	if($row = mysqli_fetch_array($sql)){
	

	}

		/*switch ($userlg) {
			case 'admin':
				if($row['password'] == $passwordlg){
					session_start();
					echo "<script>
						alert('Ha iniciado sesión como Administrador, Bienvenido!');
						window.location='../controlPanel.php?language=es';
						</script>";}
			break;

			case 'adminEN':
				if($row['password'] == $passwordlg){
					session_start();
					echo "<script>
						alert('You have logged in as Administrator, Welcome!');
						window.location='../controlPanel.php?language=en';
						</script>";}
			break;
			case 'adminPT':
				if($row['password'] == $passwordlg){
					session_start();
					echo "<script>
						alert('Você fez o login como Administrador, Bem-vindo!');
						window.location='../controlPanel.php?language=pt';
						</script>";}
			break;
			case 'adminIT':
				if($row['password'] == $passwordlg){
					session_start();
					echo "<script>
						alert('Hai effettuato laccesso come amministratore, benvenuto!');
						window.location='../controlPanel.php?language=it';
						</script>";}
			break;
			case 'adminLT':
				if($row['password'] == $passwordlg){
					session_start();
					echo "<script>
						alert('Has iniciado sesión como Administrador, Bienvenido!');
						window.location='../controlPanel.php?language=es';
						</script>";}
			break;
			default:
				echo "<script>
				alert('Datos erroneos, intente de nuevo');
				window.location='../index.php';
				</script>";
			break;*/
		//}
		
	/*}
	else {
		echo "<script>
				alert('Datos erroneos, intente de nuevo');
				window.location='../index.php';
				</script>";}*/





 ?>