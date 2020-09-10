<?php
@session_start();
header('Content-type: text/html; charset=utf-8');
//$Recycle.Bin$servidor = "http://workinfo.com/";
$servidor = "https://workinfo.ibx.lat/";
$sistema = "core/src/";	
$nombresistema = "Sistema en prueba";	// nombre del sistema

//constates del sistema
define('css',$servidor.'src/assets/css/');
define('js',$servidor.'src/assets/js/');
define('img',$servidor.'src/assets/img/');

define('components',$servidor.'src/components/');

define('RAIZ',$_SERVER["DOCUMENT_ROOT"].'/');
define('modules',$_SERVER["DOCUMENT_ROOT"].'/modules/');
define('MODELS',$_SERVER["DOCUMENT_ROOT"].'/'.$sistema.'models/');
define('CONTROLLERS',$_SERVER["DOCUMENT_ROOT"].'/'.$sistema.'controllers/');
date_default_timezone_set('America/Caracas');

define('host' ,'');
define('user' ,  '');
define('pass' , '');
define('db' , '');

define('METHOD','AES-256-CBC');
define('SECRET_KEY','$51st3m@');
define('SECRET_IV','101712');