
    <div class="container-fluid">
      <div class="row">        
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?php echo base_url('expedientes'); ?>">Mis Expedientes <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading text-center"><h1><?php echo $title; ?></h1></div>
                      <div class="panel-body">
                          <table class="table table-hover">
                            <thead>
                              <caption>Mis Expedientes</caption>
                              <tr>
                                <th>Exp</th>
                                <th>Paciente</th>
                                <th>Status</th>
                                <th colspan="4"></th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($expedientes as $expediente_item) : ?>
                              <tr>
                                <td><?php echo $expediente_item['id_expediente']; ?> / <?php echo $expediente_item['aplicador']; ?></td>
                                <td>
                                <?php 
                                    foreach ($pacientes as $pacientes_item) {
                                      if ($pacientes_item['id_paciente'] == $expediente_item['id_paciente']) {
                                        # code...
                                        echo $pacientes_item['nombre_completo'];
                                        echo "<br>";
                                        echo "[".$pacientes_item['grupo']."]";
                                      }
                                      # code...
                                    }
                                ?>
                                </td>
                                <td>%<?php echo $expediente_item['status_exp']; ?></td>
                                <td>
                                	<a type="button" class="btn btn-default" href="<?php echo base_url('expedientes/'.$expediente_item['id_expediente']); ?>">Datos del Expediente</a>
                                </td>
                                <td>
                                	<a type="button" class="btn btn-primary" href="<?php echo base_url('einicial/'.$expediente_item['id_expediente']); ?>">Ev.Inicial [%<?php echo $expediente_item['status_test1']; ?>]</a>
                                </td>
                                <td>
                                  <form action="efinal" method="post">
                                    <input type="hidden" name="id_paciente" id="id_paciente" value="<?php echo $expediente_item['id_paciente']; ?>">
                                    <input class="btn btn-info" type="submit" value="Evaluacion Final">
                                  </form>
                                </td>
                                <td>
                                  <form action="psico" method="post">
                                    <input type="hidden" name="id_paciente" id="id_paciente" value="<?php echo $expediente_item['id_paciente']; ?>">
                                    <input class="btn btn-success" type="submit" value="Psocometria">
                                  </form>
                                </td>

                              </tr>
                            <?php endforeach; ?>  
                            </tbody>
                          </table>
                                                   
                      </div>
                    </div>
                  </div>
        
        </div>
      </div>
    </div>
