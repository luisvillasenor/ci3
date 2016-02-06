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
      <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading text-center"><h1><?php echo $title; ?></h1> [Expediente: <?php echo $id_expediente;?> ]</div>
          <div class="panel-body">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-12">
                  <fieldset>
                  <legend>Datos Generales del Paciente</legend>
                  <div class="col-md-6">
                    <dl class="dl-horizontal">
                      <dt>Nombre:</dt>
                      <dd><?php echo $nombre_completo;?></dd>
                      <dt>Edad:</dt>
                      <dd><?php echo $edad;?></dd>
                      <dt>Sexo:</dt>
                      <dd><?php echo $sexo;?></dd>
                      <dt>Edo. Civil:</dt>
                      <dd><?php echo $edo_civ;?></dd>
                      <dt>Hijos:</dt>
                      <dd><?php echo $hijos;?></dd>
                      <dt>Escolaridad:</dt>
                      <dd><?php echo $escolaridad;?></dd>
                      <dt>Trabajo:</dt>
                      <dd><?php echo $trabajo;?></dd>
                    </dl>
                  </div>
                  <div class="col-md-6">
                    <dl class="dl-horizontal">
                      <dt>Días de abstinencia:</dt>
                      <dd><?php echo $dias_abs;?></dd>
                      <dt>Droga:</dt>
                      <dd><?php echo $droga;?></dd>
                      <dt>Tiempo consumiendo:</dt>
                      <dd><?php echo $t_consumo;?></dd>
                      <dt>Droga inicial:</dt>
                      <dd><?php echo $droga_ini;?></dd>
                      <dt>Edad primer consumo:</dt>
                      <dd><?php echo $edad1con;?></dd>
                      <dt>Creciste en:</dt>
                      <dd><?php echo $creciste_en;?></dd>
                    </dl>
                  </div>
                  </fieldset>
                </div>
              </div>
            </div>
          <div>
            

        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <!-- Opciones del Test Autoestima -->
          <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Autoestima PRE <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li role="presentation"><a href="#C" aria-controls="C" role="tab" data-toggle="tab">Aplicar Test Autoestima</a></li>
              <li role="presentation"><a href="#D" aria-controls="D" role="tab" data-toggle="tab">Resultados del test</a></li>
              
            </ul>
          </li>
          <!-- Opciones del Test Salma -->
          <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Salama PRE <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li role="presentation"><a href="#G" aria-controls="C" role="tab" data-toggle="tab">Aplicar Test Salama</a></li>
              <li role="presentation"><a href="#H" aria-controls="D" role="tab" data-toggle="tab">Resultados del test</a></li>
              
            </ul>
          </li>
          <!-- Opciones del Test Ansiedad -->
          <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Ansiedad y Depresión PRE <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li role="presentation"><a href="#ansiedad" aria-controls="ansiedad" role="tab" data-toggle="tab">Aplicar Test Ansiedad y Depresión</a></li>
              <li role="presentation"><a href="#ansiedadresultado" aria-controls="ansiedadresultado" role="tab" data-toggle="tab">Resultados de Ansiedad</a></li>
              <li role="presentation"><a href="#depresionresultado" aria-controls="depresionresultado" role="tab" data-toggle="tab">Resultados de Depresion</a></li>
            </ul>
          </li>
          <!-- Opciones del Test Neurosis -->
          <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Neurosis PRE <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li role="presentation"><a href="#neurosis" aria-controls="C" role="tab" data-toggle="tab">Aplicar Test Neurosis</a></li>
              <li role="presentation"><a href="#neurosisresultado" aria-controls="D" role="tab" data-toggle="tab">Resultados del test</a></li>
            </ul>
          </li>          
          <!-- Opciones del TOTALES PRE y POST -->
          <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Totales y Diagnóstico<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li role="presentation"><a href="#pre" aria-controls="pre" role="tab" data-toggle="tab">Totales Pre</a></li>
              <li role="presentation"><a href="#diagnostico" aria-controls="diagnostico" role="tab" data-toggle="tab">Diagnóstico</a></li>
            </ul>
          </li>          

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <br>
          <!-- Opciones del Test autoestima -->
          <div role="tabpanel" class="tab-pane" id="C">
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
                    Fecha de aplicación: <input type="date" name="fecha_aplicacion" id="fecha_aplicacion">
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
          <div role="tabpanel" class="tab-pane" id="D">
            <div class="panel-body">
              <strong>Resultados Autoestima</strong>:
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
                <h3>Autoestima: 
                  <span class="label label-default"> 
                  <?php 
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
                                      
                                      echo $get_preg_test1_item['interpretacion'];
                                      break;
                                      case '2':

                                      echo "<button class='btn btn-primary' type='button'>";
                                      echo $llave['nombre'];
                                      echo " <span class='badge'>";
                                      echo $value;
                                      echo "</badge></button>";
                                      
                                      echo $get_preg_test1_item['interpretacion'];
                                      break;
                                      case '3':

                                      echo "<button class='btn btn-primary' type='button'>";
                                      echo $llave['nombre'];
                                      echo " <span class='badge'>";
                                      echo $value;
                                      echo "</badge></button>";
                                      
                                      echo $get_preg_test1_item['interpretacion'];
                                      break;
                                      case '4':

                                      echo "<button class='btn btn-primary' type='button'>";
                                      echo $llave['nombre'];
                                      echo " <span class='badge'>";
                                      echo $value;
                                      echo "</badge></button>";

                                      echo $get_preg_test1_item['interpretacion'];
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
                  </small>
                </h3>
              </div>
            </div><!-- body -->
          </div>
          
          <!-- Opciones del Test Salma -->
          <div role="tabpanel" class="tab-pane" id="G">
            <form class="form-inline" method="post" action="<?php echo base_url('#');?>">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                      &times;
                    </span>                          
                  </button>
                  <h4 class="modal-title" id="myModalLabel">
                    <h2>Salama</h2>
                    <h3>Instrucciones: Responde la opción tomando en cuenta el Aquí y el Ahora. Como te sientas ahora.</h3>
                  </h4>
                </div>
                <div class="modal-body">
                  <div class="panel panel-default">
                    <input type="hidden" name="id_expediente" id="id_expediente" value="<?php echo $id_expediente;?>">
                    <input type="hidden" name="status_test2" id="status_test2" value="1">
                    Fecha de aplicación: <input type="date" name="fecha_aplicacion_test2" id="fecha_aplicacion_test2">
                    <div class="panel-body">
                      <table class="table table-condensed">
                        <tr>
                          <th></th>
                          <th>Pregunta</th>
                          <th colspan="4">Respuesta</th>                
                        </tr>
                        <?php foreach ($get_preg_test2 as $get_preg_test2_item) : ?>
                          <tr>
                            <td><?php echo $get_preg_test2_item['id'];?></td>
                            <td><?php echo $get_preg_test2_item['pregunta'];?></td>
                              <td>
                                  <div class="form-group" data-toggle="buttons">
                                  <?php foreach ($get_resp_test2 as $get_resp_test2_item) : ?>
                                    <label class="btn btn-primary radio-inline">
                                      <input type="radio" autocomplete="off" name="resp_test2_<?php echo $get_preg_test2_item['id'];?>" id="resp_test2_<?php echo $get_preg_test2_item['id'];?>" value="<?php echo $get_resp_test2_item['valor'];?>" required><?php echo $get_resp_test2_item['respuesta'];?>
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
          <div role="tabpanel" class="tab-pane" id="H">GH Salama</div>
          
          <!-- Opciones del Test Ansiedad -->
          <div role="tabpanel" class="tab-pane" id="ansiedad">
            <form class="form-inline" method="post" action="<?php echo base_url('psic_test3/create');?>">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                      &times;
                    </span>                          
                  </button>
                  <h4 class="modal-title" id="myModalLabel">
                    <h2>GC Ansiedad y Depresión</h2>
                    <h3>Instrucciones: selecciona en cada pregunta el número que corresponda a tu estado de ánimo</h3>
                  </h4>
                </div>
                <div class="modal-body">
                  <div class="panel panel-default">
                    <input type="hidden" name="id_expediente" id="id_expediente" value="<?php echo $id_expediente;?>">
                    <input type="hidden" name="status_test3" id="status_test3" value="1">
                    Fecha de aplicación: <input type="date" name="fecha_aplicacion_test3" id="fecha_aplicacion_test3">
                    <div class="panel-body">
                      <table class="table table-condensed">
                        <tr>
                          <th></th>
                          <th>Pregunta</th>
                          <th colspan="4">Respuesta</th>                
                        </tr>
                        <?php foreach ($get_preg_test3 as $get_preg_test3_item) : ?>
                          <tr>
                            <td><?php echo $get_preg_test3_item['id'];?></td>
                            <td><?php echo $get_preg_test3_item['pregunta'];?></td>
                              <td>
                              <div class="form-group" data-toggle="buttons">
                            <?php foreach ($get_resp_test3 as $get_resp_test3_item) : ?>
                              <?php if ($get_resp_test3_item['idpreg'] == $get_preg_test3_item['id']) { ?>
                                <label class="btn btn-primary radio-inline">
                                  <input type="radio" autocomplete="off" name="resp_test3_<?php echo $get_resp_test3_item['id'];?>" id="resp_test3_<?php echo $get_resp_test3_item['idpreg'];?>" value="<?php echo $get_resp_test3_item['resp1_num'];?>" required><span class="badge"> <?php echo $get_resp_test3_item['resp1_num'];?></span> <?php echo $get_resp_test3_item['resp1_txt'];?>
                                </label><br>
                                <label class="btn btn-primary radio-inline">
                                  <input type="radio" autocomplete="off" name="resp_test3_<?php echo $get_resp_test3_item['id'];?>" id="resp_test3_<?php echo $get_resp_test3_item['idpreg'];?>" value="<?php echo $get_resp_test3_item['resp2_num'];?>" required><span class="badge"> <?php echo $get_resp_test3_item['resp2_num'];?></span> <?php echo $get_resp_test3_item['resp2_txt'];?>
                                </label><br>
                                <label class="btn btn-primary radio-inline">
                                  <input type="radio" autocomplete="off" name="resp_test3_<?php echo $get_resp_test3_item['id'];?>" id="resp_test3_<?php echo $get_resp_test3_item['idpreg'];?>" value="<?php echo $get_resp_test3_item['resp3_num'];?>" required><span class="badge"> <?php echo $get_resp_test3_item['resp3_num'];?></span> <?php echo $get_resp_test3_item['resp3_txt'];?>
                                </label><br>
                                <label class="btn btn-primary radio-inline">
                                  <input type="radio" autocomplete="off" name="resp_test3_<?php echo $get_resp_test3_item['id'];?>" id="resp_test3_<?php echo $get_resp_test3_item['idpreg'];?>" value="<?php echo $get_resp_test3_item['resp4_num'];?>" required><span class="badge"> <?php echo $get_resp_test3_item['resp4_num'];?></span> <?php echo $get_resp_test3_item['resp4_txt'];?>
                                </label>
                              <?php } ?>                                
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
          <div role="tabpanel" class="tab-pane" id="ansiedadresultado">
            <div class="panel-body">
              <strong>Resultados de Ansiedad</strong>:
              <p>Calculados en Puntos y en Porcentaje considerando como 100% = 21 Puntos cada uno, es decir 21 puntos para Ansiedad y 21 par Depresion</p>
              <table class="table">
                <tr>
                  <th>Ansiedad</th>
                  <th>Porcentaje</th>
                  <th>Interpretación</th>
                </tr>
                <tr>
                  <td><?php echo $ansiedad;?> Ptos.</td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo number_format(($avanceansiedad*100),2);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format(($avanceansiedad*100),2);?>%;">
                        <?php echo number_format(($avanceansiedad*100),2) . "%" ;?>
                      </div>              
                    </div>
                  </td>
                  <td>
                    ANSIEDAD 
                    <?php 
                        if ( $avanceansiedad > 0 AND $avanceansiedad <= 0.25 ) {
                          echo "MUY ALTA";
                        }elseif ( $avanceansiedad > 0.25 AND $avanceansiedad <= 0.50 ) {
                          echo "ALTA";
                        }elseif ( $avanceansiedad > 0.50 AND $avanceansiedad <= 0.75 ) {
                          echo "MEDIA";
                        }elseif ( $avanceansiedad > 0.75 AND $avanceansiedad <= 1 ) {
                          echo "BAJA";
                        }else{ echo "--"; }
                    ?>
                  </td>
                </tr>
              </table>
              <hr>
              <div class="page-header">
                <h2>Interpretación Psicométrica</h2>
                <h3>Ansiedad: 
                  <span class="label label-default"> 
                  <?php 
                        if ( $avanceansiedad > 0 AND $avanceansiedad <= 0.25 ) {
                          echo "MUY ALTA";
                        }elseif ( $avanceansiedad > 0.25 AND $avanceansiedad <= 0.50 ) {
                          echo "ALTA";
                        }elseif ( $avanceansiedad > 0.50 AND $avanceansiedad <= 0.75 ) {
                          echo "MEDIA";
                        }elseif ( $avanceansiedad > 0.75 AND $avanceansiedad <= 1 ) {
                          echo "BAJA";
                        }else{ echo "--";}
                  ?> 
                  </span>
                  <p>
                  <p>Descripción:</p>
                  <p>
                  
                </h3>
              </div>
            </div><!-- body -->
          </div>
          <div role="tabpanel" class="tab-pane" id="depresionresultado">
            <div class="panel-body">
              <strong>Resultados de Depresion</strong>:
              <p>Calculados en Puntos y en Porcentaje considerando como 100% = 21 Puntos cada uno, es decir 21 puntos para Ansiedad y 21 par Depresion</p>
              <table class="table">
                <tr>
                  <th>Depresion</th>
                  <th>Porcentaje</th>
                  <th>Interpretación</th>
                </tr>
                <tr>
                  <td><?php echo $depresion;?> Ptos.</td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo number_format(($avancedepresion*100),2);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format(($avancedepresion*100),2);?>%;">
                        <?php echo number_format(($avancedepresion*100),2) . "%" ;?>
                      </div>              
                    </div>
                  </td>
                  <td>
                    DEPRESION 
                    <?php 
                        if ( $avancedepresion > 0 AND $avancedepresion <= 0.25 ) {
                          echo "MUY ALTA";
                        }elseif ( $avancedepresion > 0.25 AND $avancedepresion <= 0.50 ) {
                          echo "ALTA";
                        }elseif ( $avancedepresion > 0.50 AND $avancedepresion <= 0.75 ) {
                          echo "MEDIA";
                        }elseif ( $avancedepresion > 0.75 AND $avancedepresion <= 1 ) {
                          echo "BAJA";
                        }else{ echo "--"; }
                    ?>
                  </td>
                </tr>
              </table>
              <hr>
              <div class="page-header">
                <h2>Interpretación Psicométrica</h2>
                <h3>Depresion: 
                  <span class="label label-default"> 
                  <?php 
                        if ( $avancedepresion > 0 AND $avancedepresion <= 0.25 ) {
                          echo "MUY ALTA";
                        }elseif ( $avancedepresion > 0.25 AND $avanceansiedad <= 0.50 ) {
                          echo "ALTA";
                        }elseif ( $avancedepresion > 0.50 AND $avancedepresion <= 0.75 ) {
                          echo "MEDIA";
                        }elseif ( $avancedepresion > 0.75 AND $avancedepresion <= 1 ) {
                          echo "BAJA";
                        }else{ echo "--";}
                  ?> 
                  </span>
                  <p>
                  <p>Descripción:</p>
                  <p>
                  
                </h3>
              </div>
            </div><!-- body -->
          </div>
          <!-- Opciones del Test Neurosis -->
          <div role="tabpanel" class="tab-pane" id="neurosis">
            <form class="form-inline" method="post" action="<?php echo base_url('psic_test4/create');?>">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                      &times;
                    </span>                          
                  </button>
                  <h4 class="modal-title" id="myModalLabel">
                    <h2>Neurosis</h2>
                    <h3>Instrucciones: selecciona en cada pregunta la opción que corresponda a tu sentir actual</h3>
                  </h4>
                </div>
                <div class="modal-body">
                  <div class="panel panel-default">
                    <input type="hidden" name="id_expediente" id="id_expediente" value="<?php echo $id_expediente;?>">
                    <input type="hidden" name="status_test4" id="status_test4" value="1">
                    Fecha de aplicación: <input type="date" name="fecha_aplicacion_test4" id="fecha_aplicacion_test4">
                    <div class="panel-body">
                      <table class="table table-condensed">
                        <tr>
                          <th></th>
                          <th>Pregunta</th>
                          <th colspan="4">Respuesta</th>                
                        </tr>
                        <?php foreach ($get_preg_test4 as $get_preg_test4_item) : ?>
                          <tr>
                            <td><?php echo $get_preg_test4_item['id'];?></td>
                            <td><?php echo $get_preg_test4_item['pregunta'];?></td>
                              <td>
                              <?php if ( $get_preg_test4_item['id'] != 8 AND $get_preg_test4_item['id'] != 16 ) { ?>
                                  <div class="form-group" data-toggle="buttons">
                                  <?php foreach ($get_resp_test4 as $get_resp_test4_item) : ?>
                                    <label class="btn btn-primary radio-inline">
                                      <input type="radio" autocomplete="off" name="resp_test4_<?php echo $get_preg_test4_item['id'];?>" id="resp_test4_<?php echo $get_preg_test4_item['id'];?>" value="<?php echo $get_resp_test4_item['valor'];?>" required><?php echo $get_resp_test4_item['respuesta'];?>
                                    </label>
                                  <?php endforeach; ?>
                                  </div>
                              <?php } elseif ($get_preg_test4_item['id'] == 8) { ?>
                                    <div class="form-group" data-toggle="buttons">
                                    <label class="btn btn-primary radio-inline">
                                      <input type="radio" autocomplete="off" name="resp_test4_<?php echo $get_preg_test4_item['id'];?>" id="resp_test4_<?php echo $get_preg_test4_item['id'];?>" value="1" required>SI, Nadie me entiende
                                    </label>
                                    <label class="btn btn-primary radio-inline">
                                      <input type="radio" autocomplete="off" name="resp_test4_<?php echo $get_preg_test4_item['id'];?>" id="resp_test4_<?php echo $get_preg_test4_item['id'];?>" value="0" required>NO
                                    </label>
                                    </div>  
                              <?php } elseif ($get_preg_test4_item['id'] == 16) { ?>
                                    <div class="form-group" data-toggle="buttons">
                                    <label class="btn btn-primary radio-inline">
                                      <input type="radio" autocomplete="off" name="resp_test4_<?php echo $get_preg_test4_item['id'];?>" id="resp_test4_<?php echo $get_preg_test4_item['id'];?>" value="1" required>SI, no confío
                                    </label>
                                    <label class="btn btn-primary radio-inline">
                                      <input type="radio" autocomplete="off" name="resp_test4_<?php echo $get_preg_test4_item['id'];?>" id="resp_test4_<?php echo $get_preg_test4_item['id'];?>" value="0" required>NO, sí confío
                                    </label>
                                  </div>
                              <?php } ?>
                                                          
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
          <div role="tabpanel" class="tab-pane" id="neurosisresultado">
            <div class="panel-body">
              <strong>Resultados Neurosis</strong>:
              <p>Calculados en Puntos y en Porcentaje considerando como 100% = 16 Puntos</p>
              <table class="table">
                <tr>
                  <th>Calificación</th>
                  <th>Porcentaje</th>
                  <th>Interpretación</th>
                </tr>
                <tr>
                  <td><?php echo $neurosis;?> Ptos.</td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo number_format(($avanceneurosis*100),2);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format(($avanceneurosis*100),2);?>%;">
                        <?php echo number_format(($avanceneurosis*100),2) . "%" ;?>
                      </div>              
                    </div>
                  </td>
                  <td>
                    NEUROSIS 
                    <?php 
                        if ( $avanceneurosis > 0 AND $avanceneurosis <= 0.25 ) {
                          echo "MUY ALTA";
                        }elseif ( $avanceneurosis > 0.25 AND $avanceneurosis <= 0.50 ) {
                          echo "ALTA";
                        }elseif ( $avanceneurosis > 0.50 AND $avanceneurosis <= 0.75 ) {
                          echo "MEDIA";
                        }elseif ( $avanceneurosis > 0.75 AND $avanceneurosis <= 1 ) {
                          echo "BAJA";
                        }else{ echo "--"; }
                    ?>
                  </td>
                </tr>
              </table>
              <hr>
              <div class="page-header">
                <h2>Interpretación Psicométrica</h2>
                <h3>Neurosis: 
                  <span class="label label-default"> 
                  <?php 
                        if ( $avanceneurosis > 0 AND $avanceneurosis <= 0.25 ) {
                          echo "MUY ALTA";
                        }elseif ( $avanceneurosis > 0.25 AND $avanceneurosis <= 0.50 ) {
                          echo "ALTA";
                        }elseif ( $avanceneurosis > 0.50 AND $avanceneurosis <= 0.75 ) {
                          echo "MEDIA";
                        }elseif ( $avanceneurosis > 0.75 AND $avanceneurosis <= 1 ) {
                          echo "BAJA";
                        }else{ echo "--";}
                  ?> 
                  </span>
                  <p>
                  <p>Descripción:</p>
                  <p>
                  <small> 
                    <?php
                      foreach ($get_preg_test4 as $get_preg_test4_item) : ?>
                      <?php 
                        foreach ($get_test4 as $key => $value) :
                          if ( !empty($get_test1)) {
                            $var = substr($key,0,11);
                            if ($var =='resp_test4_') {
                              $id = substr($key,11);
                              if ( $get_preg_test4_item['id'] == $id ) {
                                foreach ($get_resp_test4 as $llave) {
                                  if ($llave['valor'] == $value) {
                                    switch ($llave['valor']) {
                                      case '0':
                                      
                                      echo "<button class='btn btn-primary' type='button'>";
                                      echo $llave['nombre'];
                                      echo " <span class='badge'>";
                                      echo $value;
                                      echo "</badge></button>";
                                      
                                      echo $get_preg_test4_item['interpretacion'];
                                      break;
                                      case '2':

                                      echo "<button class='btn btn-primary' type='button'>";
                                      echo $llave['nombre'];
                                      echo " <span class='badge'>";
                                      echo $value;
                                      echo "</badge></button>";
                                      
                                      echo $get_preg_test4_item['interpretacion'];
                                      break;
                                      case '3':

                                      echo "<button class='btn btn-primary' type='button'>";
                                      echo $llave['nombre'];
                                      echo " <span class='badge'>";
                                      echo $value;
                                      echo "</badge></button>";
                                      
                                      echo $get_preg_test4_item['interpretacion'];
                                      break;
                                      case '4':

                                      echo "<button class='btn btn-primary' type='button'>";
                                      echo $llave['nombre'];
                                      echo " <span class='badge'>";
                                      echo $value;
                                      echo "</badge></button>";

                                      echo $get_preg_test4_item['interpretacion'];
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
                  </small>
                </h3>
              </div>
            </div><!-- body -->
          </div>

          <!-- Opciones de TOTALES PRE -->
          <div role="tabpanel" class="tab-pane" id="pre">
            <table class="table table-bordered">
              <thead>
                <tr class="info">
                  <th></th>
                  <th>Bateria</th>
                  <th>Autoestima</th>
                  <th>Ansiedad</th>
                  <th>Depresión</th>
                  <th>Neurosis</th>
                  <th>Salama</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="info">Total Pts x 100</td>
                  <td class=""><?php echo ($calificacion+$ansiedad+$depresion+$neurosis);?> / 166</td>
                  <td class=""><?php echo $calificacion;?> / 44</td>
                  <td class=""><?php echo $ansiedad;?> / 21</td>
                  <td class=""><?php echo $depresion;?> / 21</td>
                  <td class=""><?php echo $neurosis;?> / 16</td>
                  <td class="">X / 64</td>
                </tr>
                <tr>
                  <td class="info">%</td>
                  <td class="default"><?php echo number_format(((($calificacion+$ansiedad+$depresion+$neurosis)/166)*100),2) . "%" ;?></td>
                  <td class="default"><?php echo number_format(($avance*100),2) . "%" ;?></td>
                  <td class="default"><?php echo number_format(($avanceansiedad*100),2) . "%" ;?></td>
                  <td class="default"><?php echo number_format(($avancedepresion*100),2) . "%" ;?></td>
                  <td class="default"><?php echo number_format(($avanceneurosis*100),2) . "%" ;?></td>
                  <td class="default"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div role="tabpanel" class="tab-pane" id="diagnostico">
            <h2>Psicometría Gestalt</h2>
            <h2>Nombre del Paciente</h2>
            <hr>
            <table class="table table-bordered">
              <thead>
                <tr class="info">
                  <th></th>
                  <th>Bateria</th>
                  <th>Autoestima</th>
                  <th>Ansiedad</th>
                  <th>Depresión</th>
                  <th>Neurosis</th>
                  <th>Salama</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="info">Total Pts x 100</td>
                  <td class="">X / 166</td>
                  <td class="">X / 44</td>
                  <td class="">X / 21</td>
                  <td class="">X / 21</td>
                  <td class="">X / 16</td>
                  <td class="">X / 64</td>
                </tr>
                <tr>
                  <td class="info">%</td>
                  <td class="default"></td>
                  <td class="default"></td>
                  <td class="default"></td>
                  <td class="default"></td>
                  <td class="default"></td>
                  <td class="default"></td>
                </tr>
              </tbody>
            </table>
            <br>
            <h3>Autoestima</h3>
            <h3>Ansiedad</h3>
            <h3>Depresión</h3>
            <h3>Neurosis</h3>
            <h3>Salama</h3>
            <h4>F8</h4>
            <h4>F7</h4>
            <h4>F6</h4>
            <h4>F5</h4>
            <h4>F4</h4>
            <h4>F3</h4>
            <h4>F2</h4>
            <h4>F1</h4>
          </div>
        </div>



      </div><!-- panel-default -->
    </div><!-- col-9 -->
  </div><!-- row -->
</div><!-- container -->
