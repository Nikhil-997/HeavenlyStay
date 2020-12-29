<?php session_start();

?>
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Heavenly Stay</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Travelo | Responsive HTML5 Travel Template">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.min.css">
    
    <!-- Current Page Styles -->
    <link rel="stylesheet" type="text/css" href="components/revolution_slider/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/revolution_slider/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/jquery.bxslider/jquery.bxslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/flexslider/flexslider.css" media="screen" />
    
    <!-- Main Style -->
        <!--<link id="main-style" rel="stylesheet" href="css/style.css">-->
	 <link rel="stylesheet" href="css/style1.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="css/updates.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="css/updates.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="css/responsive.css">
   
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->

    <!-- Javascript Page Loader -->

     
   
	 
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs">
                <div class="container">
                    <ul class="quick-menu pull-left">
                        
                        
                    </ul>
                   
                </div>
            </div>
            
            <div class="main-header">
                
                <!--<a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>-->
<div id="loadinvoice">
                <div class="container">
                    <h1 class="navbar">
                        <a href="index.php" title="Heavenly Stay">
                            <!--<img src="images/heavenlystay.png" alt="Heavenly Stay" style="width:100px;height:100px;"/>-->
                        </a>
                    </h1>
					</div>
					<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<!--<div id="get_cat"></div>-->
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a id="book-room-form.php" class="adash">View Room & Book</a></li>  
					<!--<li><a id="view-room.php" class="adash">Book service</a></li>-->
					<!--<li><a id="view-travel-info.php" class="adash">View Travel Info</a></li>
					<li><a id="add-service-cust-form.php" class="adash">Book Event Hall</a></li>
					<li><a id="add-gym-time.php" class="adash">Set Gym Timing</a></li>
					<li><a id="add-swim-time.php" class="adash">Set Swimming Pool Timing</a></li>
					<li><a id="add-spa-appointment.php" class="adash">Spa</a></li>
					<li><a id="add-feedback-form.php" class="adash">Feedback</a></li>
					<!--<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>-->
				<!--</div>
				<!--<div id="get_brand"></div>-->
				
			</div>
			

    <div class="container">
      <div class="bg-light shadow-md rounded">
        <div class="row align-items-center p-4">
          
          
        </div>
        <hr class="m-0">
        <hr class="m-0">
        <div class="p-4">
          <div class="row">
		 
            <div class="col-md-4 col-lg-3">
			 <span class="error error-keyup-2"></span>
			<input type="hidden" name="checkin"  value="<?php echo $_REQUEST['price'];?>">
			<input type="hidden" name="checkin"  value="<?php echo $_REQUEST['fdate'];?>">
					 <input type="hidden" name="checkout"  value="<?php echo $_REQUEST['tdate'];?>">

<?php				 
$now = strtotime($_REQUEST['tdate']); // or your date as well
$your_date = strtotime($_REQUEST['fdate']);
$datediff = $now - $your_date;


