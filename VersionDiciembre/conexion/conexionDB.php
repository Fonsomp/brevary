<?php
/*error_reporting(0);
header("Content-Type: text/html;charset=utf-8"); 
mysql_query("SET NAMES 'utf8'");*/

class ConexionDB extends mysqli{
	
	//private $con;
	private $host = "localhost";
	private $user = 'root';
	private $password = '9876';
	private $db = 'pruebabrevario';

	public function __construct(){
		parent:: __construct($this->host, $this->user, $this->password, $this->db);

		//Operador ternario para comprobar la conexion
		$this->connect_errno ? die('Error en la conexión'.mysqli_connect_errno()): $message = 'Conexión OK';

		echo $message;
	



		/*//$host = "45.55.245.201";
		$host = "localhost";
		//$user = "uniagusti";
		$user = "root";
		$password = "9876";
		//$db = "breviary";
		$db = "pruebabrevario";

		//$this->con = mysql_connect($host,$user,$password);
		$this->con = mysqli_connect($host,$user,$password) or die("sin conexion al servidor");
		if ($this->con) {
			//die('Could not connect: ' . mysql_error());
			echo $this->con;
		}	
		//mysql_select_db($db,$this->con) or die("Problemas con la conexion a la DB");
		mysqli_select_db($this->con,$db) or die("Problemas con la conexion a la DB");*/
	}

	public function execute($sql){
		//mysql_query($sql, $this->con);
		mysqli_query($this->con,$sql);
	}


	/*function cerrar() {
		mysql_close($this->con);
	}*/
}
?>