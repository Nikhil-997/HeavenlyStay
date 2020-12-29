<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>

  <div class="tile">
  <div class="tile-header">
    <h2 style="color: white; opacity: .75; font-size: 4rem; display: flex; justify-content: center; align-items: center; height: 100%;"> LOGIN</h2>
  </div>
  
  <div class="tile-body">
   
		<form id="form" action="authorizeusercheck-q.php" method="post">
      <label class="form-input">
        <i class="material-icons">person</i>
   <input type="text" autofocus="true"   name="Username" maxlength="15" placeholder= Username  required />
        
        <span class="underline"></span>
      </label>
      
      <label class="form-input">
        <i class="material-icons">lock</i>
     <input type="password"  name="Password" maxlength="15" placeholder=  Password required />
        
        <div class="underline"></div>
      </label>
      
	   <div class="submit-container clearfix" style="margin-top: 2rem;">          
        <input type="Submit" role="button" name="Submit" class="btn btn-irenic float-left" tabindex="0" value="Login">
		        <a href="change-password.php" class="btn btn-irenic float-left">Forgot password ?</a> 
        <div class="login-pending">
          <div class=spinner>
            <span class="dot1"></span>
            <span class="dot2"></span>
          </div>
          
          <div class="login-granted-content">
            <i class="material-icons">done</i>
          </div>
        </div>
         <!-- <span>LOGIN</span>-->
        </div>
     <!--  <div class="submit-container clearfix" style="margin-top: 2rem;">          
        <div id="submit" role="button" type="button" class="btn btn-irenic float-right" tabindex="0">
          <span>SIGN IN</span>
        </div>-->
        
      </div>
    </form>
	<div class="pad-all" >
		          
					<!--<a href="index.php" class="btn btn-irenic float-left">Back to Main Page</a>-->
		
					<br>
					<br>
		               
		           
		        </div>
  </div>
</div>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
