<form id="gym">

<a href="cust-dashboard.php">Back To Dashboard</a><br><br>
<b><h2>Gym Timings</h2></b>
<form id="gym" action="add-gym-time-q.php" method="post">

From: <input type="time" name="ftime"  required  onchange="changetime(this.value)" onkeyup="changetime(this.value)">
To: <span id="idtotime"><input type="time" name="ttime"  required></span>

<!-- From: <input type="time" name="ftime"  required onchange="changetime(this.value)" onkeyup="changetime(this.value)">
To:<span id="idtotime"> <input type="time" name="ttime"  required></span>-->
		
      <div class="submit-container clearfix" style="margin-top: 2rem;">          
        <input type="Submit" role="button" name="Submit" class="btn btn-irenic float-left" tabindex="0" value="Set Gym Timings">
         <!-- <span>LOGIN</span>-->
        </div>
		   
		 
		   
		</form>
<script>
function changetime(time1)
{
	document.getElementById("idtotime").innerHTML= "<input type='time' name='ttime'   min='" + time1 + "'  required>";
}
//function changedatea(time1)
//{
	//document.getElementById("idtotime").innerHTML= "<input type='time' name='ttime'   min='" + time1 + "'  required>";
//}
</script>
		   <script src="assets/jquery.validate.min.js">
			</script>
		
			<script>
				$("#gym").on('submit',(function(e)
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
							url:'add-gym-time-q.php',
							type:'post',
							data:new FormData(this),
							 contentType: false,
                             processData: false,
							success:function(data)
							{
								alert("Booked Gym timings Successfully");
								$('#gym')[0].reset();
							}
						});
				//	} 
				}));
				</script>
						
				