
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
    $( "#fecha_aplicacion_test2" ).datepicker({ 
      dateFormat: 'yy-mm-dd', 
      showWeek: true, 
      firstDay:1
    });

    $( "#fecha_aplicacion_test3" ).datepicker({ 
      dateFormat: 'yy-mm-dd', 
      showWeek: true, 
      firstDay:1
    });
    $( "#fecha_aplicacion_test4" ).datepicker({ 
      dateFormat: 'yy-mm-dd', 
      showWeek: true, 
      firstDay:1
    });

  });
});      
</script>

<script type="text/javascript">
var myRequest = getXMLHTTPRequest();
function getXMLHTTPRequest()
{
  var request = false;
  if (window.XMLHttpRequest) 
  {
    request = new XMLHttpRequest();
  } else {
    if (window.ActiveXObject) 
    {
      try 
      {
        request = new ActiveXObject("Msml2.XMLHTTP");
      }
      catch(err1)
      {
        try
        {
          request = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch(err2)
        {
          request = false;
        }
      }
    }
  }
  return request;
}

function ejecutarAJAX() {
  var email = document.getElementById("LoginForm").elements.namedItem("email").value;
  var url = "http://localhost/ci3/index.php/welcome/validar/" + email;
  myRequest.open("GET", url, true);
  myRequest.onreadystatechange = respuestaAJAX;
  myRequest.send(null);
}

function respuestaAJAX() {
  if (myRequest.readyState == 4) {
    if (myRequest.status == 200) {
      document.getElementById('respuesta').innerHTML = myRequest.responseText;
    } else {
      document.getElementById('respuesta').innerHTML = myRequest.status;
    }
  } else {
    document.getElementById('respuesta').innerHTML = myRequest.responseText;
  }
}


</script>


</body>
</html>
