<?php
//Llamada al modelo
require_once("models/personas_model.php");
$per=new personas_model();
$datos=$per->get_personas();
 
//Llamada a la vista
require_once("views/personas_view.php");

  $con = new mpersonas;

  switch ($_POST['flag']) {
    case 'insertar':
        if($con -> insertarpersonas($_POST["codigo"],$_POST["nombre"],$_POST["apellido"]) == true){
          echo "Se insertó correctamente";
        }
        else{
          echo "No se pudo insertar";
        }
      break;
    case 'modificar':
        if($con -> modificarpersonas($_POST["codigo"],$_POST["nombre"],$_POST["apellido"]) == true){
          echo "Se modificó correctamente";
        }
        else{
          echo "No se pudo modificar";
        }
      break;
    case 'eliminar':
        if($con -> eliminarpersonas($_POST["codigo"]) == true){
          echo "Se eliminó correctamente";
        }
        else{
          echo "No se pudo eliminar";
        }
      break;

    default:
        echo "¿Cómo llegaste aquí?";
      break;
  }
?>