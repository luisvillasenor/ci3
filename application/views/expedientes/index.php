
    <div class="container-fluid">
      <div class="row">        
        
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="text-center">
              <p>
              <img src="<?php echo base_url();?>/Amarillo-180x180.jpg" alt="FotoPerfil" class="img-circle">
              <br>
              <div>¡Hola, Spider!<br> Bienvenido </div>
              <p>              
            </li>
            <li><a href="<?php echo base_url('index.php/gestalt'); ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"> Paciente Nuevo</a></li>
            <li class="active">
                <a href="<?php echo base_url('index.php/expedientes'); ?>"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"> Pacientes</a>
            </li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true"> Manual de Atencion Psicologica</a>
            </li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       
        <div class="page-header">
          <h1>Listado de Pacientes</h1>
        </div>



                          <table class="table table-hover">
                            <thead>
                              <caption></caption>
                              <tr>

                                <th>Paciente</th>
                                <th>Grupo</th>
                                
                                <th colspan="4"></th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($expedientes as $expediente_item) : ?>
                              <tr>

                                <td>
                                <?php 
                                    foreach ($pacientes as $pacientes_item) {
                                      if ($pacientes_item['id_paciente'] == $expediente_item['id_paciente']) {
                                        # code...
                                        echo $pacientes_item['nombre_completo'];
                                      }
                                      # code...
                                    }
                                ?>
                                </td>
                                <td>
                                <?php 
                                    foreach ($pacientes as $pacientes_item) {
                                      if ($pacientes_item['id_paciente'] == $expediente_item['id_paciente']) {
                                        # code...
                                        echo $pacientes_item['grupo'];
                                      }
                                      # code...
                                    }
                                ?>
                                </td>
<!--                                <td>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo ($expediente_item['status_exp'])*100; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($expediente_item['status_exp'])*100; ?>%;">
                                        <?php echo ($expediente_item['status_exp'])*100; ?> %
                                      </div>              
                                    </div>
                                </td>
-->
<!--                                <td>
                                	<a type="button" class="btn btn-default" href="<?php echo base_url('index.php/expedientes/'.$expediente_item['id_expediente']); ?>">Datos del Expediente</a>
                                </td>
-->
                                <td>
                                	<a type="button" class="btn btn-primary" href="<?php echo base_url('index.php/einicial/'.$expediente_item['id_expediente']); ?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> BATERIA PRE</a>
                                </td>
                                

                              </tr>
                            <?php endforeach; ?>  
                            </tbody>
                          </table>
        
        </div>
      </div>
    </div>
