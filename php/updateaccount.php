<?php
$servername = "localhost";
$username = "administrator";
$password = "";
$dbname = "homehandshake";

session_start();

$userid = $_SESSION["userid"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Query For Active Listing
$stm = $conn->prepare("SELECT * FROM users where userid = '$userid' ");

// Execute Query
$stm->execute();

// Get Results
$result = $stm->get_result();

?>


<!Doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Bootstrap 3-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--END Bootstrap 3-->

</head>

<style>
  
.space{
  padding-top: 10px;
}

  @media only screen and (max-width: 991px){
    .cent{
    text-align: center;
    }
    .space{
      padding-top: 8px;
    }
  }

</style>

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
        <li class="active"><a href="homepage.html" style="color: white">Home</a></li>
		<li><a href="myaccount.html" style="color: white">My Account</a></li>
        <li><a href="browselisting.php" style="color: white">Browse Listings</a></li>
        <li><a href="createaccount.html" style="color: white"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
        <li><a href="loginpage.html" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
      </ul>
    </div>
    </center>
  </div>
</nav>


<!--END Navbar code-->



<br>

<!--Header-->
<center>
  <div class="container">
    <h1>Welcome to Housing Handshakes!</h1>
  </div>


<div class="container">
  <h3>Create Account</h3>
</div>
<!--End Header-->

</center>

<!--Create Profile Div 1-->
<center>
<form action="alteraccount.php" method="post" enctype = "multipart/form-data">
  <div class="container-fluid" style="background-color: grey; border-style: solid; margin: 2px;">
    <br>
    <div class="container">
      <div class="container">
          
        <?php
          while($row = $result->fetch_assoc())
          {
            
        ?>

        <!--Row 1-->
        <div class="row cent">
          <div class="col-md-4 space" >
            <div class="col-25">
             <label for="firstname">First Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="firstname" name="firstname" value="<?php echo $row['fname'] ?>" style="width: 50%">
            </div>
          </div>
          <div class="col-md-4 space">
            <div class="col-25">
              <label for="lastname">Last Name</label>
            </div>
            <div class="col-75">
             <input type="text" id="lastname" name="lastname" value="<?php echo $row['lname'] ?>" style="width: 50%">
            </div>
          </div>
          <div class="col-md-4 space">
            <div class="col-25">
              <label for="uname">Username</label>
            </div>
            <div class="col-75">
             <input type="text" id="uname" name="uname" value="<?php echo $row['username'] ?>" style="width: 50%">
            </div>
          </div>
        </div>
        <!--End Row 1-->

        <!--Row 2-->
        <div class="row cent">
          <div class="col-md-4 space">
            <div class="col-25">
             <label for="pass">Password</label>
            </div>
            <div class="col-75">
              <input type="password" id="pass" name="pass" value="<?php echo $row['password'] ?>" style="width: 50%">
            </div>
          </div>
          <div class="col-md-4 space">
            <div class="col-25">
              <label for="cpass">Confirm Password</label>
            </div>
            <div class="col-75">
             <input type="password" id="cpass" name="cpass" value="<?php echo $row['password'] ?>" style="width: 50%">
            </div>
          </div>
          <div class="col-md-4 space">
            <!--BLANK-->
          </div>          
        </div>
        <!--End Row 2-->

        <!--Row 3-->
        <div class="row cent">
          <div class="col-md-4 space">
            <div class="col-25">
              <label for="address">Permanent Address</label>
            </div>
            <div class="col-75">
             <input type="text" name="address" value="<?php echo $row['address'] ?>" style="width: 50%">
            </div>
          </div>
          <div class="col-md-4 space">
            <div class="col-25">
              <label for="city">City</label>
            </div>
            <div class="col-75">
             <input type="text" id="city" name="city" value="<?php echo $row['city'] ?>" style="width: 50%">
            </div>
          </div>
          <div class="col-md-4 space">
            <div class="col-25">
              <label for="state">State</label>
            </div>
            <div class="col-75">
              <select name="state" style="width: 50%">
                <option value='<?php echo $row['state']?>' selected='selected'><?php echo $row['state']?></option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>       
            </div>
          </div>
        </div>
        <!--End Row 3-->

        <!--Row 4-->
        <div class="row cent">
          <div class="col-md-4 space">
            <div class="col-25">
              <label for="country">Zip Code</label>
            </div>
            <div class="col-75">
              <input type="text" id="zip" name="zip" value="<?php echo $row['zip'] ?>" style="width: 50%">
            </div>
          </div>
          <div class="col-md-4 space">
            <div class="col-25">
             <label for="age">Age</label>
            </div>
            <div class="col-75">
              <input type="number" id="age" name="age" min="18" max="100" value="<?php echo $row['age'] ?>" style="width: 50%">
            </div>
          </div>
          <div class="col-md-4 space">
            <div class="col-25">
             <label for="gender">Gender</label>
            </div>
            <div class="col-75">
              <select name="gender" style="width: 50%" selected="<?php echo $row['gender'] ?>">
                <option value='<?php echo $row['gender']?>' selected='selected'><?php echo $row['gender']?></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="Transgender Male">Transgender Male</option>
                <option value="Transgender Female">Transgender Female</option>
                <option value="Gender Queer">Gender Queer</option>
                <option value="Non-Binary">Non-Binary</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>          
        </div>
        <!--End Row 4-->

        <!--Row 5-->
        <div class="row cent">
          <div class="col-md-4 space">
            <div class="col-25">
             <label for="telnum">Phone Number</label>
            </div>
            <div class="col-75">
              <input style="width: 50%" id="phone" requied id="telnum" value="<?php echo $row['phone'] ?>" name="telnum" type="text" />
            </div>
          </div>
          <div class="col-md-4 space">
            <div class="col-25">
              <label for="email">E-Mail</label>
            </div>
            <div class="col-75">
             <input type="email" id="email" name="email" placeholder="example@gmail.com" style="width: 50%" value="<?php echo $row['email'] ?>">
            </div>
          </div>
        </div>
        <!--End Row 5-->

        <!--Row 6-->
        <div class="row cent">
          <div class="col-md-12 space">
            <div class="col-25">
             <label for="description">Your bio...</label>
            </div>
            <div class="col-75" style="height: 75%">
              <textarea  style="width: 75%; height: 75%" name="bio" value="<?php echo $row['bio'] ?>"></textarea>
          </div>
          </div>
        </div>
        <!--End Row 6-->

         <?php
          }
          ?>

        <br><br>
      </div>
    </div>
  </div>
</center>
<!--End Create Profile Div 1-->

<br>

<!--Create Acount Button-->
<center>
  <button class="btn" type="submit" name="submit" value="Submit" style="background-color: maroon; color: white">Alter Account</button>
</center>
<!--End Create Account Button-->

</form>

<br><br>

<!--Footer-->
<footer style="background-color:maroon;"">

<center>

  <!--Links-->
  <div class="container">
    <div class="row"><br>
      <div class="col-md-2">
        <a href="homepage.html" style="color: white"> Home </a>
      </div>
	  <div class="col-md-2">
        <a href="myaccount.html" style="color: white"> My Account </a>
      </div>
      <div class="col-md-2">
        <a href="browselisting.php" style="color: white"> Browse Listings </a>
      </div>
      <div class="col-md-2">
        <a href="createaccount.html" style="color: white"><span class="glyphicon glyphicon-user"></span> Sign Up </a>
      </div>
	  <div class="col-md-2">
        <a href="loginpage.html" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login </a>
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

<script>
  $(":input").inputmask();

  $("#phone").inputmask({"mask": "(999) 999-9999"});
</script>

</body>
</html>