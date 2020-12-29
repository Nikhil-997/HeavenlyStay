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
                            <!--<img src="images/heavenlystay.png" alt="Heavenly Stay" style="width:100px;height:100px;"/>-->
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
		
			<div class="col-md-2">
				<!--<div id="get_cat"></div>-->
				<div class="nav nav-pills nav-stacked">
				
					<li class="active"><a href="#"><h4>View Rooms</h4></a></li>
					
					<ul>
					<li><a href="book-room-form.php?typeid=1">Single Room-A/C</a></li>
					<li><a href="book-room-form.php?typeid=2">Single Room-Non A/C</a></li>
					<li><a href="book-room-form.php?typeid=3">Double Room-A/C</a></li>
					<li><a href="book-room-form.php?typeid=4">Double Room-Non A/C</a></li>
					</ul>
					
				</div>
				
				
			</div>
			<div class="col-md-10">
				<div id="loadmenu">
				<div class="panel-info">
        <div class="panel panel-info">
<a href="cust-dashboard.php">Back To Dashboard</a><br><br>
<?php
if($_GET['typeid']==1)
{?>

<div class="table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th class="text-center">Sl.no</th>
							<th class="text-center">Room no</th>
							<th class="text-center">Room type</th>
							<th class="text-center">Price</th>
						</tr>
						</thead>
					<tbody>
						<?php
							$i=1;
							include("dbcon.php");
							$sql="SELECT * from room where roomtype='Single-AC' and roomstatus='available'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['roomno'];
								Print '<td align="center">'.$row['roomtype'];
								Print '<td align="center">'.$row['price'];
								print '<td align="center"><input type="checkbox" id="checked" class="ck" name="ck1" data-src="'.$row['roomid'].'"></td>';
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
<?php }elseif($_GET['typeid']==2)
{?>
<div class="table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th class="text-center">Sl.no</th>
							<th class="text-center">Room no</th>
							<th class="text-center">Room type</th>
							<th class="text-center">Price</th>
						</tr>
						</thead>
					<tbody>
						<?php
							$i=1;
							include("dbcon.php");
							$sql="SELECT * from room where roomtype='Single-Non-AC' and roomstatus='available'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['roomno'];
								Print '<td align="center">'.$row['roomtype'];
								Print '<td align="center">'.$row['price'];
								print '<td align="center"><input type="checkbox" id="checked" class="ck" name="ck1" data-src="'.$row['roomid'].'"></td>';
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
<?php }
elseif($_GET['typeid']==3)
{?>
<div class="table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th class="text-center">Sl.no</th>
							<th class="text-center">Room no</th>
							<th class="text-center">Room type</th>
							<th class="text-center">Price</th>
						</tr>
						</thead>
					<tbody>
						<?php
							$i=1;
							include("dbcon.php");
							$sql="SELECT * from room where roomtype='Double-AC' and roomstatus='available'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['roomno'];
								Print '<td align="center">'.$row['roomtype'];
								Print '<td align="center">'.$row['price'];
								print '<td align="center"><input type="checkbox" id="checked" class="ck" name="ck1" data-src="'.$row['roomid'].'"></td>';
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
							<th class="text-center">Sl.no</th>
							<th class="text-center">Room no</th>
							<th class="text-center">Room type</th>
							<th class="text-center">Price</th>
						</tr>
						</thead>
					<tbody>
						<?php
							$i=1;
							include("dbcon.php");
							$sql="SELECT * from room where roomtype='Double-Non-AC' and roomstatus='available'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['roomno'];
								Print '<td align="center">'.$row['roomtype'];
								Print '<td align="center">'.$row['price'];
								print '<td align="center"><input type="checkbox" id="checked" class="ck" name="ck1" data-src="'.$row['roomid'].'"></td>';
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
<?php }?>


						
					</div>
					</div>
					
					
					
					
<form id="form2" method="post" name="test" name="frmval" onsubmit="return validateForm()" >
   <span class="error error-keyup-2"></span>
   <div class="row">
   <div class="col-md-6">
Name: <span id="idname" class="ms-error" style="color:red"></span>
<input type="text" class="form-control form-control-name keyup-characters" placeholder="enter name" name="name" id="name" size="30" maxlength="30" >
	</div>
   <div class="col-md-6">
Email ID:  <span id="idemailid" class="ms-error" style="color:red"></span><input type="text" class="form-control form-control-name keyup-characters" placeholder="enter email" name="emailid" id="emailid" >
	</div>
	</div>
	
<div class="row">
   <div class="col-md-6">
Phone No:  <span id="idphoneno" class="ms-error" style="color:red"></span><input type="text" class="form-control form-control-name keyup-characters" placeholder="enter phone no" name="phoneno" id="phoneno" size="10" maxlength="10"  onkeyup="check(this)">
	</div>
   <div class="col-md-6">
Room Type:  <span id="idroomtype" class="ms-error" style="color:red"></span><input class="form-control form-control-name keyup-characters" type="text" placeholder="enter room type" name="roomtype" id="roomtype"  readonly ><br><br>
	</div>
	</div>
	
