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
        <li class=""><a href="homepage.html" style="color: white">Home</a></li>
        <li><a href="" style="color: white">Housing Handshakes</a></li>
        <li><a href="listings.php" style="color: white">Housing Listing</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="createaccount.php" style="color: white"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="loginpage.php" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
</center>

<div class="container">
  <h3>Create Account</h3>
</div>
<!--End Header-->


<!--Create Profile Div 1-->
<center>
<div class="container-fluid" style="background-color: grey; border-style: solid; margin: 2px;">
  <br>
  <div class="container">
    <form action="action_page.php">
      <div class="container">
        
        <!--Row 1-->
        <div class="row">
          <div class="col-md-4">
            <div class="col-25">
             <label for="fname">First Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="lname" name="firstname" placeholder="Your first name..">
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-25">
              <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
             <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            </div>
          </div>
          <div class="col-md-4">
            <!--Blank-->
          </div>
        </div>
        <!--End Row 1-->

<br>

        <!--Row 2-->
        <div class="row">
          <div class="col-md-4">
            <div class="col-25">
             <label for="fname">Date of Birth</label>
            </div>
            <div class="col-75">
              <input type="text" id="dob" name="dob" placeholder="XX/XX/XXXX">
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-25">
             <label for="fname">Campus</label>
            </div>
            <div class="col-75">
              <input type="text" id="campus" name="campus" placeholder="Your campus..">
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-25">
             <label for="fname">Date of Birth</label>
            </div>
            <div class="col-75">
              <select>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="Other">Other...</option>
              </select> 
            </div>
          </div>
        </div>
        <!--End Row 2-->

<br>

        <!--Row 3-->
        <div class="row">
          <div class="col-md-4">
            <div class="col-25">
              <label for="lname">Permanent Address</label>
            </div>
            <div class="col-75">
             <textarea placeholder="Your permanent address..."></textarea>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-25">
              <label for="country">State</label>
            </div>
            <div class="col-75">
              <select>
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
          <div class="col-md-4">
            <div class="col-25">
              <label for="country">Zip Code</label>
            </div>
            <div class="col-75">
              <input type="text" id="zip" name="zip" placeholder="Your Zip Code..">
            </div>
          </div>
        </div>
        <!--End Row 3-->

        <br>
      </div>
    </form>
  </div>
</div>
</center>
<!--End Create Profile Div 1-->

<br>

<!--Create Profile Div 2-->
<center>
<div class="container-fluid" style="background-color: grey; border-style: solid; margin: 2px;">
  <br>
  <button type="button" class="btn btn-warning">Warning</button>
    <h5 style="font-style: italic; color: white">
      Housing Handshakes connects you to people who are looking to enter a subleasing agreement - nothing more. Use discretion when sharing personal information with others over the internet. We are not resposible for any contractual relationships or harm inflicted from utilizing this service.
    </h5>
    <input type="checkbox" name="agreement"><span style="color: white"> I agree to the terms of using this service.</span>
    <br><br>
</div>
  <br>
</center>
<!--End Create Profile Div 2-->

<!--Create Acount Button-->
<center>
  <button type="button" class="btn" style="background-color: maroon; color: white">Create Account</button>
</center>
<!--End Create Account Button-->

<br><br>

<!--Footer-->
<footer style="background-color:maroon;"">

<center>

  <!--Links-->
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="homepage.html" style="color: white">Home</a>
      </div>
      <div class="col-md-3">
        <a href="Contactus.html" style="color: white">Housing Handshakes</a>
      </div>
      <div class="col-md-3">
        <a href="listings.php" style="color: white">Housings Listings</a>
      </div>
      <div class="col-md-3">
        <a href="loginpage.php" style="color: white">Login</a>
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