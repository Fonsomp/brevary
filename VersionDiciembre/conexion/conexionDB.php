<?php
error_reporting(0);
//eader("Content-Type: text/html;charset=utf-8"); 
mysql_query("SET NAMES 'utf8'");

class ConexionDB extends mysqli{
//class ConexionDB{
	
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

	public function consulta($sql){
		$result = $this->con->query($sql) or die($this->con->error);
		//Si la consulta es exitosa regresa un array asociativo
		if($result)
			return $result->fetch_array(MYSQLI_BOTH);	
        return false;
	}

	public function contar_filas($sql){
		$result = $this->con->query($sql) or die($this->con->error);
		if($result){
			$row_cnt = $result->num_rows;
			if($row_cnt == 1){
				//return printf("Resultado set has %d rows.\n", $row_cnt);
				return print("<script>alert('Registro Encontrado');</script>");}
			return print("<script>
			alert('Registro Vacio!');
			window.location='controlPanel.php';
			</script>");
		}
	}

	public function modificar($sql){}


	function cerrar() {
		$this->con->close();
	}
}
?>