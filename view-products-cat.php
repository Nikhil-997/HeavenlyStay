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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <!--
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
    <!--<link id="main-style" rel="stylesheet" href="css/style.css"> -->
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
    <!--<script type="text/javascript" src="js/pace.min.js" data-pace-options='{ "ajax": false }'></script>
    <script type="text/javascript" src="js/page-loading.js"></script>-->
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs">
                <div class="container">
                    <ul class="quick-menu pull-left">
                      <a href="index.php" title="Heavenly Stay">
                            <img src="images/heavenlystay.png" alt="Heavenly Stay" style="width:100px;height:100px;"/>
                        </a> 
                        
                    </ul>
					
                    <ul class="quick-menu pull-right">
                        <li><a href="logout.php">LOGOUT</a></li>
                        
                        
                    </ul>
                     
            </div>
            
            <div class="main-header">
                
                <!--<a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>-->

                <div class="container">
                    
					</div>
					<div class="container-fluid">
					
		<div class="row">
		
		
			<div class="col-md-10">
				<div id="loadmenu">
				<div class="panel-info">
        <div class="panel panel-info">
<a href="cust-dashboard.php">Back To Dashboard</a><br><br>
<?php
if($_GET['typeid']==2)
{?>

<div class="table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th class="text-center">Product Name</th>
							<th class="text-center">Specifications</th>
							<th class="text-center">Cost</th>
							<th class="text-center">Image</th>
							<th class="text-center">Add To Cart</th>
						</tr>
						</thead>
					<tbody>
						<?php
							$i=1;
							include("dbcon.php");
							$sql="SELECT * from product-details where cat_id='2' and pstatus='active'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['product_name'];
								Print '<td align="center">'.$row['specs'];
								Print '<td align="center">'.$row['cost'];
								Print '<td><img src='.$row['image'].""'style='width:50px;height:50px'></td>';
								Print'<td align="center"><a onclick="myFunction('.$row['pid'].')">Add to Cart</a></td>'; 
								print '<td align="center"><input type="checkbox" id="checked" class="ck" name="ck1" data-src="'.$row['pid'].'"></td>';
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
<?php }elseif($_GET['typeid']==3)
{?>
<div class="table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th class="text-center">Product Name</th>
							<th class="text-center">Specifications</th>
							<th class="text-center">Cost</th>
							<th class="text-center">Image</th>
							<th class="text-center">Add To Cart</th>
						</tr>
						</thead>
					<tbody>
						<?php
							$i=1;
							include("dbcon.php");
							$sql="SELECT * from product-details where cat_id='3' and pstatus='active'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['product_name'];
								Print '<td align="center">'.$row['specs'];
								Print '<td align="center">'.$row['cost'];
								Print '<td><img src='.$row['image'].""'style='width:50px;height:50px'></td>';
								Print'<td align="center"><a onclick="myFunction('.$row['pid'].')">Add to Cart</a></td>'; 
								print '<td align="center"><input type="checkbox" id="checked" class="ck" name="ck1" data-src="'.$row['pid'].'"></td>';
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
<?php }
elseif($_GET['typeid']==4)
{?>
<div class="table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th class="text-center">Product Name</th>
							<th class="text-center">Specifications</th>
							<th class="text-center">Cost</th>
							<th class="text-center">Image</th>
							<th class="text-center">Add To Cart</th>
						</tr>
						</thead>
					<tbody>
						<?php
							$i=1;
							include("dbcon.php");
							$sql="SELECT * from product-details where cat_id='4' and pstatus='active'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['product_name'];
								Print '<td align="center">'.$row['specs'];
								Print '<td align="center">'.$row['cost'];
								Print '<td><img src='.$row['image'].""'style='width:50px;height:50px'></td>';
								Print'<td align="center"><a onclick="myFunction('.$row['pid'].')">Add to Cart</a></td>'; 
								print '<td align="center"><input type="checkbox" id="checked" class="ck" name="ck1" data-src="'.$row['pid'].'"></td>';
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
						
<?php }
elseif($_GET['typeid']==5)
{?>
<div class="table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th class="text-center">Product Name</th>
							<th class="text-center">Specifications</th>
							<th class="text-center">Cost</th>
							<th class="text-center">Image</th>
							<th class="text-center">Add To Cart</th>
						</tr>
						</thead>
					<tbody>
						<?php
							$i=1;
							include("dbcon.php");
							$sql="SELECT * from product-details where cat_id='5' and pstatus='active'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['product_name'];
								Print '<td align="center">'.$row['specs'];
								Print '<td align="center">'.$row['cost'];
								Print '<td><img src='.$row['image'].""'style='width:50px;height:50px'></td>';
								Print'<td align="center"><a onclick="myFunction('.$row['pid'].')">Add to Cart</a></td>'; 
								print '<td align="center"><input type="checkbox" id="checked" class="ck" name="ck1" data-src="'.$row['pid'].'"></td>';
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
<?php }
elseif($_GET['typeid']==5)
{?>
<div class="table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th class="text-center">Product Name</th>
							<th class="text-center">Specifications</th>
							<th class="text-center">Cost</th>
							<th class="text-center">Image</th>
							<th class="text-center">Add To Cart</th>
						</tr>
						</thead>
					<tbody>
						<?php
							$i=1;
							include("dbcon.php");
							$sql="SELECT * from product-details where cat_id='6' and pstatus='active'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['product_name'];
								Print '<td align="center">'.$row['specs'];
								Print '<td align="center">'.$row['cost'];
								Print '<td><img src='.$row['image'].""'style='width:50px;height:50px'></td>';
								Print'<td align="center"><a onclick="myFunction('.$row['pid'].')">Add to Cart</a></td>'; 
								print '<td align="center"><input type="checkbox" id="checked" class="ck" name="ck1" data-src="'.$row['pid'].'"></td>';
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
<?php }?>

						
					</div>

				</div>
				</div>
				</div>
				
				


