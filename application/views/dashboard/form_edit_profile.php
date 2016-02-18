    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i class="fa fa-user"></i> Perfil
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                        <?php echo form_open('welcome/form_edit_profile'); ?>
                            <div class="panel-heading">
                                <span>
                                <h3 class="panel-title">
                                    <span><button type="submit" class="btn btn-success">Editar</button></span>                                            
                                </h3>
                                </span>
                                
                                
                            </div>
                            <div class="panel-body">

                                    <div class="form-group">
                                        <?php echo form_error('title');?>
                                        <label for="title">Nombre Completo</label>
                                        <input class="form-control" type="input" name="title" value="<?php echo set_value('title') ;?>">
                                        <p class="help-block">Escriba el nombre completo aquí. P.ej. Juan Manuel Pérez Núñez</p>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_error('email');?>
                                        <label for="email">Email</label>
                                        <input class="form-control" type="email" name="email" value="<?php echo set_value('email') ;?>">
                                        <p class="help-block">Escriba su Email. P.ej. miemail@ejemplo.com</p>
                                    </div>                              

                            </div>
                        </form>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                </div>    

                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
