<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SISTEMA</title>

    <?php include("app/includes/link.inc"); ?>



  </head>

  <body style="background: White;">
    <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>ALUMNOS </h2>
              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form id="insertar_personal" data-parsley-validate class="form-horizontal form-label-left">
                <input type="hidden" id="codigo" name="codigo">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombres
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="nombres" name="nombres" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="apellidos" name="apellidos" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="button" class="btn btn-danger" onclick="cerrar();"><i class="fa fa-close"></i> Salir</button>
                    <button type="button" class="btn btn-primary" onclick="return guardar(this.form);"><i class="fa fa-floppy-o"></i> Guardar</button>
                  </div>
                </div>

              </form>
            </div>

            
          </div> 
          <div class="x_panel">
            <div class="x_title">
              <center><h2>Lista de alumnos </h2></center>              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <table class="table">
                <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Accion</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($personas as $value){ ?> 
                      <tr>
                        <td><?php echo $value->codigo?></td>
                        <td><?php echo $value->nombre?></td>
                        <td><?php echo $value->apellido?></td>
                        <td>
                          <button type="button" class="btn btn-info " onclick="editar('<?php echo $value->codigo ?>')"><i class="fa fa-pencil"></i> Editar</button>
                          <button type="button" class="btn btn-danger" onclick="eliminar('<?php echo $value->codigo ?>');"><i class=" fa fa-trash-o"></i> Eliminar</button>
                        </td>
                      </tr>
                   <?php } ?> 
                </tbody>
              </table>

            </div>
          </div>         
        </div>
      </div>

      


    <script>
        var urlbase="<?php echo base_url(); ?>";
    </script>

    <?php include("app/includes/js.inc"); ?>

    <script src="<?php echo base_url(); ?>app/js/otro.js"></script>

  </body>
</html>