<script>
		$('.adash').click(function(event)
		{
		event.preventDefault();
		$('#loadmenu').load($(this).attr('id'));
		});
</script> 		

<script>
/* $('.ck').click(function(e)
{
e.preventDefault();
abc=$(this).attr('data-src');
$.ajax({
  url:'room-book-query.php',
  type:'get',
  data:'&roomid='+abc,
  success:function(result)
  {
     var obj=JSON.parse(result);
	 $('#roomtype').val(obj.roomtype);
	 $('#price').val(obj.price);
	 $('#roomid').val(obj.roomid);
  }


});
}); */
/* function bookingroom()
{
roomtype=$('#roomtype').val();
price=$('#price').val();
roomid =$('#roomid').val();
$.ajax({
							url:'room-book-q.php',
							type:'post',
							data:$('#form2').serialize(),
							success:function(data)
							{
							


							window.location.assign(data);
							}
});

} */
</script>



<script>

/* $('.keyup-characters').keyup(function()
			{
				$('span.error-keyup-2').remove();
				var inputVal=$(this).val();
				var characterReg=/^\s*[a-z A-Z,\s]+\s*$/;
				if(!characterReg.test(inputVal)){
					$(this).after('<span class="error error-keyup-2" style="color:red;">only text required.</span>');
					$('.addform').prop('disabled',true)
				}
				else 
				{
					$('.addform').prop('disabled',false)
				}
			}); 	
//email validation
			$('.keyup-characters2').keyup(function()
			{
				$('span.error-keyup-22').remove();
				var inputVal=$(this).val();
				var characterReg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if(!characterReg.test(inputVal)){
					$(this).after('<span class="error error-keyup-22" style="color:red;">Enter the valid email id</span>');
					$('.addform').prop('disabled',true)
				}
				else 
				{
					$('.addform').prop('disabled',false)
				}
			});  

	   
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();
			 if(dd<10){
					dd='0'+dd
				} 
				if(mm<10){
					mm='0'+mm
				} 

			today = yyyy+'-'+mm+'-'+dd;
			document.getElementById("datefield").setAttribute("max", today);
			
	   $("#checkout").keyup(function(){
var startDate = $('#checkin').val().replace('-','/');
var endDate = $('#checkout').val().replace('-','/');

if(startDate > endDate){
    $('#errmsg').html('Start time must be smaller than End time');
}else{
    $('#errmsg').html('');
}
});
	   
function check(o) {
    v=o.value.replace(/^\s+|\s+$/,''); // remove any whitespace
    if(o=='') {
        return;
    }
    v=v.substr(v.length-1);
    if(v.match(/\d/g)==null) {
        o.value=o.value.substr(0,o.value.length-1).replace(/^\s+|\s+$/,'');
    }
}	   */
	   
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
</html>

