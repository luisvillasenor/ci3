    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank <small>Página en blanco</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Blank
                            </li>
                        </ol>
                    
                    <!-- -->

                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            Titulo
                        </div>
                        <div class="panel-body">
                          <div class="container-fluid">
                            <div class="row-fluid">
                              <div class="col-lg-3">
                                <a class="thumbnail">
                                  <img src="<?php echo base_url(); ?>/dell.jpg" alt="Foto Dell 510">
                                </a>            
                              </div><!-- col-md-3 -->
                              <div class="col-lg-9">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">          
                                  <li role="presentation" class="active"><a href="#gen_cpu" aria-controls="gen_cpu" role="tab" data-toggle="tab">GENERALES</a></li>
                                  <li role="presentation"><a href="#comp_int" aria-controls="comp_int" role="tab" data-toggle="tab">COMPONENTES INTERNOS</a></li>
                                  
                                 
                                </ul><!-- Nav tabs -->
                                <!-- Tab panes -->
                                <div class="well well-sm tab-content">            
                                  <div role="tabpanel" class="tab-pane active" id="gen_cpu">
                                    <span>
                                    <!--
                                    <?php foreach ($cargar_cpu_detalles as $fila) :?>
                                      <p>No. Inventario: <b> <?php echo $fila->num_inventario; ?> </b> 
                                        <p>Marca: <b> <?php echo $fila->marca; ?> </b>  
                                        <p>Modelo: <b> <?php echo $fila->modelo; ?> </b>  
                                        <p>Host Name: <b> <?php echo $fila->hostname; ?> </b> 
                                        <p>No. Serie: <b> <?php echo $fila->num_serie; ?> </b>
                                        <p>Tipo: <b> <?php echo $fila->tipo; ?> </b>
                                        <p>Ubicacion: <b> <?php echo $fila->ubicacion; ?> </b>  
                                        <p>Categoria: <b> <?php echo $fila->categoria; ?> </b>
                                          
                                        <p>Empleado: <b> 
                                          <?php foreach ($cargar_cpu as $fila2) :
                                              if ( $fila->id_empleado == $fila2->id_empleado) { ?>
                                                <td><a href="<?php echo base_url('empleados/detalles');?>/<?php echo $fila->id_empleado; ?>"><?php echo $fila2->nombre_completo; ?></a></td>
                                              <?php } break; ?>                        
                                          <?php endforeach; ?>
                                         </b>    
                                    <?php endforeach; ?>
                                    -->
                                    OK
                                  </span>
                                  </div>
                                  
                                  <div role="tabpanel" class="tab-pane" id="comp_int">
                                    <ul class="nav nav-pills">
                                      <li role="presentation" class="active"><a href="#" onclick='ejecutarPROCESADOR(<?php #echo $id_cpu; ?>)'>Procesador</a></li>
                                      <li role="presentation" class="active"><a href="#" onclick="ejecutarDD(<?php #echo $id_cpu; ?>)">Discos Duros</a></li>
                                      <li role="presentation" class="active"><a href="#" onclick='ejecutarRAM(<?php #echo $id_cpu; ?>)'>Memorias RAM</a></li>
                                      <li role="presentation" class="active"><a href="#" onclick='ejecutarIPCONFIG(<?php #echo $id_cpu; ?>)'>IPCONFIG</a></li>
                                    </ul>
                                    <br>
                                    <div id="resp_comp_int"></div>      
                                  </div>
                                  
                                </div><!-- Tab panes -->
                              </div><!-- col-md-9 -->        
                            </div><!-- row -->
                          </div><!-- container-fluid -->
                        </div><!-- panel-body -->
                    </div>


                    <!-- -->

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->