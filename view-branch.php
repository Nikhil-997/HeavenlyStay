<div class="row">
				<style>
			.stacked
			{
				 background-color:white;
			}
			.backk
			{
				background-image:url('images/resort2.jpg');
			}
			.panel
			{
				opacity:0.5;
				 background-position:top;
			}
			</style>
			<div class="col-md-2 stacked">
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
							<th class="text-center">branchname</th>
						</tr>
						</thead>
					<tbody>
						<?php
						    $i=1;
							include("dbcon.php");
							$sql="SELECT * from branch where status='active'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$row['branchname'];
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
						</div>
				</div>	