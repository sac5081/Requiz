<?php
include("class/users.php");
if(isset($_SESSION['regno']))
{ 
    echo $_SESSION['regno'];
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
</head>
<body>
 <center><h2>MNNIT QUIZ PORTAL</h2><center><hr>
 <?php
  if(isset($_GET['sucess']) && $_GET['sucess']=="f")
  {
    echo "Seems registration number password wrong !!"; 
  }
 ?>
<div class="container"><br><br>
	<div class="col-sm-2"></div> 
	<div class="col-sm-8">
		<div class="panel panel-primary">
			<div class="panel-heading"><center><h2>USER LOGIN<h2></center></div>
				<div class="panel-body">
					  <form class="form-horizontal" method="post" action="login.php">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="regno">Reg no. :</label>
						  <div class="col-sm-10">
							<input type="number" class="form-control" id="regno" name="regno" placeholder="Enter Reg no." required>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="pwd">Password:</label>
						  <div class="col-sm-10">          
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
						  </div>
						</div>
						
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-sucess">Login</button>
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
