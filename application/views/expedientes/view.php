
    <div class="container-fluid">
      <div class="row">
        
            <div class="col-sm-3 col-md-2 sidebar">
              <ul class="nav nav-sidebar">
                <li class="active"><a href="<?php echo base_url('index.php/expedientes'); ?>">Mis Expedientes <span class="sr-only">(current)</span></a></li>

              </ul>
            </div>


            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading text-center"><h1>Mi Expedientes</h1></div>
                <div class="panel-body">
                <?php foreach ($expediente_item as $key => $item) {
                  
                  echo $key;
                  echo " => ";
                  echo $item;
                  echo "<br>";
                  
                }?>
                                             
                </div>
              </div>
            </div>
        
        </div>
      </div>
    </div>