<div class="row">
   <div class="col-md-6">
Checkin: <span id="idcheckin" class="ms-error" style="color:red"></span> 
<input type="date" class="form-control form-control-name keyup-characters" name="checkin"  min='<?php echo date("Y-m-d"); ?>'  id="checkin" onchange="changedatea(this.value)" onkeyup="changedatea(this.value)">	
</div>
   <div class="col-md-6">
Checkout:  <span id="idcheckout" class="ms-error" style="color:red"></span><span id="idtodate"><input class="form-control form-control-name keyup-characters" type="date" name="checkout"  min='<?php echo date("Y-m-d"); ?>'  id="checkout"></span>	
</div>
	</div>

<div class="row">
   <div class="col-md-6">
No of Adults:  <span id="idnoofadults" class="ms-error" style="color:red"></span><input type="number" class="form-control form-control-name keyup-characters" placeholder="enter no of adults" name="noofadults" id="adults"  onkeyup="checkInputs()" >
</div>
   <div class="col-md-6">
No of Children:  <span id="idnoofchildren" class="ms-error" style="color:red"></span><input type="number" class="form-control form-control-name keyup-characters" placeholder="enter no of children" name="noofchildren"  id="children" onkeyup="checkInput()" ><br><br>
</div>
	</div>

 <input type="hidden"  name="price" id="price">
 <input type="hidden"  name="roomid" id="roomid">

<input class="btn btn-info bookroom" type="submit"  value="Book Room" ><br><br>

</form>

<div class="errmsg" id="errmsg"></div>
				</div>
				</div>
				</div>
				
<script>
function changedatea(checkin)
{
        if (window.XMLHttpRequest) 
		{
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 
		else 
		{
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
		{
            if (this.readyState == 4 && this.status == 200) 
			{
				document.getElementById("idtodate").innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxtodate.php?checkin="+checkin,true);
        xmlhttp.send();
}
</script>
<script type="application/javascript">
function validateForm()
{
	var numericExpression = /^[0-9]+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaspaceExp = /^[a-zA-Z\s]+$/;
	var alphanumericExp = /^[0-9a-zA-Z]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	
	var spans = $('.ms-error');
	spans.text('');

	var conditionstatus="true";

	if(!document.getElementById("name").value.match(alphaspaceExp))
	{
		document.getElementById("idname").innerHTML = "Name should contain alphabets only...";
		conditionstatus="false"
	}
	if(document.getElementById("name").value == "")
	{
		document.getElementById("idname").innerHTML = "Name should not be empty..";
		conditionstatus="false"
	}
	if(!document.getElementById("emailid").value.match(emailExp))
	{
		document.getElementById("idemailid").innerHTML = "Entered Email ID is not in valid format...";
		conditionstatus="false"
	}
	if(document.getElementById("emailid").value == "")
	{
		document.getElementById("idemailid").innerHTML = "Email id should not be empty..";
		conditionstatus="false"
	}
	if(!document.getElementById("phoneno").value.match(numericExpression))
	{
		document.getElementById("idphoneno").innerHTML = "Entered Phone number is not in valid format...";
		conditionstatus="false"
	}
	if(document.getElementById("phoneno").value == "")
	{
		document.getElementById("idphoneno").innerHTML = "Phone No should not be empty..";
		conditionstatus="false"
	}
	if(document.getElementById("roomtype").value == "")
	{
		document.getElementById("idroomtype").innerHTML = "Room type should not be empty should not be empty..";
		conditionstatus="false"
	}
	if(document.getElementById("checkin").value == "")
	{
		document.getElementById("idcheckin").innerHTML = "Checkin Date should not be empty..";
		conditionstatus="false"
	}  
	if(document.getElementById("checkout").value == "")
	{
		document.getElementById("idcheckout").innerHTML = "Checkout Date should not be empty..";
		conditionstatus="false"
	}
	if(document.getElementById("adults").value == "")
	{
		document.getElementById("idnoofadults").innerHTML = "This should not be empty..";
		conditionstatus="false"
	}
	if(document.getElementById("children").value == "")
	{
		document.getElementById("idnoofchildren").innerHTML = "This should not be empty..";
		conditionstatus="false"
	}
	if(conditionstatus=="true")
	{
		bookingroom();
		return false;
	}
	else
	{
		return false;
	}
}
</script>

<script>
		$('.adash').click(function(event)
		{
		event.preventDefault();
		$('#loadmenu').load($(this).attr('id'));
		});
</script> 		

<script>
$('.ck').click(function(e)
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
});
function bookingroom()
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

}
</script>



<script>
function checkInputs()
{ 
var adults = document.getElementById('adults').value;
if(adults>6 || adults<1)
{
	   alert("Please enter a value greater than 0 and less than 6");
	   $('#adults').val("1");
}
}  
function checkInput(){   
        var children = document.getElementById('children').value;
if(children>=6 || children<0)
{
	   alert("Please enter a value greater than 0 and less than 6");
	   $('#children').val("0");
}
       }

	
			
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
}	  
	   
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

