
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
            <li>
                <a href="<?php echo base_url('index.php/expedientes'); ?>"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"> Pacientes</a>
            </li>
            <li class="active"><a href="<?php echo base_url('index.php/einicial/'.$id_expediente.'');?>"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"> Paciente [ <?php echo $id_expediente;?> ]</a></li>

          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <ol class="breadcrumb">
            <li><a href="<?php echo base_url('index.php/home'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('index.php/expedientes'); ?>">Pacientes</a></li>
            <li><a href="<?php echo base_url('index.php/einicial/'.$id_expediente.'');?>">Paciente [ <?php echo $id_expediente;?> ]</a></li>
          </ol>
       
        
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading text-center">Expediente del Paciente [ <?php echo $id_expediente;?> ]</div>
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
  
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">



    <div role="tabpanel" class="tab-pane active" id="home">

             
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
                            Fecha: <input type="date" name="fecha" id="fecha">
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
                                              <label class="btn btn-primary radio-inline">
                                                <input type="radio" autocomplete="off" name="resp_test1_<?php echo $get_preg_test1_item['id'];?>" id="resp_test1" value="<?php echo $get_resp_test1_item['valor'];?>" required><?php echo $get_resp_test1_item['nombre'];?><span class="badge"> <?php echo $get_resp_test1_item['valor'];?></span>
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
                </div><!-- Modal -->  

<hr>
<div>        


<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">

                <?php
                      if (empty($status_test1)) { ?>
                          <!-- Boton Modal Crear Nuevo Test1 -->
                          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_<?php echo $id_expediente;?>">
                            Aplicar Nuevo Test1 <?php echo $status_test1;?>
                          </button>
                <?php }
                 ?>


    <li role="presentation"><a href="#resultados" aria-controls="resultados" role="tab" data-toggle="tab">Resultados/Diagnóstico</a></li>
    
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">


    <div role="tabpanel" class="tab-pane fade" id="resultados">
            <div class="panel-body">
            <div id="ver_valores"></div>
            <div id="ver_resultados"></div>
            <strong>Resultados/Diagnóstico</strong>:
            <p>Calculados en Puntos y en Porcentaje considerando como 100% = 44 Puntos</p>
            <table class="table">
              <tr>
                <th>Calificación</th>
                <th>Porcentaje</th>
                <th>Interpretación</th>
              </tr>
              <tr>
                <td><?php echo $calificacion;?> Ptos.</td>
                <td>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo number_format(($avance*100),2);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format(($avance*100),2);?>%;">
                        <?php echo number_format(($avance*100),2) . "%" ;?>
                      </div>              
                    </div>

                </td>
                <td>
                AUTOESTIMA 
                    <?php 
                        if ( $avance > 0 AND $avance <= 0.25 ) {
                          echo "MUY ALTA";
                        }elseif ( $avance > 0.25 AND $avance <= 0.50 ) {
                          echo "ALTA";
                        }elseif ( $avance > 0.50 AND $avance <= 0.75 ) {
                          echo "MEDIA";
                        }elseif ( $avance > 0.75 AND $avance <= 1 ) {
                          echo "BAJA";
                        }else{ echo "--"; }
                    ?>
                </td>
              </tr>
            </table>

            <hr>
            <div class="page-header">
              <h2>Interpretación Psicométrica</h2>
              <h3>Autoestima: <span class="label label-default"> <?php 
                        if ( $avance > 0 AND $avance <= 0.25 ) {
                          echo "MUY ALTA";
                        }elseif ( $avance > 0.25 AND $avance <= 0.50 ) {
                          echo "ALTA";
                        }elseif ( $avance > 0.50 AND $avance <= 0.75 ) {
                          echo "MEDIA";
                        }elseif ( $avance > 0.75 AND $avance <= 1 ) {
                          echo "BAJA";
                        }else{ echo "--";}
                    ?> 
                    </span>
                    <p>
                    <p>Descripción:</p>

                    <p>

                    <small> 
              
              <?php
              
                 foreach ($get_preg_test1 as $get_preg_test1_item) : ?>
                    <?php 
                    foreach ($get_test1 as $key => $value) :
                      if ( !empty($get_test1)) {
                        $var = substr($key,0,11);
                        if ($var =='resp_test1_') {
                          $id = substr($key,11);
                          if ( $get_preg_test1_item['id'] == $id ) {
                            foreach ($get_resp_test1 as $llave) {
                              if ($llave['valor'] == $value) {
                                switch ($llave['valor']) {
                                case '0':
                                
                                echo "<button class='btn btn-primary' type='button'>";
                                echo $llave['nombre'];
                                echo " <span class='badge'>";
                                echo $value;
                                echo "</badge></button>";
                                
                                  echo $get_preg_test1_item['pregunta'];
                                  break;
                                case '2':

                                echo "<button class='btn btn-primary' type='button'>";
                                echo $llave['nombre'];
                                echo " <span class='badge'>";
                                echo $value;
                                echo "</badge></button>";
                                
                                  echo $get_preg_test1_item['pregunta'];
                                  break;
                                case '3':

                                echo "<button class='btn btn-primary' type='button'>";
                                echo $llave['nombre'];
                                echo " <span class='badge'>";
                                echo $value;
                                echo "</badge></button>";
                                
                                  echo $get_preg_test1_item['pregunta'];
                                  break;
                                case '4':

                                echo "<button class='btn btn-primary' type='button'>";
                                echo $llave['nombre'];
                                echo " <span class='badge'>";
                                echo $value;
                                echo "</badge></button>";

                                  echo $get_preg_test1_item['pregunta'];
                                  break;
                              }
                               
                              }                          
                            }
                          }
                        }
                      }                        
                    endforeach;
                    ?>
                    <br>                      
              <?php endforeach; ?>

              </small> </h3>
              
            </div>
        </div>
    </div><!-- rresultados -->
  </div>
</div>
</div><!--home -->



  </div><!-- tabs -->

</div>


                      </div>
                    </div>
                  </div>
        
        </div>
      </div>
    </div>
