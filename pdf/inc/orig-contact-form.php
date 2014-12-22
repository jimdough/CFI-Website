<!-- End Long Form Validation Include -->


<div class="panel panel-primary" id="contactForm">
  <div class="panel-heading text-center">
    <h3 class="panel-title">Start Your New Career in 9 months!</h3>
  </div>
       <!-- Start Form -->
        <form action="/common/form/leadform.php" method="post" name="leadForm" id="leadForm" class="form-horizontal">
                
		   <input type="hidden" name="LeadType" value="CFI"/>
		  <input type="hidden" name="SuccessPage" value="http://www.cfi.edu/inc/confirmation.php"/>
		   <input type="hidden" name="ErrorPage" value="http://www.cfi.edu/inc/error.php"/>
 
		   	<div class="control-group">
		   	  <label for="FirstName" class="control-label">First Name</label>
		   	  <div class="controls">
		   	    <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="First Name">
		   	  </div>
		   	</div>
		   	
		   	  <div class="control-group">
		   	  <label for="LastName" class="control-label">Last Name</label>
		   	  <div class="controls">
		   	    <input type="text" class="form-control"  name="LastName" id="LastName" placeholder="Last Name">
		   	  </div>
		   	</div>
		   	
		   	  <div class="control-group">
		   	  <label for="EmailAddress" class="control-label">Email</label>
		   	  <div class="controls">
		   	    <input type="text" class="form-control" name="EmailAddress" id="EmailAddress" placeholder="Email">
		   	  </div>
		   	</div>
		   	
		   	<div class="control-group">
		   	  <label for="Phone" class="control-label">Phone</label>
		   	  <div class="controls">
		   	    <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Phone">
		   	  </div>
		   	</div>
		   	
		   	    <div class="control-group">
		   	  <label for="tourDate" class="control-label">Tour Date</label>
		   	  <div class="controls">
		   	    <input class="form-control" type="text" name="tourDate" id="tourDate" placeholder="Tour Date">
		   	  </div>
		   	</div>
		   	
		   	  <div class="control-group">
		   	  <label for="tourTime" class="control-label">Tour Time</label>
		   	  <div class="controls">
		   	    <select class="form-control" name="tourTime" id="tourTime">
		   	   	        <option value="">Please select preferred</option>
		   	   			<option value="10:00">10am</option>
		   	   			<option value="11:00">11am</option>
		   	   			<option value="12:00">12pm</option>
		   	   			<option value="13:00">1pm</option>
		   	   			<option value="14:00">2pm</option>
		   	   			<option value="15:00">3pm</option>
		   	   			<option value="16:00">4pm</option>
		   	   			<option value="17:00">5pm</option>
		   	   	    </select>
		   	  </div>
		   	  </div>
		   	  <br>
		   	   <div class="control-group">
		   	  <div class="controls">
		   	  <button class="btn btn-large btn-block btn-warning" type="submit"><i class="icon-flag icon-large"></i> Get Started Now</button>
		   	  </div></div>

			  </form>
        </div> <!-- End form wrap -->