
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>bootstrap-3.3.5-dist/js/jquery-latest.js"></script>
    <script src="<?php echo base_url();?>bootstrap-3.3.5-dist/js/jquery-ui-1.10.2.custom.min.js"></script>
    
    <script src="<?php echo base_url();?>bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>bootstrap-3.3.5-dist/js/ie10-viewport-bug-workaround.js"></script>
    <script src="<?php echo base_url();?>bootstrap-3.3.5-dist/js/jquery.bootstrap.wizard.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#rootwizard').bootstrapWizard({'tabClass': 'bwizard-steps'});
});
</script>			

<script>
$(document).ready(function(){
  $(function() {
    $( "#fecha_aplicacion" ).datepicker({ 
      dateFormat: 'yy-mm-dd', 
      showWeek: true, 
      firstDay:1
    });
  });
});      
</script>


  </body>
</html>
