<?php
include("class/users.php");
if((isset($_SESSION['regno'])))
{ 
	header('location:home.php');
}
else
{
	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  function validateForm()
  {
    var d = new Date();
    var s=d.getFullYear();
    var x = document.forms["form1"]["regno"].value;
	if(x>10000000 && x<100000000)
	{
	   var b=x/10000;
       var c=x%10000;
       if(b<s-4 || b>s || c<1000 || c>9999){
	   alert("Enter valid registration number");
	   return false;
	   }
	}
    else
    {
      alert("Enter valid registration number");
	    return false;
    }
	var x = document.forms["form1"]["mob"].value;
	if(x<7000000000 || x>9999999999)
	{
	  alert("Enter valid mobile number");
	    return false;
	}
	
  }
 
   function myFunction() {
    var x = document.getElementById("name");
    x.value = x.value.toUpperCase();
	var x = document.getElementById("email");
    x.value = x.value.toUpperCase();
   }

  </script>
</head>
<body>

 <center><h2>MNNIT QUIZ PORTAL</h2><center><hr>
<div class="container"><br><br>
	<div class="col-sm-2"></div> 
	<div class="col-sm-8">
		<div class="panel panel-primary">
			<div class="panel-heading"><center><h2>USER SIGNUP<h2></center></div>
				<div class="panel-body">
					 <form name="form1" onsubmit="return validateForm()" class="form-horizontal" method="post" action="signup.php" >
					    <div class="form-group">
						  <label class="control-label col-sm-2" for="name">Name :</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" onchange="myFunction()" id="name" name="name" placeholder="Enter Name" required>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="regno">Reg no. :</label>
						  <div class="col-sm-10">
							<input type="number" class="form-control" id="regno" name="regno" placeholder="Enter Reg no." required>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Email :</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" onchange="myFunction()" id="email" name="email" placeholder="Enter Email id" required>
						  </div>
						</div><div class="form-group">
						  <label class="control-label col-sm-2" for="mob">Mob no. :</label>
						  <div class="col-sm-10">
							<input type="number" class="form-control" id="mob" name="mob" placeholder="Enter Mob no." required>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="pwd">Password:</label>
						  <div class="col-sm-10">          
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
						  <div class="col-sm-10">          
							<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm password" required>
						  </div>
						</div>
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-sucess">Signup</button>
						  </div>
						</div>
					  </form> 
                </div>
		    </div>
		</div>
	</div>
</div>

</body>
</html>
