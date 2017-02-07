<?php

require_once("views/personas_view.php");

require_once("models/personas_model.php");
$con = new personas_model();

 if (isset($_POST['var'])){
  switch ($_POST['var']){
    case 'Insertar':
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
}
else{
  echo "no existe la condicion";
}
?>