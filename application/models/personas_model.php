<?php
	class Personas_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function MostrarPersonas(){
			$consulta=$this->db->query("SELECT * FROM personas");
			return $consulta->result();
		}

		function insertar($codigo,$nombres,$apellidos){

			$data = array('nombre' => $nombres	, 'apellido' =>$apellidos);

			if($codigo==""){
				$estado=$this->db->insert('personas',$data);
				if($estado==1){
					return 'I';
				}else{
					return 'EI';
				}
			}else{
				$this->db->where('codigo',$codigo);
				$estado=$this->db->update('personas',$data);
				if($estado==1){
					return 'M';
				}else{
					return 'EM';
				}
			}
		}

		function TraerDatos($cod){
			$query=$this->db->get_where('personas',  array('codigo' => $cod));
			return $query->result();
		}

		function Eliminar($cod){
			$this->db->where('codigo',$cod);
			$eliminar=$this->db->delete('personas');
			if($eliminar==1){
				return 'E';
			}else{
				return 'EE';
			}
		}

		

	}
?>