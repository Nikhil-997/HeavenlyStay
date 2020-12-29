<?php session_start(); ?>

<a href="cust-dashboard.php">Back To Dashboard</a><br><br>
<form id="formhall"action="add-event-hall-q.php" method="post">
		   
<div class="row">
<div class="col-md-6">
		   <b>Type of Hall: 
<select name="hall" id="dropdown"  >
<option value=""></option>
<?php 
include "dbcon.php";
$sql="SELECT * FROM  `eventhall` where status='active'";
$sql1=$con->query($sql);
while($sql2=mysqli_fetch_array($sql1))
{
echo "<option value='$sql2[eid]'  data-eid='$sql2[eid]' data-capacity='$sql2[capacity]' data-price='$sql2[price]' data-hall='$sql2[eventhall]'>$sql2[eventhall]</option>";
//$capacity=$sql2[capacity];
}
?>
</select> <br><br>
</div>
</div>
<script>
$("#dropdown").change(function () {
  var cntrol = $(this);
  
  var capacity = cntrol.find(':selected').data('capacity');
  document.getElementById("divstrength").innerHTML = "<input type='number' max='" + capacity + "' min='50' name='strength' id='strength' size='3' maxlength='3'>";
 });

</script>
			<input type="text"   name="price" id="price" >
			<input type="text"   name="halltype" id="halltype" >
			<input type="text"   name="eid" id="eid" >
<div id="loadhall"></div>
<div class="row">
<div class="col-md-6">
			<input type="radio" name="acnonac" value="ac"  required>AC
			<input type="radio" name="acnonac" value="nonac"  required>Non-AC
			<br><br>
			</div>
			</div>
<div class="row">
<div class="col-md-6">
			Date Of Event: 
					
			From: <span id="idcheckin" class="ms-error" style="color:red"></span>
			<input type="date" name="fdate" id="fdate"  min='<?php echo date("Y-m-d"); ?>' onchange="changedatea(this.value)" onkeyup="changedatea(this.value)">
			</div>
			
		
			<div class="col-md-6">
			To: <span id="idcheckout" class="ms-error" style="color:red"></span><span id="idtodate">
			<input type="date" name="tdate"   min='<?php echo date("Y-m-d"); ?>'id="checkout"></span>
			</div>
			</div>
			<br>
			<div class="row">
			<div class="col-md-6">
			Strength: <span id="divstrength"><input type="number" name="strength" id="strength" size="3" maxlength="3" ></span>
			</div>
			</div>
			<br><br>

			Food:   <br>
		<input type="radio" name="food" id="food" class="food" value="non-veg" onchange="changefoodtype(this.value)">Non Vegetarian Only<br>
		<input type="radio" name="food" id="food" value="veg" onchange="changefoodtype(this.value)">Vegetarian Only<br>
		<input type="radio" name="food" id="food" value="Both" onchange="changefoodtype(this.value)">Both<br>
		<input type="radio" name="food" id="food" value="notrequired" onchange="changefoodtype(this.value)">Not required			
			<script>
			function changefoodtype(ft)
			{
				var strength = document.getElementById("strength").value;
				//alert(document.getElementById("food").value);
				if(ft == "non-veg")
				{
					document.getElementById("divvegandnonveg").innerHTML = 	"<div class='col-md-6'>Head count of Vegetarian Food: <input type='number' class='form-control' name='noofveg' id='noofveg' size='3' maxlength='3' readOnly value='0' max='" + strength + "' ></div><div class='col-md-6'>Head count of Non-Vegetarian Food: <input type='number' class='form-control'  name='noofnonveg' id='noofnonveg' size='3' maxlength='3'  value='0' max='" + strength + "'  ></div>";
				}
				if(ft == "veg")
				{
					document.getElementById("divvegandnonveg").innerHTML = 	"<div class='col-md-6'>Head count of Vegetarian Food: <input type='number' class='form-control' name='noofveg' id='noofveg' size='3' maxlength='3'  value='0' max='" + strength + "' ></div><div class='col-md-6'>Head count of Non-Vegetarian Food: <input type='number' class='form-control'  name='noofnonveg' id='noofnonveg' size='3' maxlength='3'  value='0' readonly max='" + strength + "' ></div>";
				}
				if(ft == "Both")
				{
					document.getElementById("divvegandnonveg").innerHTML = 	"<div class='col-md-6'>Head count of Vegetarian Food: <input type='number' class='form-control' name='noofveg' id='noofveg' size='3' maxlength='3'  value='0' ></div><div class='col-md-6'>Head count of Non-Vegetarian Food: <input type='number' class='form-control'  name='noofnonveg' id='noofnonveg' size='3' maxlength='3'  value='0' max='" + strength + "' ></div>";
				}
				if(ft == "notrequired")
				{
					document.getElementById("divvegandnonveg").innerHTML = 	"<div class='col-md-6'>Head count of Vegetarian Food: <input type='number' class='form-control' name='noofveg' id='noofveg' size='3' maxlength='3'  value='0' readOnly max='" + strength + "'></div><div class='col-md-6'>Head count of Non-Vegetarian Food: <input type='number' class='form-control'  name='noofnonveg' id='noofnonveg' size='3' maxlength='3'  value='0' readOnly max='" + strength + "' ></div>";
				}
			}
			
