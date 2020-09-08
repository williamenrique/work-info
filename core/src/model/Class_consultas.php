<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/core/src/model/Class_conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/core/conf/config.sistema.php';
class Class_consultas{
	var $titulo_msj = "";
	var $mensaje = "";
	var $imagen = "";
	var $face = "";
	var $twitter = "";
	var $instagram = "";
	var $mail = "";
	var $titulo_acerca = "";
	var $box_acerca = "";
	var $id_estado;
	var $id_ciudad;
	var $id_municipio;

// personal
	var $id_persona;
	var $nombrePersonal;
	var $apellidoPersonal;
	var $edadPersonal;
	var $cedulaPersonal;
	var $direccionPersonal;
	var $generoPersonal;
	var $tlfPersonal;
	var $puestoPersonal;
	var $imagenPersonal;
	var $correoPersonal;
	var $representante1;
	var $tlfrep1;
	var $cedulaRep1;
	var $correoRep1;
	var $representante2;
	var $tlfrep2;
	var $cedulaRep2;
	var $correoRep2;
// personal
	function insertPersona($db){
		$conn = new Conexion($db);
		$insert = "INSERT INTO tbl_personal(nombre,apellido,direccion,genero,puesto,cedula,edad,correo,tlf,id_estado,id_ciudad,id_municipio,representante1,tlf1,correo1,cedula1,representante2,tlf2,correo2,cedula2)VALUES('$this->nombrePersonal' ,'$this->apellidoPersonal' ,'$this->direccionPersonal' ,'$this->generoPersonal' ,'$this->puestoPersonal' ,'$this->cedulaPersonal' ,'$this->edadPersonal' ,'$this->correoPersonal' ,'$this->tlfPersonal' ,$this->id_estado ,$this->id_ciudad ,$this->id_municipio ,'$this->representante1' ,'$this->tlfrep1' ,'$this->correoRep1' ,'$this->cedulaRep1' ,'$this->representante2' ,'$this->tlfrep2' ,'$this->correoRep2' ,'$this->cedulaRep2')";
		$result = $conn->query($insert);
		return $result;
	}
	function imagenPersona($db){
		$conn = new Conexion($db);
		$update = "UPDATE $db.tbl_personal SET imagen = '$this->imagenPersonal' WHERE id_persona = $this->id_persona";
		$result = $conn->consultSimple($update);
		if($result){
			$estado = true;
		}else{
			$estado = false;
		}
	}
// personal administrativo
		function insertPersonaAdm($db){
		$conn = new Conexion($db);
		$insert = "INSERT INTO tbl_personal_administrativo(nombre,apellido,direccion,genero,id_puesto,cedula,edad,correo,tlf,id_estado,id_ciudad,id_municipio)VALUES('$this->nombrePersonal' ,'$this->apellidoPersonal' ,'$this->direccionPersonal' ,'$this->generoPersonal' ,$this->puestoPersonal ,'$this->cedulaPersonal' ,'$this->edadPersonal' ,'$this->correoPersonal' ,'$this->tlfPersonal' ,$this->id_estado ,$this->id_ciudad ,$this->id_municipio)";
		$result = $conn->query($insert);
		return $result;
	}
	function imagenPersonaAdm($db){
		$conn = new Conexion($db);
		$update = "UPDATE $db.tbl_personal_administrativo SET imagen = '$this->imagenPersonal' WHERE id_personal_administrativo = $this->id_persona";
		$result = $conn->consultSimple($update);
		if($result){
			$estado = true;
		}else{
			$estado = false;
		}
	}
/*banner*/
	function consultBanner($db){
		$conn = new Conexion($db);
		$select = "SELECT * FROM $db.tbl_banner";
		$result = $conn->consultaArreglo($select);
		return $result;
	}
	function consultImgBanner($db){
		$conn = new Conexion($db);
		$select = "SELECT * FROM $db.tbl_imagen_banner";
		$result = $conn->consultaArreglo($select);
		return $result;
	}
	
	function actualizarMsj($db){
		$conn = new Conexion($db);
		$update = "UPDATE $db.tbl_banner SET mensaje = '$this->mensaje', titulo_msj = '$this->titulo_msj', face = '$this->face', twitter = '$this->twitter', correo = '$this->mail', instagram = '$this->instagram' WHERE id_banner = 1";
		$result = $conn->consultSimple($update);
		if($result){
			$estado = true;
		}else{
			$estado = false;
		}
		return $result;
	}
/*acerca*/
	function consultAcerca($db){
		$conn = new Conexion($db);
		$select = "SELECT * FROM $db.tbl_acerca";
		$result = $conn->consultaArreglo($select);
		return $result;
	}

	function actualizarAcerca($db){
		$conn = new Conexion($db);
		$update = "UPDATE $db.tbl_acerca SET acerca = '$this->box_acerca',  titulo_acerca = '$this->titulo_acerca' WHERE id_acerca = 1";
		$result = $conn->consultSimple($update);
		if($result){
			$estado = true;
		}else{
			$estado = false;
		}
		return $result;
	}
/*estados, ciudad, municipio*/
	function estado($db){
		$conn = new Conexion($db);
		$select = "SELECT * FROM $db.tbl_estado";
		$result = $conn->consultSimple($select);
		return $result;
	}
	function ciudad($db){
		$conn = new Conexion($db);
		$select = "SELECT * FROM $db.tbl_ciudad WHERE id_estado = $this->id_estado";
		$result = $conn->consultSimple($select);
		return $result;
	}
	function municipio($db){
		$conn = new Conexion($db);
		$select = "SELECT * FROM $db.tbl_municipio WHERE id_ciudad = $this->id_ciudad";
		$result = $conn->consultSimple($select);
		return $result;
	}
	function todoestado($db){
		$conn = new Conexion($db);
		$select = "SELECT * FROM $db.tbl_estado JOIN tbl_ciudad USING(id_estado) JOIN tbl_municipio USING(id_ciudad) where id_estado = $this->id_estado AND id_ciudad = $this->id_ciudad";
		$result = $conn->consultSimple($select);
		return $result;
	}

// puestos
	function puesto($db){
		$conn = new Conexion($db);
		$select = "SELECT * FROM $db.tbl_puesto";
		$result = $conn->consultSimple($select);
		return $result;
	}
// personas
	function consultPersonal($db){
		$conn = new Conexion($db);
		$select = "SELECT * FROM $db.tbl_personal INNER JOIN tbl_puesto ON tbl_puesto.id_puesto = 1 AND tbl_puesto.id_puesto = 2";
		$result = $conn->consultSimple($select);
		return $result;
	}

}