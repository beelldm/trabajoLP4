<?php

  $this->load->database('default');

  $query = $this->db->get_where('personal', array('idpersonal' => $_SESSION["idpersonal"]));
  $data["logueado"] = $query->result();

  $idperfil = $data["logueado"][0]->idperfil;
  $nombres = $data["logueado"][0]->nombres;
  $apellidos = $data["logueado"][0]->apellidos;
  $apodo = $data["logueado"][0]->usuario;


  $entrar = $this->db->get_where('permisos', array('idperfil' => $idperfil));

  $data["permisos_usuario"] = $entrar->result();

?>