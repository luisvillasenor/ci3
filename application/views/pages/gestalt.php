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
            <li class="active"><a href="<?php echo base_url('index.php/gestalt'); ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"> Paciente Nuevo</a></li>
            <li>
                <a href="<?php echo base_url('index.php/expedientes'); ?>"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"> Pacientes</a>
            </li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true"> Manual de Atencion Psicologica</a>
            </li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <div class="page-header">
          <h1>Crear Paciente</h1>
        </div>

          <ol class="breadcrumb">
            <li><a href="<?php echo base_url('index.php/home'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('index.php/gestalt'); ?>">Crear Paciente</a></li>
          </ol>

        
        <form method="post" action="<?php echo base_url('index.php/expedientes/create');?>">
        <div id="rootwizard">
              <ul>
                <li><a href="#tab1" data-toggle="tab"><span class="label">1</span> Datos del Paciente</a></li>
                <li><a href="#tab2" data-toggle="tab"><span class="label">2</span> Datos del Aplicador</a></li>
                <li><a href="#tab3" data-toggle="tab"><span class="label">3</span> Generar Expediente</a></li>
              </ul>
              <div class="tab-content">
                  <div class="tab-pane" id="tab1">
                  <p>
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading"></div>
                      <div class="panel-body">
                          <div class="page-header">
                            <h1>Carga de Datos del Paciente <small>Datos generales</small></h1>
                          </div>
                          
                            <div class="form-group">
                              <label for="nombre_completo">Nombre completo</label>
                              <input type="text" class="form-control" name="nombre_completo" id="nombre_completo" placeholder="P.ej. Juan Manuel Pérez López">
                            </div>
                            <div class="form-group">
                              <label for="edad">Edad</label>
                              <input type="text" class="form-control" name="edad" id="edad" placeholder="P.ej. 23">
                            </div>
                            
                            <div class="radio">
                              <label>
                                <input name="sexo" id="sexo" type="radio" value="m"> Masculino
                              </label>
                              <label>
                                <input name="sexo" id="sexo" type="radio" value="f"> Femenino
                              </label>
                            </div>
                            <div class="form-group">
                              <label for="dias_abs">Días de Abstinencia</label>
                              <input type="text" class="form-control" name="dias_abs" id="dias_abs" placeholder="P.ej. 5">
                            </div>
                            <div class="form-group">
                              <label for="droga">Groga de Impacto</label>
                              <input type="text" class="form-control" name="droga" id="droga" placeholder="P.ej. Alcohol">
                            </div>
                            <div class="form-group">
                              <label for="t_consumo">Años de consumo</label>
                              <input type="text" class="form-control" name="t_consumo" id="t_consumo" placeholder="P.ej. 2">
                            </div>
                            <div class="form-group">
                              <label for="droga_ini">Groga de inicio</label>
                              <input type="text" class="form-control" name="droga_ini" id="droga_ini" placeholder="P.ej. Tabaco">
                            </div>
                            <div class="form-group">
                              <label for="edad1con">Edad de primer consumo</label>
                              <input type="text" class="form-control" name="edad1con" id="edad1con" placeholder="P.ej. 14">
                            </div>
                            <div class="form-group">
                              <label for="edo_civ">Estado civil</label>
                              <input type="text" class="form-control" name="edo_civ" id="edo_civ" placeholder="P.ej. Casado">
                            </div>
                            <div class="form-group">
                              <label for="hijos">Número de hijos</label>
                              <input type="text" class="form-control" name="hijos" id="hijos" placeholder="P.ej. 3">
                            </div>
                            <div class="form-group">
                              <label for="escolaridad">Escolaridad</label>
                              <input type="text" class="form-control" name="escolaridad" id="ecolaridad" placeholder="P.ej. Secundaria">
                            </div>
                            <label>Trabajo ...</label>
                            <div class="radio">
                              <label>
                                <input name="trabajo" id="trabajo" type="radio" value="e"> Estable
                              </label>
                              <label>
                                <input name="trabajo" id="trabajo" type="radio" value="t"> Temporal
                              </label>
                              <label>
                                <input name="trabajo" id="trabajo" type="radio" value="d"> Desempleado
                              </label>
                            </div>
                            <label>Creciste en un ...</label>
                            <div class="radio">
                              <label>
                                <input name="creciste_en" id="creciste_en" type="radio" value="m"> Matrimonio
                              </label>
                              <label>
                                <input name="creciste_en" id="creciste_en" type="radio" value="u"> Unión Libre
                              </label>
                              <label>
                                <input name="creciste_en" id="creciste_en" type="radio" value="d"> Divorcio-Separación
                              </label>
                              <label>
                                <input name="creciste_en" id="creciste_en" type="radio" value="s"> Madre Soltera
                              </label>
                            </div>


                          
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab2">
                    <p>
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading"></div>
                      <div class="panel-body">
                          <div class="page-header">
                            <h1>Carga de Datos del Aplicador y Grupo <small>Datos generales</small></h1>
                          </div>
                          
                            <div class="form-group">
                              <label for="aplicador">Lugar de Aplicación</label>
                              <input type="text" class="form-control" name="aplicador" id="Aplicador" placeholder="Aplicador">
                            </div>
                            <div class="form-group">
                              <label for="grupo">Grupo</label>
                              <input type="text" class="form-control" name="grupo" id="grupo" placeholder="Grupo">
                            </div>
                                   
                      </div>
                    </div>
                  </div>
                <div class="tab-pane" id="tab3">
                  <p>
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading"></div>
                      <div class="panel-body">
                          <div class="page-header">
                            <h1>Crear Expediente y Activarlo <small>Datos generales</small></h1>
                          </div>
                          
                            <p>
                              <button type="submit" class="btn btn-primary btn-lg">Crear y Activar</button>
                              <button type="reset" class="btn btn-default btn-lg">Cancelar</button>
                            </p>
                                   
                      </div>
                    </div>
                </div>
              </div>  
            </div>
        </form>
        </div>
      </div>
    </div>
