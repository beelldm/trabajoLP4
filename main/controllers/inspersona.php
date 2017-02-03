<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>NEW INSERT</title>
    </head>
    <body>
        <?php
            print "------------ AGREGAR NUEVO ------------".'<br>';
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
                <td><button class='btnInsert' id='"."'>Guardar</button></td>
               </tr></div>";
         
       }
       echo "</tbody></table>";
       
        $link = Conexion();
        $q = "INSERT INTO personas (codigo, nombre, apellido) VALUES ('$dato','$dato','$dato')";
        $rs = mysql_query($q);
        if($rs == false) {
            echo '<p>Error al insertar los campos en la tabla.</p>';
        }else{
            echo '<p>Los datos se han insertado correctamente.</p>';
        }
        Desconectar($link);
       
       ?>         
    </body>
</html>