
				
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
							<th class="text-center">Sl.no</th>
							<th class="text-center">Type Of Hall Booked</th>
							<th class="text-center">AC Requirement</th>
							<th class="text-center">From Date Of Booking</th>
							<th class="text-center">To Date Of Booking</th>
							<th class="text-center">No Of People</th>
							
							<th class="text-center">Food Requirement</th>
							<th class="text-center">Requirement Of Vegeterian Food</th>
							<th class="text-center">Requirement Of Non-Vegeterian Food</th>
						
						</tr>
						</thead>
					<tbody>
						<?php
							$i=1;
							include("dbcon.php");
							$sql="SELECT * from servicebooking where status='active'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['servicetitle'];
								Print '<td align="center">'.$row['ac-non/ac'];
								Print '<td align="center">'.$row['fdate'];
								Print '<td align="center">'.$row['tdate'];
								Print '<td align="center">'.$row['strength'];
								//Print '<td align="center">'.$row['facilities'];
								Print '<td align="center">'.$row['food'];
								Print '<td align="center">'.$row['noofveg'];
								Print '<td align="center">'.$row['noofnonveg'];
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
	