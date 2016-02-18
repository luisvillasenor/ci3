    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i class="fa fa-edit"></i> Formulario Agregar Paciente
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <strong>Instrucciones:</strong> Llene el siguiente formulario. Todos los campos son requeridos.
                                        
                                </h3>
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

                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                    <button type="reset" class="btn btn-default">Reset</button>

                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                </div>    

                <div class="row">
                    <div class="col-lg-8">

                        
                        

                    </div>

                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
