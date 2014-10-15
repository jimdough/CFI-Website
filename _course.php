<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title></title>

    <?php include("inc/head.php"); ?>

    </head>
  	<body>

    <div class="row" id="panel1">
    <div class="container">
    <div class="col-md-6 pull-left" id="logoWrap">
    	<a href="index.php"><img class="img-responsive" id="logo" src="images/logo.png" border="0"></a>
    </div>
   
   <div class="col-md-6 pull-right hidden-sm" id="topPhone">
    	<h2>1-888-831-8303</h2>
    	<?php include("inc/ctc.inc"); ?>    </div>
    </div>
    </div>
    
		<?php include("inc/menu.inc"); ?>


<div class="row" id="interior">
    <div class="container">
  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"> <!--Left-->
  
<div class="jumbotron visible-lg" id="courseXX">
  <div class="container">
    <h1><!-- INSERT COURSE NAME--></h1>
    <p class="text-primary">Insert lead line gere</p>
    <p><a class="btn btn-warning btn-lg"><i class="icon-flag icon-large"></i> Apply Now</a></p>
  </div>
</div>

<h2><!-- INSERT COURSE NAME--></h2>
<p class="text-muted class-start">Next Class Starts <span class="label label-info"><?php echo $mab ?></span></p>

<!-- INSERT FIRST CONTENT-->

<p class="text-center hidden-lg"><a class="btn btn-warning btn-lg"><i class="icon-flag icon-large"></i> Apply Now</a></p>


<ul class="nav nav-tabs text-center" id="courseSpecs">
   <li><a href="#eae" data-toggle="tab">Employment & Earnings</a></li>
   <li><a href="#api" data-toggle="tab">More Info</a></li>
   <li><a href="#acc" data-toggle="tab">Accreditation</a></li>
   <li class="visible-md visible-lg"><a href="#pre" data-toggle="tab">Prerequisites</a></li>
</ul>

 <div id="courseSpecContent" class="tab-content well">
        <div class="tab-pane fade in active" id="eae">
    		<!-- INSERT TAB CONTENT-->     
         </div>
        <div class="tab-pane fade" id="api">
          <!-- INSERT TAB CONTENT-->  
        </div>
        <div class="tab-pane fade" id="acc">
		   <!-- INSERT TAB CONTENT-->  
        </div>
        <div class="tab-pane fade" id="pre">
		<!-- INSERT TAB CONTENT-->  
        </div>

      </div> <!-- / tabs-->
      
      </div> <!-- /column -->

<!--Right-->

  <?php include("inc/col-1.php"); ?>
  
<!-- /column -->
  
    </div> <!-- /.container -->
</div> <!-- End Tentpoles --><!-- / row-->
  
  <div class="row shadow" id="footer">
  	<div class="container">
    <?php include("inc/footer.inc"); ?>
	</div><!-- /.container-->
   </div><!-- / row-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

            <?php include("inc/scripts.inc"); ?>
  </body>
</html>
