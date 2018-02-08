<?php
 include("class/users.php");
 
 $register=new users;
 $regno=test_input($_POST["regno"]);
 $password=test_input($_POST["password"]);
 $cpassword=test_input($_POST["cpassword"]);
 $name=test_input($_POST["name"]);
 $email=test_input($_POST["email"]);
 $mob=test_input($_POST["mob"]);
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 if($cpassword===$password){
 $sql="INSERT INTO user(regno,password,name,email,mob) VALUES('$regno','$password','$name','$email','$mob')";
 $register->signup($sql);
 }
 
 
?>