<?php 
@session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/core/conf/config.sistema.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/core/src/model/Class_conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/core/src/model/Class_consultas.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/core/src/helpers/funciones.php';
$funciones = new Funciones();
$modelo = new Class_consultas();
$mysqli = new Conexion(db);
$db = db;
switch ($_REQUEST["accion"]) {
	case 'actualizarMsn':
		$modelo->titulo_msj = $_REQUEST['boxtitulomsj'];
		$modelo->mensaje = $_REQUEST['boxmsj'];
		$modelo->face = $_REQUEST['face'];
		$modelo->twitter = $_REQUEST['twitter'];
		$modelo->mail = $_REQUEST['mail'];
		$modelo->instagram = $_REQUEST['instagram'];
		$actualizarMsj = $modelo->actualizarMsj($db);
		if($actualizarMsj){
			$retorna['estado'] = "actualizado";
		}else{
		$retorna['estado'] = "error";
		}
		echo json_encode($retorna);
	break;

	case 'actualizarAcerca':
		$modelo->box_acerca = $_REQUEST['box_acerca'];
		$modelo->titulo_acerca = $_REQUEST['titulo_acerca'];
		$actualizarAcerca = $modelo->actualizarAcerca($db);
		if($actualizarAcerca){
			$retorna['estado'] = "actualizado";
		}else{
			$retorna['estado'] = "error";
		}
		echo json_encode($retorna);
	break;

	case 'ciudad':
		$modelo->id_estado = $_REQUEST['id_estado'];
		$result = $modelo->ciudad($db);
		foreach($result as $index => $valor){
			$options[$index+1]["id_ciudad"]=$valor["id_ciudad"];
			$options[$index+1]["ciudad"] = $valor["ciudad"];
		}
		$retorna=$options;
		echo json_encode($retorna);
	break;
	case 'municipio':
		$modelo->id_ciudad = $_REQUEST['id_ciudad'];
		$result = $modelo->municipio($db);
		foreach($result as $index => $valor){
			$options[$index+1]["id_municipio"]=$valor["id_municipio"];
			$options[$index+1]["municipio"] = $valor["municipio"];
		}
		$retorna=$options;
		echo json_encode($retorna);
	break;

	case 'insertarPersona':
		$modelo->nombrePersonal = $_REQUEST['nombrePersonal'];
		$modelo->apellidoPersonal =  $_REQUEST['apellidoPersonal'];
		$modelo->direccionPersonal = $_REQUEST['direccionPersonal'];
		$modelo->generoPersonal = $_REQUEST['generoPersonal'];
		$modelo->puestoPersonal = $_REQUEST['puestoPersonal'];
		$modelo->cedulaPersonal = $_REQUEST['cedulaPersonal'];
		$modelo->edadPersonal = $_REQUEST['edadPersonal'];
		$modelo->correoPersonal = $_REQUEST['correoPersonal'];
		$modelo->tlfPersonal = $_REQUEST['tlfPersonal'];
		$modelo->id_estado =  $_REQUEST['id_estado'];
		$modelo->id_ciudad =  $_REQUEST['id_ciudad'];
		$modelo->id_municipio = $_REQUEST['id_municipio'];
		$modelo->representante1 =  $_REQUEST['representante1'];
		$modelo->tlfrep1 =  $_REQUEST['tlfrep1'];
		$modelo->correoRep1 =  $_REQUEST['correoRep1'];
		$modelo->cedulaRep1 =  $_REQUEST['cedulaRep1'];
		$modelo->representante2 =  $_REQUEST['representante2'];
		$modelo->tlfrep2 =  $_REQUEST['tlfrep2'];
		$modelo->correoRep2 =  $_REQUEST['correoRep2'];
		$modelo->cedulaRep2 =  $_REQUEST['cedulaRep2'];
		$insertPersona =  $modelo->insertPersona($db);
		$valor = $insertPersona;
		if ($valor > 1) {
			$retorna['valor'] = $valor;
			$retorna['estado'] = "insertado";
		} else {
			$retorna['estado'] = "error";
		}
		echo json_encode($retorna);
	break;

	case 'insertarPersonaAdm':
		$modelo->nombrePersonal = $_REQUEST['nombrePersonal'];
		$modelo->apellidoPersonal =  $_REQUEST['apellidoPersonal'];
		$modelo->direccionPersonal = $_REQUEST['direccionPersonal'];
		$modelo->generoPersonal = $_REQUEST['generoPersonal'];
		$modelo->puestoPersonal = $_REQUEST['puestoPersonal'];
		$modelo->cedulaPersonal = $_REQUEST['cedulaPersonal'];
		$modelo->edadPersonal = $_REQUEST['edadPersonal'];
		$modelo->correoPersonal = $_REQUEST['correoPersonal'];
		$modelo->tlfPersonal = $_REQUEST['tlfPersonal'];
		$modelo->id_estado =  $_REQUEST['id_estado'];
		$modelo->id_ciudad =  $_REQUEST['id_ciudad'];
		$modelo->id_municipio = $_REQUEST['id_municipio'];
		$insertPersonaAdm =  $modelo->insertPersonaAdm($db);
		$valor = $insertPersonaAdm;
		if ($valor > 1) {
			$retorna['valor'] = $valor;
			$retorna['estado'] = "insertado";
		} else {
			$retorna['estado'] = "error";
		}
		echo json_encode($retorna);
	break;
}