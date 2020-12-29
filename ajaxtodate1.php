<?php				 
$now = $_GET['check']; // or your date as well
?>
<input type='date' class="form-control" name='tdate' min='<?php echo $_GET['check']; ?>' max='<?php echo date('Y-m-d', strtotime($now. ' + 3 days')); ?>'  id='checkout'>