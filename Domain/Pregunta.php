<?php 

class Pregunta 
{
	private $id;
	private $descripcion;
	private $listaOpciones;
	private $listaRespuestas;

	function __construct(){
	$this->$id = 0;
	$this->$descripcion = "";
	$this->$listaOpciones = "";
	$this->$listaRespuestas = "";
	}


	public function setId($id){
		$this->$id = $id;
	}
	public function setDescripcion($descripcion){
		$this->$descripcion = $descripcion;
	}
	public function setListaOpciones($listaOpciones){
		$this->$listaOpciones = $listaOpciones;
	}
	public function setListaRespuestas($listaRespuestas){
		$this->$listaRespuestas = $listaRespuestas;
	}
	public function getId($id){
		return $this->$id;
	}
	public function getDescripcion($descripcion){
		return $this->$descripcion;
	}
	public function getListaOpciones($listaOpciones){
		return $this->$listaOpciones;
	}
	public function getListaRespuestas($listaRespuestas){
		return $this->$listaRespuestas;
	}
}


?>