<?php 
@session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/core/conf/config.sistema.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/core/src/model/Class_conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/core/src/model/Class_consultas_usuario.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/core/src/helpers/funciones.php';
$funciones = new Funciones();
$mysqli = new Conexion(db);
$modeloUsuario = new Class_consultas_usuario();
$db = db;
switch ($_REQUEST["accion"]) {
	case 'salir':
		unset($_SESSION["ingreso"]);
		session_destroy();
		$retorna["estado"]="hecho";
		echo json_encode($retorna);
	break;

	case 'datos':
		//$clave = $funciones->decryption($_REQUEST['pass']);
		$clave = $funciones->decryption($_REQUEST['pass']);
		$modelo->id_usuario = $_REQUEST['id_usuario'];
		
		$consultUser = $modelo->consultUser($db);
	break;
	case 'actualizarUser':
		$enciptPass = $funciones->encryption($_REQUEST['claveUp']);
		$modeloUsuario->direccion = $_REQUEST['direccion'];
		$modeloUsuario->id_estado = $_REQUEST['id_estado'];
		$modeloUsuario->id_municipio = $_REQUEST['id_municipio'];
		$modeloUsuario->id_usuario = $_REQUEST['id_usuario'];
		$modeloUsuario->pass = $enciptPass;
		$updateUser = $modeloUsuario->updateuser($db);
		if($updateUser){
			$retorna['estado'] = "actualizado";
		}else{
			$retorna['estado'] = "error";
		}
		echo json_encode($retorna);
	break;
}