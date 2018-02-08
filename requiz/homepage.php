<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
  <div class="panel panel-default">
    <div class="panel-body"><center><h2>MNNIT QUIZ PORTAL</h2></center></div>
<!-- top navigation bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
		<!-- NOT NEEDED NOW
		<li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signuphtml.php"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="loginhtml.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">

<div class="col-sm-6">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="a.jpg" alt="Image1" width="460" height="345">
        <div class="carousel-caption">
          <h3>Ideate !..</h3>
          <p>It always seems impossible unitl it is started</p>
        </div>
      </div>

      <div class="item">
        <img src="b.jpg" alt="Image2" width="460" height="345">
        <div class="carousel-caption">
          <h3>Think !..</h3>
          <p>Thinking in combination of art and skill</p>
        </div>
      </div>
    
      <div class="item">
        <img src="c.jpg" alt="Image3" width="460" height="345">
        <div class="carousel-caption">
          <h3>Process !..</h3>
          <p>Be dynamic,never stop</p>
        </div>
      </div>

      <div class="item">
        <img src="d.jpg" alt="Image4" width="460" height="300">
        <div class="carousel-caption">
          <h3>Improve !..</h3>
          <p>Learning is a continous process,</p><br>
		  <p>so learn and improve</p>
        </div>
     </div>
  
    </div>

      

 </div>
</div>

  

    <div class="col-sm-6 text-left"> 
      <h1>Welcome</h1>
	  <p>
	    Every engineer some or the other has to face the college placements either for internship for full time employment. These procedures generally consist of an online/written test followed by some GDs and interviews. In our college, to give the students an idea about the placement session, every branch generally conducts come mock test sessions consisting of variety of questions. Due to absence of a local interface it sometime becomes difficult of the students to host reliable online. So here we come up with a solution to this where we make an online interface for the college placements sessions.
	  </p>
	  <hr>
      <h3>Highlights</h3>
      <ul>
	    <li>  User can login/register here in this website. </li>
		<li>  A User can host or conduct a test on this platform.</li>
		<li>  Anyone can view the profile of any user by serching it via its reg. no.</li>
		<li>  User should register for the test to appear in.</li>
	  </ul>
    </div>
    
  </div>
</div>


</body>
</html>
