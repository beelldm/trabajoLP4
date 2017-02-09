<?php
if( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Personas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database('default');
		$this->load->model('personas_model');
	}


	public function nuevo(){
		$codigo=$_POST["codigo"];
		$nombres=$_POST["nombres"];
		$apellidos=$_POST["apellidos"];
		$result = $this->personas_model->insertar($codigo,$nombres,$apellidos);
		echo $result;
	}

	public function VerEditar(){
		$editar=$this->personas_model->TraerDatos($this->input->post("id"));
		echo json_encode($editar);
	}

	public function eliminar(){
		$eliminar=$this->personas_model->Eliminar($this->input->post("id"));
		echo $eliminar;
	}

	
}