<?php
/*error_reporting(0);
header("Content-Type: text/html;charset=utf-8"); 
mysql_query("SET NAMES 'utf8'");*/

//class ConexionDB extends mysqli{
class ConexionDB{
	
	private $con;
	private $host = "localhost";
	private $user = 'root';
	private $password = '9876';
	private $db = 'pruebabrevario';

	public function __construct(){
		/*parent:: __construct($this->host, $this->user, $this->password, $this->db);

		//Operador ternario para comprobar la conexion
		$this->connect_errno ? die('Error en la conexión'.mysqli_connect_errno()): $message = 'Conexión OK';

		echo $message;*/

		$this->con = new mysqli($this->host, $this->user, $this->password, $this->db);
		//$this->con->set_charset("utf8");
		if (mysqli_connect_errno()) {
            printf("Falló la conexión failed: %s\n", $this->con->connect_error);
    		exit();}
	}

	public function execute($sql){
		//mysql_query($sql, $this->con);
		//mysqli_query($this->con,$sql);
		$this->con->query($sql) or die($this->con->error);
		/*if($resultado)
            return $resultado->fetch_all(MYSQLI_ASSOC);
        return print 'false';*/
	}


	function cerrar() {
		//mysql_close($this->con);
		$this->con->close();
	}
}
?>