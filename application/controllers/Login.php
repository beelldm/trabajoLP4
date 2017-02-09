<?php
if( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database('default');
		$this->load->model('login_model');
		$this->load->model('personas_model');
	}
	public function index()
	{
		$this->load->view('Login/index.php');


	}

	public function sistema(){

		if(isset($_SESSION["idpersonal"])){
			$personas = $this->personas_model->MostrarPersonas();
			$this->load->view("Personas/index.php",compact("personas"));
		}
		else{
			redirect("Login", "refresh");
		}
	}

	public function login(){
		$usuario=$this->input->post("usuario");
		$clave=$this->input->post("clave");
		$query=$this->login_model->comprobar($usuario,$clave);

		$data["personal"]=$query;

		
		if(count($query)>0){
			$_SESSION["idpersonal"]=$data["personal"][0]->idcodigo;
			$_SESSION["personal_id"]=$data["personal"][0]->idcodigo;

			echo "1";
		}else{
			echo "0";
		}
	}

	public function Logout(){
		session_destroy();
		redirect("Login","refresh");
	}
}
