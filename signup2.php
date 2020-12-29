<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Signup page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>

  <div class="tile">
  <div class="tile-header">
    <h2 style="color: white; opacity: .75; font-size: 4rem; display: flex; justify-content: center; align-items: center; height: 100%;">SIGNUP</h2>
  </div>
  
  <div class="tile-body">
  <span class="error error-keyup-2">	 </span>
  <div id="error"></div>
    <div class="form-group col-sm-6 col-md-5">
	
		<form id="form" action="registration-q.php" method="post" onsubmit="return validateForm()">
		
		<label class="form-input">
        
            Name: <span id="idname" class="mserror" style="color:red"></span><input type="text"  class="keyup-characters"  value=""   size="30" maxlength="30"  autofocus="true"  name="Name"  title="Number Not Allowed" id="name"  required /><br>
      
        <span class="underline"></span>
	
      </label>
	  </div>
	  <label class="form-input">
        
         Address: <span id="idaddress" class="mserror" style="color:red"></span><input  class="form-control form-control-name keyup-characters"type="text"    name="Address" size="50" maxlength="50" id="address"  required /><br>
        
        <span class="underline"></span>
      </label>
	  

        
            Gender:<input type="radio" name="Gender" value="Male" required />Male
		   <input type="radio" name="Gender" value="Female" required />Female
       
        <span class="underline"></span>
   <br>
	 
	  <label class="form-input">
         
            <input type="date" class="form-control form-control-name keyup-characters"   name="DOB" id="datefield"  min='1950-01-01' max='2000-01-01' /><br>
       
        <span class="underline"></span>
      </label>
	  
	  <label class="form-input">
        
            Phone No<span id="idphoneno" class="mserror" style="color:red"></span> <input type="text" class="form-control form-control-name keyup-characters" size="10" maxlength="10"  name="Phoneno"  title="Enter valid no"  pattern="[0-9]{10,10}" id="phoneno"  />
      
        <span class="underline"></span>
      </label>
	  
	   <label class="form-input">
        
            Email ID <span id="idemailid" class="mserror" style="color:red"></span><input type="text"  class="form-control form-control-name keyup-characters"  name="emailid" id="emailid"   /><br>
        
        <span class="underline"></span>
      </label>
	  
	  
      <label class="form-input">
        
        Username<span id="idusername" class="mserror" style="color:red"></span><input type="text" class="form-control form-control-name keyup-characters" autofocus="true" name="Username" size="15" maxlength="15" id="username"   />
        
        <span class="underline"></span>

      </label>
      
      <label class="form-input">
        
       Password<span id="idpassword" class="mserror" style="color:red"></span><input type="password" class="form-control form-control-name keyup-characters" name="Password" size="15" maxlength="15" id="password"  />
        
        <div class="underline"></div>
      </label>
	  
      
	   <div class="submit-container clearfix" style="margin-top: 2rem;">          
        <input type="Submit" role="button" name="Submit" class="btn btn-irenic float-left addform" tabindex="0" value="Signup" >
		
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
  </div>
</div>


<script type="application/javascript">
function validateForm()
{
	var numericExpression = /^[0-9]+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaspaceExp = /^[a-zA-Z\s]+$/;
	var alphanumericExp = /^[0-9a-zA-Z]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	
	var conditionstatus="true";

	document.getElementById("idname").innerHTML = "";
	document.getElementById("idemailid").innerHTML = "";
	document.getElementById("idphoneno").innerHTML = "";
	document.getElementById("idusername").innerHTML = "";
	document.getElementById("idpassword").innerHTML = "";
	
	if(!document.getElementById("name").value.match(alphaspaceExp))
	{
		document.getElementById("idname").innerHTML = "Name should contain alphabets only...";
		conditionstatus="false";
	}	
	if(document.getElementById("name").value == "")
	{
		document.getElementById("idname").innerHTML = "Name should not be empty..";
		conditionstatus="false";
	}
	if(!document.getElementById("emailid").value.match(emailExp))
	{
		document.getElementById("idemailid").innerHTML = "Entered Email ID is not in valid format...";
		conditionstatus="false";
	}
	if(document.getElementById("emailid").value == "")
	{
		document.getElementById("idemailid").innerHTML = "Email id should not be empty..";
		conditionstatus="false";
	}
	if(!document.getElementById("phoneno").value.match(numericExpression))
	{
		document.getElementById("idphoneno").innerHTML = "Entered Phone number is not in valid format..10";
		conditionstatus="false";
	}
	if(document.getElementById("phoneno").value == "")
	{
		document.getElementById("idphoneno").innerHTML = "Phone No should not be empty..";
		conditionstatus="false";
	}
	if(!document.getElementById("username").value.match(alphaspaceExp))
	{
		document.getElementById("idusername").innerHTML = "Name should contain alphabets only...";
		conditionstatus="false";
	}
	if(document.getElementById("username").value == "")
	{
		document.getElementById("idusername").innerHTML = "user Name should not be empty..";
		conditionstatus="false";
	}
	if(document.getElementById("password").value == "")
	{
		document.getElementById("idpassword").innerHTML = "Password should not be empty..";
		conditionstatus="false";
	}
	
	if(conditionstatus == "true")
	{
		return true;
	}
	else
	{
		return false;
	}	
}
</script>


</body>

</html>
