    <div class="container-fluid">
      <div class="row">        
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?php echo base_url(); ?>mispacientes">Mis Expedientes <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading text-center"><h1>Mis Expedientes</h1></div>
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
                                <td><?php echo $expediente_item['id_paciente']; ?></td>
                                <td>%<?php echo $expediente_item['status_exp']; ?></td>
                                <td>
                                  <form action="miexpediente" method="post">
                                    <input type="hidden" name="id_expediente" id="id_expediente" value="<?php echo $expediente_item['id_expediente']; ?>">
                                    <input type="hidden" name="id_paciente" id="id_paciente" value="<?php echo $expediente_item['id_paciente']; ?>">
                                    <input class="btn btn-default" type="submit" value="Datos del Expediente">
                                  </form>
                                </td>
                                <td>
                                  <form action="einicial" method="post">
                                    <input type="hidden" name="id_paciente" id="id_paciente" value="<?php echo $expediente_item['id_paciente']; ?>">
                                    <input class="btn btn-primary" type="submit" value="Ev.Inicial [%<?php echo $expediente_item['status_test1']; ?>]">
                                  </form>
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
