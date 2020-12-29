<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">
<style>
body {
  background-color: #2ecc71;
}
.container {
  width: 1000px;
  height: 700px;
  margin-top: 100px;
  position:relative;
}
#loginForm {
  width: 500px;
  height: 400px;
  position:relative;
  z-index:10;
}

#image{
  top:0;
  left:0;
  right:0;
  bottom:0;
  position:absolute;
}
</style>
  
</head>


<body>

    <div class="container" align="center">
  <div id="image">
    <img src="img/images.jpg" style="width:640px; height:678">
  </div>

  <div id="loginForm">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Please sign in</h3>
      </div>
      <div class="panel-body">
	  
        <form accept-charset="UTF-8" role="form">
          <fieldset>
            <div class="form-group">
              <input class="form-control" placeholder="E-mail" name="email" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password" name="password" type="password" value="">
            </div>
            <div class="checkbox">
              <label>
                <input name="remember" type="checkbox" value="Remember Me">Remember Me
              </label>
            </div>
            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
          </fieldset>
        </form>
      </div>
    </div>
  </div>

</div>
   </body>