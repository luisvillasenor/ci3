    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i class="fa fa-user"></i> Luis Gabriel Villaseñor Alarcón
                        </h1>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

               
                <div class="row">
                    <div class="col-lg-12">

                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span>
                                    <h3 class="panel-title">
                                        Menu de Operaciones
                                    </h3>
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <ul class="nav nav-pill">
                                        <li><a class="btn btn-info" href="#">Op1</a></li>
                                        <li><a class="btn btn-info" href="#">Op2</a></li>
                                        <li><a class="btn btn-info" href="#">Op3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-sm-6 -->
                        <div class="col-lg-9">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        Settings
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-sm-6 -->
                    </div>
                    <!-- /.col-sm-12 -->
                
                <div class="row">
                    <div class="col-lg-12">


                            <div class="col-lg-4">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Donut Chart Example</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div id="morris-donut-chart"></div>
                                        <div class="text-right">
                                            <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Example</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div id="morris-bar-chart"></div>
                                        <div class="text-right">
                                            <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span>
                                    <h3 class="panel-title">
                                        Editar Datos
                                    </h3>
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <?php echo form_open('welcome/form_new_paciente'); ?>
                                        <div class="form-group">
                                            <?php echo form_error('title');?>
                                            <label for="Title">Nombre Completo</label>
                                            <input class="form-control" type="input" name="title" value="<?php echo set_value('title') ;?>">
                                            <p class="help-block">Escriba el nombre completo aquí. P.ej. Juan Manuel Pérez Núñez</p>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_error('edad');?>
                                            <label for="Title">Edad</label>
                                            <input class="form-control" type="input" name="edad" value="<?php echo set_value('edad') ;?>">
                                            <p class="help-block">Escriba la Edad. P.ej. 34</p>
                                        </div>
                                        <span><button type="submit" class="btn btn-primary">Actualizar</button></span>
                                        <span><button type="reset" class="btn btn-default">Reset</button></span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-sm-6 -->
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        Settings
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <h2>Tabla de Tests</h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Test</th>
                                                    <th>Tipo</th>
                                                    <th>Cantidad</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Test1</td>
                                                    <td>Gestalt</td>
                                                    <td>1</td>
                                                    <td>Completada</td>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" checked="checked" readonly></input></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Test2</td>
                                                    <td>Gestalt</td>
                                                    <td>1</td>
                                                    <td>Completada</td>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" checked="checked" readonly></input></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Test3</a></td>
                                                    <td>Gestalt</td>
                                                    <td>1</td>
                                                    <td>Completada</td>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox"></input></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">S1 A1 Presentación</a></td>
                                                    <td>Sesion 1 Presentación. Motivo de consulta</td>
                                                    <td>1</td>
                                                    <td>Pendiente</td>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox"></input></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">S1 H1 Paciente</a></td>
                                                    <td>Sesion 1 Presentación. Motivo de consulta</td>
                                                    <td>1</td>
                                                    <td>Pendiente</td>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox"></input></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">S1 H2 C20 Cad 20</a></td>
                                                    <td>Sesion 1 Presentación. Motivo de consulta</td>
                                                    <td>1</td>
                                                    <td>Pendiente</td>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox"></input></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <span><button type="submit" class="btn btn-primary">Actualizar</button></span>
                                        <span><button type="reset" class="btn btn-default">Reset</button></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-sm-6 -->
                    </div>
                    <!-- /.col-sm-12 -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
