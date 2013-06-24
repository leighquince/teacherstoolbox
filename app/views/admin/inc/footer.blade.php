		<!-- Matter ends -->
        </div>
    </div>
   <!-- Mainbar ends -->	    	
   <div class="clearfix"></div>
   
</div>
<!-- Content ends -->


<!-- Footer starts -->
<footer>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; {{ date('Y')}} | <a href="#">Teachers Tool Box</a> </p>
      </div>
    </div>
  </div>
</footer> 	

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 


<!-- JS -->
{{ HTML::script('js/jquery.js') }} <!-- jQuery -->
{{ HTML::script('js/bootstrap.js') }} <!-- Bootstrap -->
{{ HTML::script('js/jquery-ui-1.9.2.custom.min.js') }} <!-- jQuery UI -->
{{ HTML::script('js/fullcalendar.min.js') }} <!-- Full Google Calendar - Calendar -->
{{ HTML::script('js/jquery.rateit.min.js') }} <!-- RateIt - Star rating -->
{{ HTML::script('js/jquery.prettyPhoto.js') }} <!-- prettyPhoto -->

<!-- jQuery Flot -->
{{ HTML::script('js/excanvas.min.js') }}
{{ HTML::script('js/jquery.flot.js') }}
{{ HTML::script('js/jquery.flot.resize.js') }}
{{ HTML::script('js/jquery.flot.pie.js') }}
{{ HTML::script('js/jquery.flot.stack.js') }}

<!-- jQuery Notification - Noty -->
{{ HTML::script('js/jquery.noty.js') }} <!-- jQuery Notify -->
{{ HTML::script('js/themes/default.js') }} <!-- jQuery Notify -->
{{ HTML::script('js/layouts/bottom.js') }} <!-- jQuery Notify -->
{{ HTML::script('js/layouts/topRight.js') }} <!-- jQuery Notify -->
{{ HTML::script('js/layouts/top.js') }} <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

{{ HTML::script('js/sparklines.js') }} <!-- Sparklines -->
{{ HTML::script('js/jquery.cleditor.min.js') }} <!-- CLEditor -->
{{ HTML::script('js/bootstrap-datetimepicker.min.js') }} <!-- Date picker -->
{{ HTML::script('js/jquery.uniform.min.js') }} <!-- jQuery Uniform -->
{{ HTML::script('js/jquery.toggle.buttons.js') }} <!-- Bootstrap Toggle -->
{{ HTML::script('js/filter.js') }} <!-- Filter for support page -->
{{ HTML::script('js/custom.js') }} <!-- Custom codes -->
{{ HTML::script('js/charts.js') }} <!-- Custom codes -->
{{ HTML::script('js/jquery.zclip.min.js') }} <!-- Custom codes -->

@if(isset($script))
 @foreach ($script as $script)
    	{{ $script }}
 @endforeach
@endif

<?php 

	$warnings = Session::get('warnings');
	$successes = Session::get('successes');
	$report = Session::get('copy-script');
?>



 <script type="text/javascript">
 @if(isset($report))
 	{{ $report }}
 @endif
 
 
 $(document).ready(function() {
	 
	 
	 @if(isset($warnings))
	 
	 	
	 		@foreach($warnings as $warning )
		 		setTimeout(function() {noty({text: '<strong>{{ $warning }}</strong>',layout:'topRight',type:'warning',timeout:15000});}, 01);
		 	@endforeach
	 	
	 @endif
	 
	  @if(isset($successes))
	 
	 	
	 		@foreach($successes as $success )
		 		setTimeout(function() {noty({text: '<strong>{{ $success }}</strong>',layout:'topRight',type:'success',timeout:15000});}, 01);
		 	@endforeach
	 	
	 @endif
	 
	 });

<?php
	/*
  $('.noty-success').click(function (e) {
      e.preventDefault();
      noty({text: 'Some notifications goes here...',layout:'top',type:'success',timeout:2000});
  });

  $('.noty-error').click(function (e) {
      e.preventDefault();
      noty({text: 'Some notifications goes here...',layout:'topRight',type:'error',timeout:2000});
  });

  $('.noty-warning').click(function (e) {
      e.preventDefault();
      noty({text: 'Some notifications goes here...',layout:'bottom',type:'warning',timeout:2000});
  });

  $('.noty-information').click(function (e) {
      e.preventDefault();
      noty({text: 'Some notifications goes here...',layout:'topRight',type:'information',timeout:2000});
  });
  
  
  
  $(document).ready(function(){

  setTimeout(function() {noty({text: '<strong>Howdy! Hope you are doing good...</strong>',layout:'topRight',type:'information',timeout:15000});}, 7000);

  setTimeout(function() {noty({text: 'This is an all in one theme which includes Front End, Admin & E-Commerce. Dont miss it. Grab it now',layout:'topRight',type:'alert',timeout:13000});}, 9000);

});

});
  
  */
  
  
  
  
  ?>



</script>
	
	
</body>
</html>