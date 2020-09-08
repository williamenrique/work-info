<?php 
require_once 'file_manager_class.php';

if (isset($_FILES)) {
	$archivo = $_FILES;
} else {
	$archivo = '';
}

if ($_REQUEST['accion'] == 'dd') {
$obj = new function_usuario($archivo);
	$res = $obj->subir_nota();
	echo $res;
}
if ($_REQUEST['accion'] == 'descargar') {
	$obj = new function_usuario($_REQUEST['id'],$_REQUEST['cod_cliente'], $_REQUEST['tipo'], $_REQUEST['id_elemento'],"","");
	$id = $_REQUEST['id'];
	$id_elemento = $_REQUEST['id_elemento'];
	$cod_cliente = $_REQUEST['cod_cliente'];
	$tipo = $_REQUEST['tipo'];
	$obj->descargarArchivo($id, $id_elemento,$tipo,$cod_cliente);
}
if($_REQUEST['accion'] == 'subirr'){
	$obj = new function_usuario("");
	$res = $obj->imagen_banner();
	echo $res;
}


if($_REQUEST['accion'] == 'subir'){
	$tipo = $_REQUEST['tipo'];
	$obj = new function_usuario("",$tipo);
	$res = $obj->imagen();
	echo $res;
}
if($_REQUEST['accion'] == 'subir_imagen'){
	$tipo = $_REQUEST['tipo'];
	$obj = new function_usuario("",$tipo);
	$res = $obj->imagen();
	echo $res;
}
if($_REQUEST['accion'] == 'subir_imagenPersona'){
	$tipo = $_REQUEST['tipo'];
	$id = $_REQUEST['id'];
	$obj = new function_usuario("",$tipo);
	$res = $obj->imagenPersona($id);
	echo $res;
}
if($_REQUEST['accion'] == 'subir_imagenPersonaAdm'){
	$tipo = $_REQUEST['tipo'];
	$id = $_REQUEST['id'];
	$obj = new function_usuario("",$tipo);
	$res = $obj->imagenPersona($id);
	echo $res;
}