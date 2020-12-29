<head>
	
<style>
.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:20px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:10px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:0px;
  text-align:left;
  vertical-align:middle;
  font-weight:100;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}





</style>
</head>
				
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
							<th class="text-center">From Timings</th>
							<th class="text-center">To Timings</th>
							<th class="text-center">Customer Id</th>
	
						</tr>
						</thead>
					<tbody>
						<?php
						$i=1;
							include("dbcon.php");
							$sql="SELECT * from gym where status='active'";
							$count=$con->query($sql);
							while($row=mysqli_fetch_array($count))
							{
								Print "<tr>";
								print '<td>'.$i++.'</td>';
								Print '<td align="center">'.$ftime=date('h:i A', strtotime($row['ftime']));
								Print '<td align="center">'.$ttime=date('h:i A', strtotime($row['ttime']));
								Print '<td align="center">'.$row['customerid'];
								Print "</tr>";
							}
						?>
						</tbody>
						</table>
						</div>
				
					