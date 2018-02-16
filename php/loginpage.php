<?php
  include('login.php'); // Includes Login Script

  if(isset($_SESSION['login_user'])){
    header("location: profile.php");
  }
?>

<!Doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Bootstrap 4
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  END Bootstrap 4-->

  <!--Bootstrap 3-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--END Bootstrap 3-->

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="css\logincss.css" type="text/css" rel="stylesheet" />
</head>

<body>

<!--Jumbotron code-->
	<div>
	<img src="img\image.jpg" style="width: 100%; height: 400px;">
	</div>
<!--END Jumbotron code-->

<!--Navbar code-->
<nav class="navbar navbar-inverse" style="background-color: maroon">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <center>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="C:\xampp\htdocs\html\homepage.html" style="color: white">Home</a></li>
        <li><a href="" style="color: white">Housing Handshakes</a></li>
        <li><a href="C:\xampp\htdocs\php\listings.php" style="color: white">Housing Listing</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="C:\xampp\htdocs\php\createaccount.php" style="color: white"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="C:\xampp\htdocs\php\loginpage.php" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
    </center>
  </div>
</nav>

<!--END Navbar code-->

<br>

<!--Login Form-->

<form action="" method="post">
  <div class="imgcontainer">
    <img src="img\logo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input id="name"  name="username" type="text" placeholder="Enter Username" required>

    <label><b>Password</b></label>
    <input id="password" name="password" type="password" placeholder="Enter Password"  required>
        
    <button class="loginbutton" style="background-color: maroon" type="submit" name="submit" value=" Login ">Login</button>
    <label>
    
      <input type="checkbox" checked=""> Remember me
    </label>
  </div>

  <span><?php echo $error; ?></span>

  <div class="container" style="background-color:#f1f1f1">
    <a href="createaccount.html"><button style="color: white; background-color: maroon;" type="button" class="cancelbtn">Create Account</button></a>
    <a href="#"><span class="psw">Forgot password?</span></a>
  </div>
</form>

<!--END of Login Form-->

<br><br><br><br>

<!--Footer-->
<footer style="background-color:maroon;"">

<center>

	<!--Links-->
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="home2.html" style="color: white">Home</a>
			</div>
			<div class="col-md-3">
				<a href="home2.html" style="color: white">Housing Handshakes</a>
			</div>
			<div class="col-md-3">
				<a href="home2.html" style="color: white">Housings Listings</a>
			</div>
			<div class="col-md-3">
				<a href="home2.html" style="color: white">Login</a>
			</div>
		</div>
	</div>
	<!--End Links-->

</center>
	<br>

	<!--Copyright-->
	<div>
		<center>
			<span style="color: white;">2018 © Copyright Orange Solutions. All rights reserved.</span>
		</center>
	<div>
	<!--End of Copyright-->

	<br>

</footer>
<!--END Footer-->

</body>
</html>