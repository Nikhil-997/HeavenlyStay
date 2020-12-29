<head>
</head>
<form id="room">
<a href="admin-dashboard.php">Back To Dashboard</a><br><br>
<form action="add-room-q.php" method="post">
		   <b><h4>Room no: <input type="text" name="roomno"  required></h4></b><br>
		   <b><h4>Room type: <select name="roomtype"  required>
			<option value=""></option>
			<option value="Single-AC">Single-AC</option>
			<option value="Single-Non-AC">Single-Non/AC</option>
			<option value="Double-AC">Double-AC</option>
			<option value="Double-Non-AC">Double-Non/AC</option>
			</select>
			<br><br>
		    <b><h4>Price: <select name="price"  required>
			<option value=""></option>
			<option value="1200">1200</option>
			<option value="800">800</option>
			<option value="2500">2500</option>
			<option value="1800">1800 </option>
			</select>
			<br><br>
			
			
		   
		   <input type="Submit" role="button" name="Submit" class="btn btn-irenic float-left" tabindex="0" value="Submit">
		
		   </form>
		   
		   <script src="assets/jquery.validate.min.js">
			</script>
		
			<script>
				/*$("#room").on('submit',(function(e)
				{
					e.preventDefault();
				
						$(".proccessing").show();
						$.ajax({
							url:'add-room-q.php',
							type:'post',
							data:new FormData(this),
							 contentType: false,
                             processData: false,
							success:function(data)
							{
								alert("Room Added Successfully");
									$('#room')[0].reset();
							}
							error: function (data) {
                alert("Error");
						});
				//	} 
				}));*/
				</script>