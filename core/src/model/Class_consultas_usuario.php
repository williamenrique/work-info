<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/core/src/model/Class_conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/core/conf/config.sistema.php';
class Class_consultas_usuario{
	var $nombres = "";
	var $apellidos = "";
	var $clave_correo = "";
	var $user = "";
	var $pass = "";
	var $smtp_host = "";
	var $smtp_secure = "";
	var $smtp_port = "";
	var $id_admin = "";
	var $email = "";
	var $id_estatu_usuario = "";
	var $id_perfil = "";
	var $imagen_perfil = "assets/images/avatar.png";
	var $id_grupo = "";
	var $buscarUser = "";
	var $id_usuario = "";
	var $id_estado = "";
	var $id_ciudad = "";
	var $id_municipio = "";

	function consultUser($db){
		$conn = new Conexion($db);
		$select = "SELECT * FROM $db.tbl_usuarios WHERE email ='$this->email' OR user = '$this->user'";
		$result = $conn->numRegistros($select);
		return $result;
	}
	function verificarUsuario($db){
		$conn = new Conexion($db);
		$select = "SELECT * FROM $db.tbl_usuarios WHERE email ='$this->email' OR user = '$this->user' AND pass = '$this->pass'";
		$result = $conn->consultaArreglo($select);
		return $result;
	}

	function insertarUsuario($db){
		$conn = new Conexion($db);
		$insert = "INSERT INTO $db.tbl_usuarios(email,user, nombres, apellidos, id_perfil, imagen_perfil,pass)VALUES('$this->email','$this->user','$this->nombres','$this->apellidos',$this->id_perfil,'$this->imagen_perfil','$this->pass')";
		$result = $conn->consultSimple($insert);
		if($result){
			$estado = true;
		}else{
			$estado = false;
		}
		return $result;
	}
	function updateuser($db){
		$conn = new Conexion($db);
		$update = "UPDATE  $db.tbl_usuarios SET direccion = '$this->direccion' ,id_estado =$this->id_estado, id_municipio = $this->id_municipio, pass = '$this->pass' WHERE id_usuario = $this->id_usuario";
		$result = $conn->consultSimple($update);
		if($result){
			$estado = true;
		}else{
			$estado = false;
		}
		return $result;
	}
	function consultDatos($db){
		$conn = new Conexion($db);
		$select = "SELECT * FROM $db.tbl_usuarios WHERE id_usuario ='$this->id_usuario'";
		$result = $conn->consultaArreglo($select);
		return $result;
	}

}