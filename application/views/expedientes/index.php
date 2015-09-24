
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
                              <caption></caption>
                              <tr>
                                <th>Expediente/Aplicador</th>
                                <th>Paciente/GRupo</th>
                                <th>Avance Global</th>
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
                                <td>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo ($expediente_item['status_exp'])*100; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($expediente_item['status_exp'])*100; ?>%;">
                                        <?php echo ($expediente_item['status_exp'])*100; ?> %
                                      </div>              
                                    </div>
                                </td>
                                <td>
                                	<a type="button" class="btn btn-default" href="<?php echo base_url('expedientes/'.$expediente_item['id_expediente']); ?>">Datos del Expediente</a>
                                </td>
                                <td>
                                	<a type="button" class="btn btn-primary" href="<?php echo base_url('einicial/'.$expediente_item['id_expediente']); ?>">Ev.Inicial [<?php echo ($expediente_item['status_test1']*100); ?>%]</a>
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
