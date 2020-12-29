<form id="swim">
<a href="cust-dashboard.php">Back To Dashboard</a><br><br>
<b><h2>Swimming Pool Timings</h2></b>
<form action="add-swim-time-q.php" method="post">
From: <input type="time" name="ftime"  required  onchange="changetime(this.value)" onkeyup="changetime(this.value)">
To: <span id="idtotime"><input type="time" name="ttime"  required></span>
		   <div class="submit-container clearfix" style="margin-top: 2rem;">          
        <input type="Submit" role="button" name="Submit" class="btn btn-irenic float-left" tabindex="0" value="Set Swimming Pool Timings">
         <!-- <span>LOGIN</span>-->
        </div>
		   </div>
		   </div>
		   </form>
		
<script>
function changetime(time1)
{
	document.getElementById("idtotime").innerHTML= "<input type='time' name='ttime'   min='" + time1 + "'  required>";
}
</script>
<script src="assets/jquery.validate.min.js">
			</script>
		
			<script>
				$("#swim").on('submit',(function(e)
				{
					e.preventDefault();
				
						$(".proccessing").show();
						$.ajax({
							url:'add-swim-time-q.php',
							type:'post',
							data:new FormData(this),
							 contentType: false,
                             processData: false,
							success:function(data)
							{
								alert("Booked Swimming Pool timings Successfully");
								$('#swim')[0].reset();
							}
						});
				//	} 
				}));
				</script>		
		   
		   
		   
		   