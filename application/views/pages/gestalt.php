    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Crear Expediente <span class="sr-only">(current)</span></a></li>
            
            <li><a href="mispacientes">Mis Pacientes</a></li>
            
          </ul>
        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        
        <form>
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
                              <label for="nombre">Nombre completo</label>
                              <input type="email" class="form-control" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                              <label for="edad">Edad</label>
                              <input type="text" class="form-control" id="edad" placeholder="Edad">
                            </div>
                            
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Masculino
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Femenino
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
                              <label for="nombre">Aplicador</label>
                              <input type="email" class="form-control" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                              <label for="edad">Grupo</label>
                              <input type="text" class="form-control" id="edad" placeholder="Edad">
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
                              <button type="button" class="btn btn-primary btn-lg">Crear y Activar</button>
                              <button type="button" class="btn btn-default btn-lg">Cancelar</button>
                            </p>
                                   
                      </div>
                    </div>
                  </div>

                <ul class="pager wizard">
                  <li class="previous first" style="display:none;"><a href="#">Inicio</a></li>
                  <li class="previous"><a href="#">Previo</a></li>
                  <li class="next last" style="display:none;"><a href="#">Terminar</a></li>
                    <li class="next"><a href="#">Siguiente</a></li>
                </ul>
              </div>  
            </div>
        </form>

        </div>
      </div>
    </div>
