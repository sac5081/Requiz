<?php
include("class/users.php");
if(!(isset($_SESSION['regno'])))
{ 
	die("Acess Denied !.. Login to acess the page");
}
else
{
	
	$regno=$_SESSION['regno'];
	$qid=$_GET['qid'];
	$_SESSION['qid']=$qid;
	$ques=new users;
	$ques->quizname($qid);
	//print_r(($ques->qdata3));
	foreach($ques->qdata3 as $a)
	$qname=$a['qname'];
	//echo $qname;
	$ques->fetchques($qid);
	//print_r(sizeof($ques->squestions));
	$i=1;
	
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <center><h2>MNNIT QUIZ PORTAL</h2></center><hr><br>
<div class="container">
<div class='col-sm-2'></div>
 <div class='col-sm-8'>
  <h3><?php echo $qname;?> Quiz</h3><br><br>
 <h4>Marking Scheme</h4>
 <ul>
 <li>+1 mark will be awarded for each right single choice question</li>
 <li>0 marks will be awarded for each wrong answer or skipping of single choice question  </li>
 
 </ul><br>
  <h4>Single Choice Questions</h4><br>
     <form method='post' action='answer1.php'>
	 <?php foreach ($ques->squestions as $questions) {?>
	<table class="table table-bordered">
    <thead>
      <tr class='danger'>
        <th>Ques<?php echo $i;?>. &emsp;<?php echo $questions['question']?> ? </th>
      </tr>
    </thead>
    <tbody>
	  <tr class='info'>
        <td>&nbsp;1&emsp;<input type='radio' name=<?php echo $questions['id'];?> value='1'><?php echo $questions['opt1'];?> </td>
      </tr>
      <tr class='sucess'>
        <td>&nbsp;2&emsp;<input type='radio' name=<?php echo $questions['id'];?> value='2'><?php echo $questions['opt2'];?></td>
      </tr>
	  <tr class='info'>
        <td>&nbsp;3&emsp;<input type='radio' name=<?php echo $questions['id'];?> value='3'><?php echo $questions['opt3'];?></td>
      </tr>
	  <tr class='sucess'>
        <td>&nbsp;4&emsp;<input type='radio' name=<?php echo $questions['id'];?> value='4'><?php echo $questions['opt4'];?></td>
      </tr>
	   <tr class='info'>
        <td><input type='radio' checked='checked' name=<?php echo $questions['id'];?> style='display:none' value='5'></td>
      </tr>
	  </tbody>
     </table>
	 <?php  $i++ ;} ?>
	 <center><input type='submit' class='btn btn-success' value='Sumbit Quiz'/></center>
	 </form>
</div>	  
</div>      

   

</body>
</html>











