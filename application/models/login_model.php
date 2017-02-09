<?php
	class Login_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function comprobar($usuario,$clave){
			$consulta=$this->db->get_where('user', array('usuario' => $usuario,
															'password' => $clave));
			return $consulta->result();
		}

	}
?>