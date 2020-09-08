<?php 
@session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/core/conf/config.sistema.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/core/src/model/Class_conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/core/src/model/Class_consultas_usuario.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/core/src/helpers/funciones.php';
$funciones = new Funciones();
$modelo = new Class_consultas_usuario();
$mysqli = new Conexion(db);
$db = db;
switch ($_REQUEST["accion"]) {
	case 'login':
		$usuario = $_REQUEST['email'];
		$clave = $funciones->encryption($_REQUEST['clave']);
		// DATOS DE USUARIO SACADOS DE tabla usuarios
	 	$modelo->email = $_REQUEST['email'];
	 	$modelo->user = $_REQUEST['email'];
	 	$modelo->pass = $clave;
		$consultUser = $modelo->consultUser($db);
		$verificarUsuario = $modelo->verificarUsuario($db);
		if($consultUser == 1){
			$retorna["estado"]="existe";
			if($verificarUsuario['id_estatu_usuario'] == 0){
				$retorna["estado"]="inactivo";
			}else{
				$_SESSION['ingreso'] = "YES";
				$_SESSION['email'] = $verificarUsuario['email'];
				$_SESSION['nombres'] = $verificarUsuario['nombres'];
				$_SESSION['apellidos'] = $verificarUsuario['apellidos'];
				$_SESSION['user'] = $verificarUsuario['user'];
				$_SESSION['id_estatu_usuario'] = $verificarUsuario['id_estatu_usuario'];
				$_SESSION['id_perfil'] = $verificarUsuario['id_perfil'];
				$_SESSION['imagen_perfil'] = $verificarUsuario['imagen_perfil'];
				$_SESSION['id_usuario'] = $verificarUsuario['id_usuario'];
				$retorna["estado"] = "autenticado";
			}
		}else{
			$retorna["estado"]=" no existe";
		}
		echo json_encode($retorna);
	break;

	case 'insertar':
		$clave = $funciones->encryption($_REQUEST['pass']);
		$modelo->email = $_REQUEST['email'];
		$modelo->pass = $clave;
		$modelo->id_perfil = "0";
		$modelo->user = $_REQUEST['user'];
		$modelo->nombres = $_REQUEST['nombre'];
		$modelo->apellidos = $_REQUEST['apellido'];

		$consultUser = $modelo->consultUser($db);
		if($consultUser == 1){
			$retorna["estado"]="existe";
		}else{
			$insert = $modelo->insertarUsuario($db);
			if($insert){
				$retorna["estado"]="completo";
			}else{
				$retorna["estado"]="error";
			}
		}
		echo json_encode($retorna);
	break;
}