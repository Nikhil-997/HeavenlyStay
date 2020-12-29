
				
					<!--<div class="panel-heading text-center">--Featured Products---->
					<a href="admin-dashboard.php">Back To Dashboard</a><br><br>
					<!--<form action="addcatogery-q.php" method="post">
						Category Name: <input type="text" name="cat_name"><br><br>
						<input type="submit" name="submit" value="Submit">
					</form>---->
						<div class="col-md-9">
					<div class="table table-responsive">
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
							$sql="SELECT * from room where roomstatus='available' and  status='active'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['roomno'];
								Print '<td align="center">'.$row['roomtype'];
								Print '<td align="center">'.$row['price'];
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
					</div>