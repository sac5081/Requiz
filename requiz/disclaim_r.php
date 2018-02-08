<?php
include("class/users.php");
if(!(isset($_SESSION['regno'])))
{ 
	die("Acess Denied !.. Login to acess the page");
}
else
{
	/*$regno=$_SESSION['regno'];
	$register=new users;
	$register->profile($regno);
	foreach($profile->data as $a)
	$uname=$a['name'];
	
	$profile->quiz1();
	$profile->quiz2();*/
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

<div class="container">
    <center><h2>MNNIT QUIZ PORTAL</h2></h2><hr>
   <div class='col-sm-2'></div>
   <div class='col-sm-8' >
   <div class="panel panel-info">
      <div class="panel-heading">Disclaimer About Quiz</div>
      <div class='list-group'>
	  <ul style'>
	   <li class="list-group-item">This portal is dedicated to MNNIT ALLAHABAD students only.</li>
	   <li class="list-group-item">This quiz is an individual event.</li>
	   <li class="list-group-item">This quiz consits of single choice and multiple choice questions.</li>
	   <li class="list-group-item">Each question has different time limt acoording to difficulty</li>
	   <li class="list-group-item">Marking scheme will be shown to you during attemptind the quiz</li>
	   <li class="list-group-item">click on register to register the quiz</li>
	  </ul>
	  </div>
   </div>
   <form method='post' action='register.php'>
   <input type="hidden" name="qid" value="<?php print $qid; ?>"/ >
   <button type="submit" class="btn btn-success">Register</button>
   </form>
   <div>	
</div>






</body>
</html>