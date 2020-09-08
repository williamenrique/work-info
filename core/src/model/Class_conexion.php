<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/core/conf/config.sistema.php';
class Conexion{
	private $DB_host;
	private $DB_user;
	private $DB_pass;
	private $DB_name;

	function __construct($DB_name){
		$this->DB_host = host;
		$this->DB_user = user;
		$this->DB_pass = pass;
		$this->DB_name = $DB_name;
		
	}

	function conectarse(){
    	$this->conexion = new mysqli($this->DB_host, $this->DB_user, $this->DB_pass, $this->DB_name);
		$this->conexion->set_charset("utf8");
		if ($this->conexion->connect_errno) {
			die("fallo la conexion con MySqli : {".$this->conexion->connect_errno."}");
		}
		return ($this->conexion);
	}
	function query($consulta){
		$aux = $this->conectarse();
		if($aux){
			$respuesta = $this->conexion->query($consulta);
			$id = $this->conexion->insert_id;
		}
		return $id;
	}
	function consultSimple($sql){
		$aux = $this->conectarse();
		if($aux){
			$consulta= $this->conexion->query($sql);
			$this->cerrar();
		}
		return $consulta;
	}
	function numRegistros($consulta){
		$aux = $this->conectarse();
		if($aux){
			$respuesta = mysqli_num_rows($this->conexion->query($consulta));
			$this->cerrar();
		}
		return $respuesta;
	}
	function consultaArreglo($consulta){
		$aux = $this->conectarse();
		if($aux){
			$respuesta = mysqli_fetch_array($this->conexion->query($consulta));
			$this->cerrar();
		}
		return $respuesta;
	}
	function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
	}
	function cerrar(){
		$this->conexion->close();
	}
}