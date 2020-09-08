<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/core/src/model/Class_conexion.php';
Class function_usuario{
	private $ruta;
	private $archivo;
	private $tipo;
	private $id_persona;
	public function __construct($archivo, $tipo,$id_persona){
		$this->archivo = $archivo;
		$this->tipo = $tipo;
		$this->id_persona = $id_persona;
		//$this->ruta = "../assets/img";
	}
	public function imagen(){
		 $retorna['dddd'] =$id_tipo;
		 $retorna['tipo'] =$this->id_tipo;
		echo json_encode($retorna);
	}


}