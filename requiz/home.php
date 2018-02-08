<?php
include("class/users.php");
if(!(isset($_SESSION['regno'])))
{ 
	die("Acess Denied !.. Login to acess the page");
}
else
{
	$regno=$_SESSION['regno'];
	$profile=new users;
	$profile->profile($regno);
	foreach($profile->data as $a)
	$uname=$a['name'];
	$_SESSION['name']=$uname;
	$profile->quiz1();
	
	
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
  <ul class="nav nav-tabs">
    
	<li><a data-toggle="tab" href="#menu1">My Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">Available Quizes</a></li>   
    <li><a data-toggle="tab" href="#menu3">Update Profile</a></li>
	
  </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		<!--later on change it link not assigned -->
    </ul>
	<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $uname;  ?></a></li> 
		<!--later on change it link not assigned -->
    </ul>
	
 </div>
 
 
 
     <div class='col-sm-1'></div>
    <div class='col-sm-10'>
	<div class="tab-content">
			
      <div id="menu1" class="tab-pane fade in active">
		    <h3>My Profile</h3>
		           
				  
			 <!-- show profile-->
			<?php
		    foreach($profile->data as $prof)
			{?>
			  <table class="table">
				  <tr>
					<td><?php echo "Profile image ";?></th>
					<td><?php echo "<img src='images/".$prof['image']." ' alt='image not uploaded' width='128' height='128'>";  ?></th>
				  </tr>
				  <tr>
				   <td><h3>Personal Details</h3><td>
				  </tr>
				
				  <tr>
					<td>Name</td>
					<td><?php echo $prof['name'];?></td>
					
				  </tr>
				  <tr>
					<td>Email</td>
					<td><?php echo $prof['email'];?></td>
				  </tr>
				  <tr>
					<td>Moibile No.</td>
					<td><?php echo $prof['mob'];?></td>
				  </tr>
				  <tr>
					<td>Date of Bitrh</td>
					<td><?php echo $prof['dob'];?></td>
				  </tr>
				  <tr>
					<td>Nationality</td>
					<td><?php echo $prof['nation'];?></td>
				  </tr>
				  <tr>
					  <td><h3>Academic Details</h3></td>
					  <td>  </td>
				  </tr>
				  <tr>
					<td>Registration No.</td>
					<td><?php echo $prof['regno'];?></td>
				  </tr>
				  <tr>
					<td>Program</td>
					<td><?php echo $prof['program'];?></td>
				  </tr>
				  <tr>
					<td>Branch</td>
					<td><?php echo $prof['branch'];?></td>
				  </tr>
				  <tr>
					<td>Current Semester</td>
					<td><?php echo $prof['semester'];?></td>
				  </tr>
				  <tr>
					<td>S.P.I </td>
					<td><?php echo $prof['spi'];?></td>
				  </tr>
		      </table>
				<?php }?>
			   <h3>Ateempted Quiz</h3>
				  <ul>
				  <li>jncfovnofvmlofmvlofmvklfmnvkljfmvkefmvkefvkj</li>
				  <li>jncfovnofvmlofmvlofmvklfmnvkljfmvkefmvkefvkj</li>
				  <li>jncfovnofvmlofmvlofmvklfmnvkljfmvkefmvkefvkj</li>
				  </ul>


		    <!-- show profile-->
	   </div>
		
		
		<div id="menu2" class="tab-pane fade">
			<h3>Available Quiz</h3>
			
		  <!-- show available-->
		   <div class="list-group">
		   
			 <?php
			 foreach($profile->qdata1 as $availquiz)
			 {
			 ?>
			 <a href="showques.php?qid=<?php echo $availquiz['qid'];?>" class="list-group-item"><?php echo $availquiz['qname'];?></a>
			 <?php }?>
		   </div>
		  <!-- show available-->  
		</div>
		
		
		  
		  
		  
    </div>
	</div>
	

</body>
</html>