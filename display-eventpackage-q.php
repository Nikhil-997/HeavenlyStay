<div class="table-responsive">
						 <table class="table table-striped">
						 <thead>
						 <tr>
						  
						 <th class="text-center">Sl Number</th>
						 <th class="text-center">Type Of Hall</th>
						  <th class="text-center">Description</th>
						 <th class="text-center">Price</th>
						 
						 </tr>
						 </thead
						 <tbody>
						 <?php
						  $i=1;
						 include("dbcon.php");
						 $sql="select* from eventpackage where id='$_GET[eid]' AND status='active'";
						 $query=$con->query($sql);
						 while($row=mysqli_fetch_array($query))
						 {
							
							 print "<tr>";
							print '<td>'.$i++.'</td>';
							 print '<td align="center">'.$row['halltype']."</td>";
							 print '<td >'.$row['description']."</td>";
							print '<td align="center">'.$row['cost']."</td>";
							
						print "</tr>";
						 }
						 ?>
						 </tbody>
						 </table>
						 </div>
						 
						 <script>
							 $('.ck').click(function(e)
{
e.preventDefault();
abc=$(this).attr('data-src');
alert(abc);
});