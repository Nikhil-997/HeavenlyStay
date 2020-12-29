<?php				 
$now = $_GET['checkin']; // or your date as well
?>
<input type='date' class="form-control" name='checkout' min='<?php echo $_GET['checkin']; ?>' max='<?php echo date('Y-m-d', strtotime($now. ' + 5 days')); ?>'  id='checkout'>