<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Forgot Password page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>

  <div class="tile">
  <div class="tile-header">
    <h2 style="color: white; opacity: .75; font-size: 4rem; display: flex; justify-content: center; align-items: center; height: 100%;"> </h2>
  </div>
  
  <div class="tile-body">
   <div class="col-md-10">
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		          
		           
		            <form action="change-password-q.php" method="post">
						<div class="form-group">
		                   Enter Username:<input type="text" class="form-control" name="username" size="15" maxlength="15" placeholder="Enter username">
		                </div><br>
						
		                <div class="form-group">
		                    Type new Password:<input type="text" class="form-control" name="newpassword" size="15" maxlength="15" placeholder="Enter the new Password">
		                </div><br>
						<br>
						<div class="form-group">
		                    Confirm Password:<input type="text" class="form-control"name="confirmnewpassword" size="15" maxlength="15" placeholder="Confirm the new Password">
		                </div>
						<br>
		                <div class="form-group text-right">
		                    <button class="btn btn-irenic float-left" type="submit">Reset Password</button>
		                </div>
		            </form>
		            <div class="pad-top">
		                
		            </div>
		        </div>
		    </div>
		</div>
		</div>
		<br>
	<div class="pad-all">
		            <a href="login1.php" class="btn-link text-bold text-main">Back to Login</a>
		              <!--  <a href="register.php" class="btn-link mar-lft">Create a new account</a>-->
		
		           
		        </div>
  </div>
</div>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