function changedatea(check)
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
        xmlhttp.open("GET","ajaxtodate1.php?check="+check,true);
        xmlhttp.send();
	//document.getElementById("idtodate").innerHTML= "<input type='date' name='tdate'   min='" + check + "'  id='checkout'>";
}
			</script>
			
			<br><br>
			<div class="row" id="divvegandnonveg">
			<div class="col-md-6">
			Head count of Vegetarian Food: 
			<input type="number" class="form-control" name="noofveg" id="noofveg" size="3" maxlength="3" ><br><br>
			</div>
			<div class="col-md-6">
			Head count of Non-Vegetarian Food: <input type="number" class="form-control"  name="noofnonveg" id="noofnonveg" size="3" maxlength="3" >
			
			
			</div>
			</div>
		   <div class="submit-container clearfix" style="margin-top: 2rem;">          
        <input type="submit" role="button" name="Submit" class="btn btn-irenic float-left submit" tabindex="0" value="Book Hall" >
         <!-- <span>LOGIN</span>-->
        </div>
		   
		   </form> <br>
		   <p> *Note: </p>
		   <p> If you choose only vegetarian food as an option, please enter 0 in the Head count of Non-Vegetarian Food section and vice-versa. </p>
		   
		
		<script>
	$('#dropdown').change(function()
		{
			//abcd=$(this).attr('data_id');
	//alert(abcd);
		eid=$(':selected').attr('data-eid');
qwerty=$(':selected').attr('data-price');
eventhall=$(':selected').attr('data-hall');
$('#price').val(qwerty);
$('#halltype').val(eventhall);
$('#eid').val(eid);
		dropdown=$('#dropdown').val();
		$.ajax({
		url:'display-eventpackage-q.php',
		type:'GET',
		data:'&eid='+dropdown,
		success:function(data)
		{
		$('#loadhall').html(data);
		}
		
		
		});
		})

	
		</script>
		<script>
		/*$('.ck').click(function(e)
{
e.preventDefault();
abc=$(this).attr('data-src');
$.ajax({
  url:'hall-book-query.php',
  type:'get',
  data:'&serviceid='+abc,
  success:function(result)
  {
     var obj=JSON.parse(result);
	 $('#halltype').val(obj.halltype);
	 $('#price').val(obj.price);
	 $('#serviceid').val(obj.serviceid); //extract this value from service table not eventpackage
	  $('#fdate').val(obj.fdate);
	   $('#tdate').val(obj.tdate);
  }


});
});

$('.submit').click(function(e)
{
e.preventDefault();
price=$('#price').val();
halltype=$('#halltype').val();
eid=$('#eid').val();
$.ajax({
	url:'add-event-hall-q.php',
	type:'post',
	data:$('#formhall').serialize(),
	success:function(data)
	{
		alert("hi");
	window.location.assign("add-event-hall-q.php?price="+price+"&eid="+eid+"&halltype="+halltype);
	}
});
/* roomtype=$('#halltype').val();
price=$('#cost').val();
roomid =$('#eid').val();
window.location.assign('add-event-hall-q.php?cost='+cost+'&eid='+eid+'&halltype='+halltype); 
  


	 
	

}) ;*/
 </script>
<script>
var noofveg = document.getElementById("noofveg").value;
	var noofnonveg = document.getElementById("noofnonveg").value;
	var strength = document.getElementById("strength").value;
	var totqty = parseInt(noofveg) + parseInt(noofnonveg);
	if(totqty  > strength)
	{
		alert("Total quantity exceeded..");
	} 
</script>
		
<script>
	//$("#form1").on('submit',(function(e)
				//{
				//	e.preventDefault();
					
						//$(".proccessing").show();
						//$.ajax({
							//url:'add-event-hall-q.php',
							//type:'post',
							//data:new FormData(this),
							// contentType: false,
                            // processData: false,
							//success:function(data)
							//{
								//alert("Booked Event Hall Successfully");
								//$('#form1')[0].reset();
							//	if(data==0)
								//{
								//	alert("Unsuccessful");
								//}
							//	else
								//{
								//	alert("Booked Event Hall Successfully");
								///}
						//}
						//});
				//	} 
				//}));
			</script>	
			
			
<script>



	   $("#tdate").keyup(function(){
var fdate = $('#fdate').val().replace('-','/');
var tdate = $('#tdate').val().replace('-','/');

if(fdate > tdate){
    $('#errmsg').html('Start time must be smaller than End time');
}else{
    $('#errmsg').html('');
}
});
</script>	
	
<script type="text/javascript">
/*
    $(document).ready(function() {
        $('.food').change({
            if ($(this).val() == 'non-veg') {
                $('#noofveg').attr('readonly','readonly');
            } else {
                $('#noofnonveg').removeAttr('readonly');
            }
        });
    });
	*/
</script>


<script>

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