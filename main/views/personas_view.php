<!DOCTYPE html>
<?php
require_once("models/personas_model.php");
  $con = new personas_model;
?>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
    </head>
    <body>
      <div>
      <h2>-------------------------- LISTA DE ALUMNOS  -------------------------------</h2>
    </div>
    <div class="insertar">
        <input id="codigo" placeholder="codigo" type="text" required/>
        <input id="nombres" placeholder="nombres" type="text"/>
        <input id="apellidos" placeholder="apellidos" type="text"/>
        
        <input type="submit" class='btnInsertar' id="btnInsertar" value="Insertar">
      
      
    </div>
    <br>
    <div>
      <?php $con ->mostrar(); ?>
    </div>

    <script src="../JQuery/jquery-3.1.0.min.js"></script>
    <script type="text/javascript">
      $(document).on("click", "#btnInsertar", function(e){
          var codigo = $("#codigo").val();
          var nombres = $("#nombres").val();
          var apellidos = $("#apellidos").val();
          
          $.post("controllers/personas_controller.php",
                  {
                    codigo:codigo,
                    nombres:nombres,
                    apellidos:apellidos,
                    var : 'Insertar',
                  },
                  function(data){
                    alert(data);
                    location.reload();
                  }
                )
      });
    </script>

      
        <?php
        echo '<br>';
        echo '<a href="../logout.php">CERRAR SESION</a><br>';
        echo '<br>';
        ?>
                 
    </body>
</html>