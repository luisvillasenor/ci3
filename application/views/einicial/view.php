    <div class="container-fluid">
      <div class="row">        
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?php echo base_url('expedientes');?>">Mis Expedientes <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('einicial/'.$id_expediente.'');?>">Expediente <?php echo $id_expediente;?></a></li>
          <li class="active"><?php echo $title;?> [ <?php echo $status_test1;?> ]</li>
        </ol>
       
        
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading text-center"><?php echo $title;?></div>
                      <div class="panel-body">

        <div class="panel panel-default">
          <div class="panel-body">
            Paciente: <?php echo $nombre_completo;?>
          </div>
        </div>




<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Autoestima</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">SALMA</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Ansiedad y Depresión</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Neurosis</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Informe Clinico</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Informe Familia</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <br>


    <div role="tabpanel" class="tab-pane active" id="home">

                <?php
                      if (empty($status_test1)) { ?>
                          <!-- Boton Modal Crear Nuevo Test1 -->
                          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_<?php echo $id_expediente;?>">
                            Aplicar Nuevo Test1 <?php echo $status_test1;?>
                          </button>
                <?php }
                 ?>
             
                <!-- Modal -->
                <div class="modal fade" id="myModal_<?php echo $id_expediente;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <form class="form-inline" method="post" action="<?php echo base_url('psic_test1/create');?>">  
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">
                            &times;
                          </span>                          
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                          <strong>Instrucciones</strong>:
                          <p>Señala la opción que este más acorde a tu sentir y oprime elboton de Salvar Datos.</p>
                        </h4>
                      </div>
                      <div class="modal-body">
                        
                          <div class="panel panel-default">
                            <input type="hidden" name="id_expediente" id="id_expediente" value="<?php echo $id_expediente;?>">
                            <input type="hidden" name="status_test1" id="status_test1" value="1">
                            <div class="panel-body">
                                  <table class="table table-condensed">
                                    <tr>
                                      <th></th>
                                      <th>Pregunta</th>
                                      <th colspan="4">Respuesta</th>                
                                    </tr>
                                    <?php foreach ($get_preg_test1 as $get_preg_test1_item) : ?>
                                        <tr>
                                          <td><?php echo $get_preg_test1_item['id'];?></td>
                                          <td><?php echo $get_preg_test1_item['pregunta'];?></td>
                                            <td>
                                            <div class="form-group" data-toggle="buttons">
                                          <?php foreach ($get_resp_test1 as $get_resp_test1_item) : ?>
                                              <label class="btn btn-default radio-inline">
                                                <input type="radio" autocomplete="off" name="resp_test1_<?php echo $get_preg_test1_item['id'];?>" id="resp_test1" value="<?php echo $get_resp_test1_item['valor'];?>" required><?php echo $get_resp_test1_item['nombre'];?>
                                              </label>
                                          <?php endforeach; ?>
                                            </div>
                                            </td>                    
                                        </tr>
                                    <?php endforeach; ?>
                                  </table>
                            </div>
                          </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-success">
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
<hr>

<div>        
<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">

    <li role="presentation"><a href="#valores" aria-controls="valores" role="tab" data-toggle="tab">Valores</a></li>
    <li role="presentation"><a href="#resultados" aria-controls="resultados" role="tab" data-toggle="tab">Resultados</a></li>
    
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">

    <div role="tabpanel" class="tab-pane fade" id="valores">
      
            <div class="panel-body">
            <div id="ver_valores"></div>
            <div id="ver_resultados"></div>
            <strong>Valores del Test 1</strong>:
            <p>Valores por cada respuesta a las preguntas del test.</p>
            
            <table class="table">
              <tr>
                <th></th>
                <th>Pregunta</th>
                <th colspan="4">Respuesta</th>                
              </tr>
              <?php foreach ($get_preg_test1 as $get_preg_test1_item) : ?>
                  <tr>
                    <td><?php echo $get_preg_test1_item['id'];?></td>
                    <td><?php echo $get_preg_test1_item['pregunta'];?></td>
                    
                      <td>
                      
                    <?php 
                    foreach ($get_test1 as $key => $value) :
                      if ( !empty($get_test1)) {
                        $var = substr($key,0,11);
                        if ($var =='resp_test1_') {
                          $id = substr($key,11);
                          if ( $get_preg_test1_item['id'] == $id ) {
                            foreach ($get_resp_test1 as $llave) {
                              if ($llave['valor'] == $value) {
                                echo "<button class='btn btn-primary' type='button'>";
                                echo $llave['nombre'];
                                echo " <span class='badge'>";
                                echo $value;
                                echo "</badge></button>";
                              }
                            }
                          }
                        }
                      }                        
                    endforeach;
                    ?>
                      
                      </td>                    
                                        
                  </tr>
              <?php endforeach; ?>
            </table>
            </div>
    </div><!-- valores -->

    <div role="tabpanel" class="tab-pane fade" id="resultados">
            <div class="panel-body">
            <div id="ver_valores"></div>
            <div id="ver_resultados"></div>
            <strong>Resultados</strong>:
            <p>Calculados en Puntos y en Porcentaje considerando como 100% = 44 Puntos</p>
            <table class="table">
              <tr>
                <th>Calificación</th>
                <th>Porcentaje</th>
              </tr>
              <tr>
                <td><?php echo $calificacion;?> Ptos.</td>
                <td><?php echo number_format(($avance*100),2) . "%" ;?></td>
              </tr>
            </table>
            <hr>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo number_format(($avance*100),2);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format(($avance*100),2);?>%;">
                <?php echo number_format(($avance*100),2) . "%" ;?>
              </div>              
            </div>
            </div>
    </div><!-- rresultados -->
  </div>
</div>
</div><!--home -->


    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div><!-- tabs -->

</div>


                      </div>
                    </div>
                  </div>
        
        </div>
      </div>
    </div>