$totdays  = round($datediff / (60 * 60 * 24)) +1;
$totamt= $totdays*$_REQUEST['price'];
?>
         <a href="cust-dashboard.php"> Back to dashboard</a>
            </div>
            <h3>Pay Amount : <?php echo $totamt; ?></h3>
                  <div class="row">
                    <div class="col-lg-6 ">
					<input type="radio" name="option" value="Cash"  >Cash |  
					 <input type="radio" name="option" value="Card">Card
					     
					<div class="cardss">
                  <form action="payment-hall-q.php" method="post">
						<input type="hidden"   name="amount1"  value="<?php echo $totamt;?>">
						<input type="hidden"  name="halltype1"  value="<?php echo $_REQUEST['halltype'];?>">   
                        <input type="hidden"  name="acnonac"  value="<?php echo $_REQUEST['acnonac'];?>">      
						<input type="hidden"  name="fdate"  value="<?php echo $_REQUEST['fdate'];?>"> 
						<input type="hidden"  name="tdate"  value="<?php echo $_REQUEST['tdate'];?>"> 
                        <input type="hidden"  name="strength"  value="<?php echo $_REQUEST['strength'];?>">   
						<input type="hidden"  name="food"  value="<?php echo $_REQUEST['food'];?>">   
						<input type="hidden"  name="noofveg"  value="<?php echo $_REQUEST['noofveg'];?>">   
						<input type="hidden"  name="noofnonveg"  value="<?php echo $_REQUEST['noofnonveg'];?>">
						 
						 
                        <div class="form-group">
						 <input type="text" class="form-control" data-bv-field="cardnumber" name="cardnumber" id="cardnumber" size="16" maxlength="16"   placeholder="Card Number" title="Characters Not Allowed"  pattern="[0-9]{16,16}" required >
                          <!--<input type="number" class="form-control" size="12" maxlength="12"  name="cardnumber" placeholder="Card Number"  required>-->
                          <!--<input type="hidden" class="form-control" size="16" maxlength="16"  name="cardnumber" placeholder="Card Number"  required>-->
                        </div>
                        <div class="form-row">
                          <div class="col-lg-4">
                            <div class="form-group">
							<input type="month" name="month" min="<?php echo date("Y-m"); ?>" > 
                              
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <input type="text" class="form-control" data-bv-field="cvvnumber" name="cvvnumber" id="cvvNumber" size="3" maxlength="3"  placeholder="CVV Number"  pattern="[0-9]{3,3}"" required >
                            </div>
                          </div>
                        </div>
						
                        <div class="form-group">
						<!--<input type="text" class="form-control" data-bv-field="cardnumber" name="cardnumber" id="cardnumber" size="12" maxlength="12" 
						placeholder="Card Number"  pattern="[0-9]{1,}"" required >-->
                          <input type="text" class="form-control form-control-name keyup-characters" data-bv-field="cardholdername" name="cardholdername" id="cardHolderName" pattern="[a-zA-Z]{1,}" title="Number Not Allowed"  placeholder="Card Holder Name"  size="30" maxlength="30"required>
                        </div>
						
                        
                        <button class="btn btn-primary" type="submit">Pay</button>
                     
					  
                    </div>
					</div>
					</div>
               </form>
                  </div>
				   <form action="payment-hall-q.php" method="post"> 
					<input type="hidden"   name="amount"   value="<?php echo $totamt;?>">				   
				   
						<input type="hidden"  name="halltype1"  value="<?php echo $_REQUEST['halltype'];?>">   
                        <input type="hidden"  name="acnonac"  value="<?php echo $_REQUEST['acnonac'];?>">      
						<input type="hidden"  name="fdate"  value="<?php echo $_REQUEST['fdate'];?>"> 
						<input type="hidden"  name="tdate"  value="<?php echo $_REQUEST['tdate'];?>"> 
                        <input type="hidden"  name="strength"  value="<?php echo $_REQUEST['strength'];?>">   
						<input type="hidden"  name="food"  value="<?php echo $_REQUEST['food'];?>">   
						<input type="hidden"  name="noofveg"  value="<?php echo $_REQUEST['noofveg'];?>">   
						<input type="hidden"  name="noofnonveg"  value="<?php echo $_REQUEST['noofnonveg'];?>">
					   
					    <input type="hidden" name="option" id="optionn" >
				   <button class="btn btn-primary cassh" type="submit">Cash Payment</button>
				   </form>
               
          </div>
        </div>
      </div>
    </div>
  </div>
				
				<script src="assets/jquery.validate.min.js">
			</script>
		<script>
		$('.adash').click(function(event)
		{
		event.preventDefault();
		$('#loadmenu').load($(this).attr('id'));
		});
		 $('.cassh').hide();
       $('.cardss').hide();
		$("input[name=option]:radio").click(function() {
    if($(this).attr("value")=="Cash") {
       $('.cassh').show();
       $('.cardss').hide();
	   $('#optionn').val('Cash');
    }
    if($(this).attr("value")=="Card") {
        $('.cassh').hide();
       $('.cardss').show();
    }
});
		
		</script> 
		
		
			<script>
				$("#pay").on('submit',(function(e)
				{
					e.preventDefault();
					//alert("hi");
				/* 	$("#product").validate({
						rules:{
							product_name:
							{
								required:true,
								minlength:2
							},
							image:
							{
								required:true
							}
						}
					});
					if($("#product").valid())
					{ */
						$(".proccessing").show();
						$.ajax({
							url:'payment-hall-q.php',
							type:'post',
							data:new FormData(this),
							 contentType: false,
                             processData: false,
							success:function(data)
							{
								alert("Payment Successfull");
								window.location.assign(data);
								$('#pay')[0].reset();
							}
						});
				//	} 
				}));
				</script>		
		   
		   
		
	</div>

                    
                
                
               
            </div>
            </div>
            
        </header>
	<!--<div class="col-md-9">
				<div id="loadmenu">
				</div>
				</div>
		<script>
		$('.adash').click(function(event)
		{
		event.preventDefault();
		$('#loadmenu').load($(this).attr('id'));
		});
		</script> 
        
            
        
        
        <footer id="footer">
            <div class="footer-wrapper">
                <!-- <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h2>Discover</h2>
                            <ul class="discover triangle hover row">
                                <li class="col-xs-6"><a href="#">Safety</a></li>
                                <li class="col-xs-6"><a href="#">About</a></li>
                                <li class="col-xs-6"><a href="#">Travelo Picks</a></li>
                                <li class="col-xs-6"><a href="#">Latest Jobs</a></li>
                                <li class="active col-xs-6"><a href="#">Mobile</a></li>
                                <li class="col-xs-6"><a href="#">Press Releases</a></li>
                                <li class="col-xs-6"><a href="#">Why Host</a></li>
                                <li class="col-xs-6"><a href="#">Blog Posts</a></li>
                                <li class="col-xs-6"><a href="#">Social Connect</a></li>
                                <li class="col-xs-6"><a href="#">Help Topics</a></li>
                                <li class="col-xs-6"><a href="#">Site Map</a></li>
                                <li class="col-xs-6"><a href="#">Policies</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>Travel News</h2>
                            <ul class="travel-news">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="http://placehold.it/63x63" alt="" width="63" height="63" />
                                        </a>
                                    </div>
                                    <div class="description">
                                        <h5 class="s-title"><a href="#">Amazing Places</a></h5>
                                        <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                        <span class="date">25 Sep, 2013</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="http://placehold.it/63x63" alt="" width="63" height="63" />
                                        </a>
                                    </div>
                                    <div class="description">
                                        <h5 class="s-title"><a href="#">Travel Insurance</a></h5>
                                        <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                        <span class="date">24 Sep, 2013</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>Mailing List</h2>
                            <p>Sign up for our mailing list to get latest updates and offers.</p>
                            <br />
                            <div class="icon-check">
                                <input type="text" class="input-text full-width" placeholder="your email" />
                            </div>
                            <br />
                            <span>We respect your privacy</span>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>About Travelo</h2>
                            <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque.</p>
                            <br />
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                <br />
                                <a href="#" class="contact-email">help@travelo.com</a>
                            </address>
                            <ul class="social-icons clearfix">
                                <li class="twitter"><a title="twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                <li class="googleplus"><a title="googleplus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                <li class="facebook"><a title="facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                <li class="linkedin"><a title="linkedin" href="#" data-toggle="tooltip"><i class="soap-icon-linkedin"></i></a></li>
                                <li class="vimeo"><a title="vimeo" href="#" data-toggle="tooltip"><i class="soap-icon-vimeo"></i></a></li>
                                <li class="dribble"><a title="dribble" href="#" data-toggle="tooltip"><i class="soap-icon-dribble"></i></a></li>
                                <li class="flickr"><a title="flickr" href="#" data-toggle="tooltip"><i class="soap-icon-flickr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom gray-area">
                <div class="container">
                    <div class="logo pull-left">
                        <a href="index.php" title="Heavenly Stay">
                            <img src="images/logo.jpg" alt="Heavenly Stay"  style="width:50px;height:50px;"/>
                        </a>
                    </div>
                    <div class="pull-right">
                        <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
                    </div>
                    <div class="copyright pull-right">
                        <p><a href="#">admin panel</a> | &copy; 2019 Heavenly Stay</p>
                    </div>
                </div> -->
            </div>
        </footer>
    </div>


    <!-- Javascript -->
    
  
    
    

    <!-- load page Javascript -->
    <!-- <script type="text/javascript" src="js/theme-scripts.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    
    <script type="text/javascript">
        tjq(document).ready(function() {
            tjq('.revolution-slider').revolution(
            {
                dottedOverlay:"none",
                delay:8000,
                startwidth:1170,
                startheight:646,
                onHoverStop:"on",
                hideThumbs:10,
                fullWidth:"on",
                forceFullWidth:"on",
                navigationType:"none",
                shadow:0,
                spinner:"spinner4",
                hideTimerBar:"on",
            });
        });
    </script> -->
	

	<!-- Twitter Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <!-- load revolution slider scripts -->
    <script type="text/javascript" src="components/revolution_slider/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- load BXSlider scripts -->
    <script type="text/javascript" src="components/jquery.bxslider/jquery.bxslider.min.js"></script>

    <!-- Flex Slider -->
    <script type="text/javascript" src="components/flexslider/jquery.flexslider.js"></script>

    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>

    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>
</body>
</html>

