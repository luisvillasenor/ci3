    <div class="container-fluid">
      <div class="row">        
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="mispacientes">Mis Pacientes <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <ol class="breadcrumb">
          <li><a href="einicial">Paciente <?php echo $id_paciente; ?></a></li>
          <li class="active">Evaluacion Inicial</li>
        </ol>
        
        
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading text-center">Evaluación Inicial</div>
                      <div class="panel-body">

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
        <div class="panel panel-default">
          <div class="panel-heading">
            <nav class="navbar">
              <div class="container"> 
                <input type="hidden" name="id_paciente" id="id_paciente" value="<?php echo $id_paciente; ?>">
                <input type="hidden" name="status_test1" id="status_test1" value="1">
            
                <input class="btn btn-success navbar-btn" type="submit" value="Guardar">                  
            
                <a type="button" class="btn btn-default navbar-btn" href="valorestest1/<?php echo $id_paciente; ?>">Ver Valores Paciente <?php echo $id_paciente; ?></a>
                <button id="btn_resultados" type="button" class="btn btn-default navbar-btn">Ver Resultados</button>
             

                
              </div>
            </nav>
          </div>
            <div class="panel-body">
            <div id="ver_valores"></div>
            <div id="ver_resultados"></div>
            <strong>Instrucciones</strong>:
            <p>Señala la opción que este más acorde a tu sentir.</p>
            
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
                      <div class="form-group" data-toggle="buttons">
                    <?php foreach ($get_resp_test1 as $get_resp_test1_item) : ?>
                        <label class="btn btn-default radio-inline">
                          <input type="radio" autocomplete="off" name="resp_test1_<?php echo $get_preg_test1_item['id'];?>" id="resp_test1"  required><?php echo $get_resp_test1_item['valor'];?>
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


    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>


                      </div>
                    </div>
                  </div>
        
        </div>
      </div>
    </div>
