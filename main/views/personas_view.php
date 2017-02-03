<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
    </head>
    <body>
        <?php
            print "------------ LISTA DE ALUMNOS ------------".'<br>';
            foreach ($datos as $dato) {
                echo '<br>';
                echo "<table>
                        <div>
                            <thead>
                                <tr>
                                    <td>Codigo</td>
                                    <td>Nombre</td>
                                    <td>Apellido</td>
                                </tr>
                            </thead>
                        <div>
                      <tbody>";
  
         echo "<div class='contenido'><tr>
                <td><input size=25 id='codigo"."'value='".$dato['codigo']."' disabled></td>
                <td><input size=25 id='nombre"."'value='".$dato['nombre']."' ></td>
                <td><input size=25 id='apellido"."'value='".$dato['apellido']."' ></td>
                <td><button class='btnModificar' id='"."'>Modificar</button></td>
                <td><button class='btnEliminar' id='"."'>Eliminar</button></td>
               </tr></div>";
       }
                echo "</tbody></table>";
    
      function insertarpersonas($codigo,$nombre,$apellido){
      mysql_query("INSERT INTO personas VALUES('$codigo','$nombre','$apellido','1')");
      if(mysql_affected_rows() > 0) return true;
      else return false;
    }

      function modificarpersonas($codigo,$nombre,$apellido){
      mysql_query("UPDATE personas SET nombre='$nombre', apellido='$apellido'
                   WHERE codigo = '$codigo'");
      if(mysql_affected_rows() > 0) return true;
      else return false;
    }

      function eliminarpersonas($codigo){
      mysql_query("UPDATE personas SET estado=0
                   WHERE codigo = '$codigo'");
      if(mysql_affected_rows() > 0) return true;
      else return false;
    }
                
                
                
                
                
       ?>
                    
        <?php
        echo '<br>';
        echo '<a href="../logout.php">CERRAR SESION</a><br>';
        echo '<br>';
        ?>
                    
    </body>
</html>