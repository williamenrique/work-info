<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/core/src/model/Class_conexion.php';
Class function_usuario{
	private $ruta;
	private $archivo;
	private $tipo;
	private $id_persona;
	public function __construct($archivo, $tipo){
		$this->archivo = $archivo;
		$this->tipo = $tipo;
		//$this->ruta = "../assets/img";
	}
	public function imagen(){
		$db = "db_danza";
		$conn = new Conexion($db);
		//$ruta = '../../../assets/images/';
		$ruta = '../../../../assets/img/';
		$tipo = $this->tipo;
		// extensiones permitidas
		$archivos_permitidos = array('jpg', 'png','svg');
		// capturo las partes del nombre del archivo
		$fileData = pathinfo($_FILES["uploadedfile1"]['name']);
		// valido la extension
		$fileExtension = strtolower($fileData['extension']);
		if (!in_array($fileExtension, $archivos_permitidos)) {
			$retorna['estado'] = "ERROR\n\nEl archivo no es permitido... Las extensiones de archivo permitidas son: \jpg, png, svg";
		}else{
			// validacion de tamano maximo
			clearstatcache();
			$max_size = 16000000;
			if (filesize($_FILES["uploadedfile1"]['tmp_name']) > $max_size) {
				$retorna['estado'] =  'ERROR\n\nEl Archivo tiene un tama&ntilde;o MAYOR de ' . round($max_size / 1000) . ' MB.';
			}else{
				// ruta y nombre archivo destino
				//$fileBase = $this->ruta . "/" . $this->tipo . "/" . $this->cod_cliente . "/".$this->id_cliente."/";
				$fileBase = $ruta . "/" . $tipo . "/";
				$fileHash = substr(md5($fileBase . uniqid(microtime() . mt_rand())), 0, 8);
				// creo carpeta en servidor si no existe
				if (!file_exists($fileBase))
					mkdir($fileBase, 0777, true);
				// construyo ruta destino usando el Hash
				$filePath = $fileBase . "~" . $fileHash . "." . $fileExtension;
				// muevo el archivo temporal a su ruta definitiva
				if (move_uploaded_file($_FILES["uploadedfile1"]['tmp_name'], $filePath)) {
				// texto descriptivo del archivos con validado
					$fileDescripcion = $this->validarCaracteres($fileData['filename']);
					// tamano del archivo en MB
					$fileSize = round(filesize($filePath) / (1024 * 1024), 3);
					// eliminar la imagen anterior del servidor
					$select = "SELECT * FROM tbl_$tipo WHERE id_$tipo = 1";
					$select = $conn->consultaArreglo($select);
					if($select['imagen'] != ""){
						$file = $ruta."/".$tipo."/".$select['imagen'];
						unlink($file);
					}
					// guardo en la base de datos
					$sql = "INSERT INTO $db.tbl_imagenes(imagen,file_hash,extension,tipo) VALUES ('$fileDescripcion', '$fileHash','$fileExtension','$tipo')";

					//preguntar que va actualizar
					$update = "UPDATE $db.tbl_$tipo SET imagen = '~$fileHash.$fileExtension' where id_$tipo = 1";
					$results = $conn->consultSimple($sql);
					if($results){
						$updat = $conn->consultSimple($update);
						$retorna['estado'] = "ok";
						$sql = "SELECT * FROM $db.tbl_imagenes WHERE tipo = '$tipo'";
						$result = $conn->consultaArreglo($sql);
						$retorna['ruta']=	$url_archive = "../../../assets/images/".$tipo."/~". $result['file_hash'] . "." . $result['extension'];
						$retorna['imagen']="$url_archive";
					}else{
						//$res = send_sql($sql);
						$retorna['estado'] = "ERROR\n\nEl archivo NO pudo ser subido al servidor. Estamos presentado fallas disculpe las molestias.";
					}
				} else {
					$retorna['estado'] = "ERROR\n\nEl archivo NO pudo ser subido al servidor. Por favor intente de nuevo, si el problema persiste consulte al proveedor.";
				}
			}
		}
		echo json_encode($retorna);
	}

	public function imagenPersona($id){
		$db = "db_danza";
		$conn = new Conexion($db);
		//$ruta = '../../../assets/images/';
		$ruta = '../../../../assets/img/';
		$tipo = $this->tipo;
		// extensiones permitidas
		$archivos_permitidos = array('jpg', 'png','svg');
		// capturo las partes del nombre del archivo
		$fileData = pathinfo($_FILES["uploadedfile1"]['name']);
		// valido la extension
		$fileExtension = strtolower($fileData['extension']);
		if (!in_array($fileExtension, $archivos_permitidos)) {
			$retorna['estado'] = "ERROR\n\nEl archivo no es permitido... Las extensiones de archivo permitidas son: \jpg, png, svg";
		}else{
			// validacion de tamano maximo
			clearstatcache();
			$max_size = 16000000;
			if (filesize($_FILES["uploadedfile1"]['tmp_name']) > $max_size) {
				$retorna['estado'] =  'ERROR\n\nEl Archivo tiene un tama&ntilde;o MAYOR de ' . round($max_size / 1000) . ' MB.';
			}else{
				$fileBase = $ruta . "/" . $tipo . "/";
				$fileHash = substr(md5($fileBase . uniqid(microtime() . mt_rand())), 0, 8);
				// creo carpeta en servidor si no existe
				if (!file_exists($fileBase))
					mkdir($fileBase, 0777, true);
				// construyo ruta destino usando el Hash
				$filePath = $fileBase . "~" . $fileHash . "." . $fileExtension;
				// muevo el archivo temporal a su ruta definitiva
				if (move_uploaded_file($_FILES["uploadedfile1"]['tmp_name'], $filePath)) {
				// texto descriptivo del archivos con validado
					$fileDescripcion = $this->validarCaracteres($fileData['filename']);
					// tamano del archivo en MB
					$fileSize = round(filesize($filePath) / (1024 * 1024), 3);
					// eliminar la imagen anterior del servidor
					$select = "SELECT * FROM tbl_$tipo WHERE id_$tipo = $id";
					$select = $conn->consultaArreglo($select);
					if($select['imagen'] != ""){
						$file = $ruta."/".$tipo."/".$select['imagen'];
						unlink($file);
					}
					// guardo en la base de datos
					
					//preguntar que va actualizar
					$update = "UPDATE $db.tbl_$tipo SET imagen = '~$fileHash.$fileExtension' where id_$tipo = $id";
					$results = $conn->consultSimple($update);
					if($results){
						$retorna['estado'] = "ok";
					}else{
						//$res = send_sql($sql);
						$retorna['estado'] = "ERROR\n\nEl archivo NO pudo ser subido al servidor. Estamos presentado fallas disculpe las molestias.";
					}
				} else {
					$retorna['estado'] = "ERROR\n\nEl archivo NO pudo ser subido al servidor. Por favor intente de nuevo, si el problema persiste consulte al proveedor.";
				}
			}
		}
		echo json_encode($retorna);
	}


	private function validarCaracteres($name){
		$ValidChars = "0123456789_-.@$()={}[]° abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$valid_name = $name;
		$name = str_split($name);
		for ($i = 0; $i < count($name); $i++)
			if (strpos($ValidChars, $name[$i]) === false)
				$valid_name = str_replace($name[$i], '', $valid_name);
		return ($valid_name);
	}
}