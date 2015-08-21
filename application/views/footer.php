<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>


    <script type="text/javascript">
			$('[data-toggle="tabajax"]').click(function(e) {
			    var $this = $(this),
			        loadurl = $this.attr('href'),
			        targ = $this.attr('data-target');

			    $.get(loadurl, function(data) {
			        $(targ).html(data);
			    });

			    $this.tab('show');
			    return false;
			});
			</script>


			
  </body>
</html>
