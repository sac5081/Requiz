<?php
 include("class/users.php");
 $login=new users;
 $regno=test_input($_POST["regno"]);
 $password=test_input($_POST["password"]);
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
  $result=$login->signin($regno,$password);
  if($result){
	 $login->url("home.php?sucess=t") ;
	}
	else
	{
	 $login->url("loginhtml.php?sucess=f") ;	
	}
 
 
 
?>

