<?php
include("class/users.php");
if(!(isset($_SESSION['regno'])))
{ 
	die("Acess Denied !.. Login to acess the page");
}
else
{
	$regno=$_SESSION['regno'];
	$qid=$_SESSION['qid'];
	$answer=new users;
	$answer->answer($_POST);
	
	
}
?>