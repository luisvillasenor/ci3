<div class="container-fluid">
  <div class="row">
    <div class="well col-sm-4 col-md-offset-4">
      <form id="LoginForm">
        <div class="form-group">
          <label for="email">Email</label>
          <input typr="text" class="form-control" id="email" name="email" placeholder="Email" onblur="ejecutarAJAX()">
        </div>
        <div id="respuesta"></div>
        <div class="form-group">
          <label for="password">Password</label>
          <input typr="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <a class="btn btn-primary btn-large" href="<?php echo base_url('index.php/home'); ?>">Iniciar</a>
      </form>
    </div>
  </div>
</div>
