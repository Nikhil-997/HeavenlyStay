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
            
            
                
                <!--<a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>-->
<div id="loadinvoice">
                <div class="container">
                    <h1 class="navbar">
                        <a href="index.php" title="Heavenly Stay">
                            <img src="images/heavenlystay.png" alt="Heavenly Stay" style="width:100px;height:100px;"/>
                        </a>
                    </h1>
					</div>
					<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				
			</div>
			<div class="col-md-9">
				<div id="content">
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
			
			<input type="hidden" name="checkin"  value="<?php echo $_REQUEST['checkin'];?>">
					 <input type="hidden" name="checkout"  value="<?php echo $_REQUEST['checkout'];?>">

<?php				 
$now = strtotime($_GET['checkout']); // or your date as well
$your_date = strtotime($_GET['checkin']);
$datediff = $now - $your_date;


$totdays  = round($datediff / (60 * 60 * 24)) +1;
$totamt= $totdays*$_GET['price'];
?>
         <a href="cust-dashboard.php"> Back to dashboard</a>
            </div>
            <h3>Pay Amount : <?php echo $totamt;?></h3>
                  <div class="row">
                    <div class="col-lg-6 ">
					<input type="radio" name="option" value="Cash"  >Cash |  
					 <input type="radio" name="option" value="Card">Card
					     
					<div class="cardss">
                  <form action="payment-q.php" method="post">
					 
					 
                      <input type="hidden"   name="amount1"  value="<?php echo $totamt;?>">
					   
					   <input type="hidden" name="roomid"  value="<?php echo $_GET['roomid'];?>">
                 <input type="hidden"  name="roomtype1"  value="<?php echo $_GET['roomtype'];?>">   
						<input type="hidden" name="option" id="option1" >						
                               
							 
                        <div class="form-group">
						 <input type="text" class="form-control" data-bv-field="cardnumber" name="cardnumber" id="cardnumber" size="16" maxlength="16"   placeholder="Card Number" title="Characters Not Allowed"  pattern="[0-9]{16,16}" required >
                          <!--<input type="number" class="form-control" size="12" maxlength="12"  name="cardnumber" placeholder="Card Number"  required>-->
                        </div>
                        <div class="form-row">
                          <div class="col-lg-4">
                            <div class="form-group">
							
							<input type="month" name="month" min="<?php echo date("Y-m"); ?>"required > 
							
                            
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <input type="text" class="form-control" data-bv-field="cvvnumber" name="cvvnumber" id="cvvNumber" size="3" maxlength="3"  placeholder="CVV Number" title="Characters Not Allowed"  pattern="[0-9]{3,3}" required >
                            </div>
                          </div>
                        </div>
						
                        <div class="form-group">
                          <input type="text" class="form-control form-control-name keyup-characters" data-bv-field="cardholdername" name="cardholdername" id="cardHolderName" pattern="[a-zA-Z]{1,}" title="Number Not Allowed"placeholder="Card Holder Name"  size="30" maxlength="30"required>
                        </div>
						 <input type="hidden" name="checkin"  value="<?php echo $_GET['checkin'];?>">
						  <input type="hidden" name="checkout"  value="<?php echo $_GET['checkout'];?>">
						   <input type="hidden" name="noofadults"  value="<?php echo $_GET['noofadults'];?>">
						    <input type="hidden" name="noofchildren"  value="<?php echo $_GET['noofchildren'];?>">
                        
                        <button class="btn btn-primary cardss" type="submit"> Card Payment</button>
                     
					  
                    </div> 
               </form>
                  
				    </div>
					 <div class="col-lg-6 ">
				   <form action="payment-q.php" method="post">  
				   <div class="col-lg-4">
				  <input type="hidden"   name="amount"   value="<?php echo $totamt;?>">
				 <input type="hidden"   name="roomid"  value="<?php echo $_GET['roomid'];?>">
				<input type="hidden"   name="roomtype"  value="<?php echo $_GET['roomtype'];?>"> 
				<input type="hidden" name="checkin"  value="<?php echo $_GET['checkin'];?>">
						  <input type="hidden" name="checkout"  value="<?php echo $_GET['checkout'];?>">
						   <input type="hidden" name="noofadults"  value="<?php echo $_GET['noofadults'];?>">
						    <input type="hidden" name="noofchildren"  value="<?php echo $_GET['noofchildren'];?>">
				</div>
					    <input type="hidden" name="option" id="optionn" >
				   <button class="btn btn-primary cassh" type="submit">Cash Payment</button>
				   </form>
               </div>
          </div>
        </div>
      </div>
    </div>
  </div>
				</div>
				<script src="assets/jquery.validate.min.js">
			</script>
		<script>
		/* $('.adash').click(function(event)
		{
		event.preventDefault();
		$('#loadmenu').load($(this).attr('id'));
		}); */
		 $('.cassh').hide();
       $('.cardss').hide();
	   
		$("input[name=option]:radio").click(function()
		{
    if($(this).attr("value")=="Cash") {
       $('.cassh').show();
       $('.cardss').hide();
	   $('#optionn').val('Cash');
    }
    if($(this).attr("value")=="Card") {
        $('.cassh').hide();
       $('.cardss').show();
	   $('#option1').val('Card');
    }
});
		
		</script> 
		
		
			<script>
				$("#pay").on('submit',(function(e)
				{
					e.preventDefault();
						$(".proccessing").show();
						$.ajax({
							url:'payment-q.php',
							type:'post',
							data:$('#form2').serialize(),
							success:function(data)
							{
								alert("Payment Successfull");
								$('#loadinvoice').html(data);
								//$('#pay')[0].reset();
							}
						});
				//	} 
				}));
			</script>		
		   
		   <script>





</script>
        	
	</div>  
        </div> 
        </header>
	
            </div>
        
    </div>


   

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
</div>
</html>

