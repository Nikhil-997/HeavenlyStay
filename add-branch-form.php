<head>
</head>

<a href="admin-dashboard.php">Back To Dashboard</a><br><br>
<form action="add-branch-q.php" method="post">
		   <b><h3>Branch name: <input type="text" name="branchname"  required></h3></b>
		    <div class="submit-container clearfix" style="margin-top: 2rem;">          
        <input type="Submit" role="button" name="Submit" class="btn btn-irenic float-left" tabindex="0" value="Submit">
         <!-- <span>LOGIN</span>-->
        </div>
		   
		   </form>
		   	<div class="col-md-9">
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
						
						
						<script>
				
				</script>		