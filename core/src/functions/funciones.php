<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/core/conf/config.sistema.php';
class Funciones1 {
	function encryption($string){
		$output=FALSE;
		$key=hash('sha256', SECRET_KEY);
		$iv=substr(hash('sha256', SECRET_IV), 0, 16);
		$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
		$output=base64_encode($output);
		return $output;
	}
	function decryption($string){
		$key=hash('sha256', SECRET_KEY);
		$iv=substr(hash('sha256', SECRET_IV), 0, 16);
		$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
		return $output;
	}
	function encriptar($cadena){
		$key='16437037';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
		$encrypted = utf8_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $cadena, MCRYPT_MODE_CBC, md5(md5($key))));
	return $encrypted; //Devuelve el string encriptado

	}

	function desencriptar($cadena){
		$key='16437037';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
		$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), utf8_decode($cadena), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
	return $decrypted;  //Devuelve el string desencriptado
	}

	function formatear_timestamp($fecha){
	    $dia = date('w', $fecha);
	    $dias = ["Lun", "Mar", "Mie", "Jue", "Vie", "Sab", "Dom"];
	    $mes = date("m", strtotime($fecha));
	    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	    $salida = $dias[$dia-1].', '.date("d", strtotime($fecha)).' de '.$meses[$mes-1].' a las '.date("G:i a", strtotime($fecha));
	    return $salida;
	  }

	  function formatear_fecha($fecha){
	    $dia = date('w', strtotime($fecha));
	    $dias = ["Lun", "Mar", "Mie", "Jue", "Vie", "Sab", "Dom"];
	    $mes = date("m", strtotime($fecha));
	    $ano = date("Y", strtotime($fecha));
	    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	    $salida = $dias[$dia-1].', '.date("d", strtotime($fecha)).' de '.$meses[$mes-1].' · '.$ano;
	    return $salida;
	  }
	function formatear_fecha_corta($fecha){
		$dia = date('w', strtotime($fecha));
		$mes = date("m", strtotime($fecha));
		$ano = date("Y", strtotime($fecha));
		$meses = ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
		$salida = date("d", strtotime($fecha)).' de '.$meses[$mes-1].' · '.$ano;
		return $salida;
	}

	function parteHora( $hora ){
	    $horaSplit = explode(":", $hora);
	        if( count($horaSplit) < 3 ){
	            $horaSplit[2] = 0;
	        }
	    return $horaSplit;
	}
	 
	 
	function SumaHoras( $time1, $time2 ){
	    list($hour1, $min1, $sec1) = parteHora($time1);
	    list($hour2, $min2, $sec2) = parteHora($time2);
	    return date('H:i:s', mktime( $hour1 + $hour2, $min1 + $min2, $sec1 + $sec2));
	}

	function validar_campos($dato){
		$dato = stripcslashes($dato);
		$dato = htmlspecialchars($dato);
		return $dato;
	}
}