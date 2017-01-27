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
                print $dato["codigo"].'<br>';
                print $dato["nombre"]."     ";
                print $dato["apellido"]."<br/>";
            }
       ?>
                    
        <?php
        echo '<br>';
        echo '<a href="../logout.php">CERRAR SESION</a><br>';
        echo '<br>';
        ?>
                    
    </body>
</html>