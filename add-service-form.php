<!--<form id="form3">-->

<a href="admin-dashboard.php">Back To Dashboard</a><br><br>
<form action="add-service-q.php" method="post">
<div class="row">
<div class="col-md-6">
		   <b>Type of Hall: </b><select name="halltype"  required>
		   <option value=""></option>
			<option value="Conference-Hall">Conference Hall</option>
			<option value="Mini-Hall">Mini Hall</option>
			<option value="Event-Hall">Event Hall</option>
			</select>
			<br><br>
			</div>
			</div>
			<div class="row">
			<div class="col-md-6">
			<b>Date Of Availablity</b><br><br>
			<div>
			<div class="col-md-6">
			<b>From:
			<span  class="ms-error" style="color:red"></span> 
			<input type="date" name="fdate" min='<?php echo date("Y-m-d"); ?>' id="fdate" onchange="changedatea(this.value)" onkeyup="changedatea(this.value)" >
			</div>
			<div class="col-md-6">
			<b>To: <span id="idttdate" class="ms-error" style="color:red"></span></b><span id="idtdate">
			<input type="date" name="tdate"  min='<?php echo date("Y-m-d"); ?>'  id="tdate"><br><br></span>
			</div>
			</div>
			<div class="row">
			<div class="col-md-6">
			 <b><h4>Price: <select name="price"  required>
			<option value=""></option>
			<option value="150000">150000</option>
			<option value="80000">80000</option>
			<option value="50000">50000</option>
			</div>
			</div>
			</select>
			<br><br>
			
			
		   
		   <div class="submit-container clearfix" style="margin-top: 2rem;">          
        <input type="Submit" role="button" name="Submit" class="btn btn-irenic float-left" tabindex="0" value="Submit">
         <!-- <span>LOGIN</span>-->
        </div>
		   
		   </form>
		   <script src="assets/jquery.validate.min.js">
			</script>
<script>
function changedatea(checkin)
{
	document.getElementById("idtdate").innerHTML= "<input type='date' name='tdate' min='" + checkin + "'  id='tdate'>";
}
</script>
			
<script>
				 /* $("#form3").on('submit',(function(e)
				{
					e.preventDefault();
					
						$(".proccessing").show();
						$.ajax({
							url:'add-service-q.php',
							type:'post',
							data:new FormData(this),
							 contentType: false,
                             processData: false,
							success:function(data)
							{
								alert("Added Event-Hall Successfully");
								$('#form3')[0].reset();
							}
						}); */
						</script>
<!--<script>
function changedatea(fdate)
{
	document.getElementById("idtdate").innerHTML= "<input type='date' name='tdate' min='" + fdate + "' id='tdate'>";
}</script> */