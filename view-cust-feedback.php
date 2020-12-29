<head>
<style>
table {border-collapse:collapse; table-layout:fixed; width:500px;}
table td {border:solid 1px #fab; width:100px; word-wrap:break-word;}
.wrapText
{
     table-layout:fixed;
     width: 20%;
     word-wrap: break-word;
}




</style>
</head>

				
					<!--<div class="panel-heading text-center">--Featured Products---->
					<a href="admin-dashboard.php">Back To Dashboard</a><br><br>
					<!--<form action="addcatogery-q.php" method="post">
						Category Name: <input type="text" name="cat_name"><br><br>
						<input type="submit" name="submit" value="Submit">
					</form>---->
					<div class="col-md-10">
					<div class="table table-responsive" >
						<table class="table table-striped">
						<thead style="white-space:pre-wrap; word-wrap:break-word">
						<tr>
							<th >Sl no</th>
						
							<th class="text-center">Feedback</th>
						</tr>
						</thead>
					<tbody>
						<?php
						$i=1;
							include("dbcon.php");
							$sql="SELECT * from feedback where status='active'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								
								Print '<td align="center" width="20px"class="wrapText">'.$row['feedback'];
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
					
					</div>