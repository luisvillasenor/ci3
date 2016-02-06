
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

          <ol class="breadcrumb">
            <li><a href="<?php echo base_url('index.php/home'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('index.php/gestalt'); ?>">Crear Paciente</a></li>
          </ol>


              <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading text-center"><h1>Datos del Expediente</h1></div>
                <div class="panel-body">
                <?php foreach ($expediente_item as $key => $item) {

                  if ($key == 'id_expediente') { ?>
                          Expediente: 
                          <strong><?php echo $item;?></strong>
                  <?php }                  
                  if ($key == 'miembro') { ?>
                          Miembro: 
                          <strong><?php echo $item;?></strong>
                  <?php }                  
                  if ($key == 'id_paciente') { ?>
                          Paciente: 
                          <strong><?php echo $item;?></strong>
                  <?php }                  
                  if ($key == 'aplicador') { ?>
                          Aplicador: 
                          <strong><?php echo $item;?></strong>
                  <?php }                           
                  if ($key == 'fecha_alta') { ?>
                          Fecha de aLta: 
                          <strong><?php echo $item;?></strong>
                  <?php }                  
                  if ($key == 'fecha_ult_acc') { ?>
                          Fecha ultimo acceso: 
                          <strong><?php echo $item;?></strong>
                          <br>
                  <?php }                  
                  if ($key == 'status_exp') { ?>
                      
                      <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo number_format(($item*100),2);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format(($item*100),2);?>%;">
                          Avance de la evaluación PRE => 
                          <strong><?php echo number_format(($item*100),2) . "%" ;?></strong>                          
                        </div>              
                      </div>
                  <?php }                  
                  if ($key == 'status_test1') { ?>
                      
                      <div class="progress">
                        <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="<?php echo number_format(($item*100),2);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format(($item*100),2);?>%;">
                          Resultado Test1 => 
                          <strong><?php echo number_format(($item*100),2) . "%" ;?></strong>                          
                        </div>              
                      </div>
                  <?php }                  
                  if ($key == 'status_test2') { ?>
                      
                      <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo number_format(($item*100),2);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format(($item*100),2);?>%;">
                          Resultado Test2 => 
                          <strong><?php echo number_format(($item*100),2) . "%" ;?></strong>                          
                        </div>              
                      </div>
                  <?php }                  
                  if ($key == 'status_test3') { ?>
                      
                      <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo number_format(($item*100),2);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format(($item*100),2);?>%;">
                          Resultado Test3 => 
                          <strong><?php echo number_format(($item*100),2) . "%" ;?></strong>                          
                        </div>              
                      </div>
                  <?php }                  
                  if ($key == 'status_test4') { ?>
                      
                      <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo number_format(($item*100),2);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format(($item*100),2);?>%;">
                          Resultado Test4 => 
                          <strong><?php echo number_format(($item*100),2) . "%" ;?></strong>                          
                        </div>              
                      </div>
                  <?php }

                  echo "<br>";

                  
                }?>
                                             
                </div>
              </div>
            </div>
        
        </div>
      </div>
    </div>
