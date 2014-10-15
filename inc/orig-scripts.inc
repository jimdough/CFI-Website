    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/jquery.validate.js"></script>
   
   <!-- Tab Panels -->

     <script type="text/javascript">
		$('#courseSpecs a:first').tab('show')
	</script>
    
    <!-- Carousel -->
   
     <script type="text/javascript">
		   $(function(){
		       $('.carousel').carousel({
		         interval: 4000
		       });
		   });
	</script>
	
    <!-- / Carousel -->


    <!-- Short Form-->
    <script>
	$(function() {
		$( "#tourDate" ).datepicker({
			inline: true,
			beforeShowDay: $.datepicker.noWeekends
		});
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		)
	});
	</script>
    <!-- / Short Form-->
	
	
	<!-- Begin Form Validation Include -->

  <script>
  $(document).ready(function(){
    $("#leadForm").validate({
		  rules: {			
			Phone: {
  			     required: true,
				 minlength: 10,
  			},
  			
  			FirstName: {
  			     required: true,
  			},
  			
  			EmailAddress: {
  			     required: true,
  			     email: true
  			},
  			
  			LastName: {
  			     required: true,
  			}
  				 },
  			highlight: function(element) {
	  		  $(element).closest('.control-group').removeClass('has-success').addClass('has-error');
	  		  },
	  		  
	  		  success: function(element) {
		  		  element
		  	  $(element).closest('.control-group').removeClass('has-error').addClass('has-success');
		  		  }				 		 
		  		  
		  		  });
		 });
  </script>
  
	<!-- Start Google Analytics -->
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-22884840-4']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	<!-- End Google Analytics -->
	
	<!-- Google Code for CFI remarketing-->
	<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 1072628500;
	var google_conversion_label = "hvanCPq2sAMQlIa8_wM";
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1072628500/?value=0&amp;label=hvanCPq2sAMQlIa8_wM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
	<!-- End Remarketing Code -->