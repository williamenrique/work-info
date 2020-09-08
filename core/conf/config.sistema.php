<?php
@session_start();
header('Content-type: text/html; charset=utf-8');
//$servidor = "http://localhost/work-info/";
$servidor = "https://workinfo.ibx.lat/";
$sistema = "core/src/";	
$nombresistema = "Sistema en prueba";	// nombre del sistema

//constates del sistema
define('css',$servidor.'/src/css/');
define('js',$servidor.'/src/js/');
define('img',$servidor.'/src/img/');

define('RAIZ',$_SERVER["DOCUMENT_ROOT"].'/');
define('modules',$_SERVER["DOCUMENT_ROOT"].'/modules/');
define('MODELS',$_SERVER["DOCUMENT_ROOT"].'/'.$sistema.'models/');
define('CONTROLLERS',$_SERVER["DOCUMENT_ROOT"].'/'.$sistema.'controllers/');
date_default_timezone_set('America/Caracas');

define('host' ,'localhost');
define('user' ,  'root');
define('pass' , 'root');
define('db' , '');

define('METHOD','AES-256-CBC');
define('SECRET_KEY','$51st3m@');
define('SECRET_IV','101712');