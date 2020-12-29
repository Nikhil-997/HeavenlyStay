
				
					<!--<div class="panel-heading text-center">--Featured Products---->
					<a href="admin-dashboard.php">Back To Dashboard</a><br><br>
					<!--<form action="addcatogery-q.php" method="post">
						Category Name: <input type="text" name="cat_name"><br><br>
						<input type="submit" name="submit" value="Submit">
					</form>---->
					<div class="table table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
						<b><th class="text-center">Sl.no</th></b>
						<b><th class="text-center">Room Type</th></b>
						<b><th class="text-center">Check-In-Date</th></b>
						<b><th class="text-center">Check-Out-Date</th></b>
					    <b><th class="text-center">No Of Adults</th></b>
						<b><th class="text-center">No Of Children</th></b>
						
						</tr>
						</thead>
					<tbody>
						<?php
						$i=1;
							include("dbcon.php");
							$sql="SELECT * from roombooking where status='active'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
						
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['roomno'];
								Print '<td align="center">'.$row['checkindate'];
								Print '<td align="center">'.$row['checkoutdate'];
								Print '<td align="center">'.$row['adults'];
								Print '<td align="center">'.$row['children'];
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
			
					