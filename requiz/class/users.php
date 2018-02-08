<?php
session_start();
class users
{ 
	public $host="localhost";
	public $user="root";
	public $password="";
	public $db="quizzer";
	public $conn;
	public $data;
	public $qdata1;
    public $qdata3;
	public $squestions;
	
	public function __construct()
		{ 
		   $this->conn=new mysqli($this->host,$this->user,$this->password,$this->db);
		   if(!$this->conn)
			   {
				   die ("database connection failed".$this->conn->connect_errno);
			   }
		}
	public function signup($data)
		{
			$this->conn->query($data);
		}
	public function signin($regno,$password)
		{
			$sql="select * from user where regno='$regno' and password='$password'";
			$result=$this->conn->query($sql);
			if($result->num_rows ==1)
			{   
		        $_SESSION['regno']=$regno;
				return true;
			}
			else 
				return false;
		}
	public function url($url)
	    {
			header("location:".$url);	
	    }
	public function profile($regno)
		{
			$sql="select * from user where regno='$regno'";
			$result=$this->conn->query($sql);
			$row=$result->fetch_array(MYSQLI_ASSOC);
			if($result->num_rows ==1)
			$this->data[]=$row;
		    return $this->data;
	    }
	public function quiz1()
		{
			$sql="select * from quiz ";
			$result=$this->conn->query($sql);
			if($result->num_rows >0){
			 while($row=$result->fetch_array(MYSQLI_ASSOC)){
			 $this->qdata1[]=$row;
			 }
			}
		    return $this->qdata1;
	    }
	
	public function fetchques($qid)
	    {
		    $sql2="select * from question where qid='$qid'";
			$result=$this->conn->query($sql2);
			if($result->num_rows >0){
			 while($row=$result->fetch_array(MYSQLI_ASSOC)){
			 $this->squestions[]=$row;
			 }
			  return $this->squestions;
			}
			
			
		}
	
	public function quizname($qid)
		{
			$sql="select * from quiz where  qid='$qid'";
			$result=$this->conn->query($sql);
			if($result->num_rows >0){
			 while($row=$result->fetch_array(MYSQLI_ASSOC)){
			 $this->qdata3[]=$row;
			 }
			}
		    return $this->qdata3;
	    }
	public function answer($data)
	{
		$ans=implode(" ",$data);
		//echo $ans;
		$right=0;
		$wrong=0;
		$skip=0;
		$query=$this->conn->query("select id,ans from question where qid='".$_SESSION['qid']."'");
		//print_r($query);
		while($qest=$query->fetch_array(MYSQLI_ASSOC))
		{
			if($qest['ans']==$_POST[$qest['id']])
				$right++;
			elseif($_POST[$qest['id']]=="5")
			   $skip++;
			 else 
				$wrong++;
			
		}
		echo "<h2><center>MNNIT QUIZ PORTAL</center></h2><hr>";
		echo "<center><h3>Hey ! <strong>";
		echo $_SESSION['name'];
		echo "<br></strong><br >Your Quiz result<br>";
		echo "<br></center>";
		
		echo "<center>right ".$right."<br>"; 
		echo "wrong ".$wrong."<br>"; 
		echo "unattempt ".$skip."<br><center><h3>" ; 
		
	}
	
}
 
?>