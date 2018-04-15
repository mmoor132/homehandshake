<?php
  session_start();
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
  <head>

  <style>
    body {
      margin: 0;
      font-family: Arial;
    }

    .top-container {

      background-color: #f1f1f1;
      padding: 30px;
      text-align: center;
    }

    .content {

      padding: 16px; 

    }

    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1;
    }

    .sticky + .content {

      padding-top: 100px;

    }

    .container {
        position: relative;
        text-align: center;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
  </style>

  <body>
    <!--Jumbotron code-->
      <div>
        <img src="img/KSU Fountain.jpg" alt = "Header Image" style="width: 100%; height: 100%;">
      </div>
    <!--END Jumbotron code-->

    <!--Navbar code-->
      <div class="header" id="myHeader">
        <nav class="navbar navbar-inverse" style="background-color:#002664">
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
                <li><a href="browselisting.php" style="color: white">Browse Listings</a></li>
                <?php
                  if(isset($_SESSION["userid"])){
                    echo "<li><a href='myaccount.php' style='color: white'>My Account</a></li>";
                  } else {
                    echo "<li><a href='loginpage.html' style='color: white'>Login</a></li>";
                  }
                ?> 
              </ul>
            </div>
            </center>
          </div>
        </nav>
      </div>
    <!--END Navbar code-->

    <br>

    <!--Title Font-Century-->
      <center>
      <h1 style="font-style: Century;">Welcome to Housing Handshakes!</h1>
      <h4>Housing Handshakes is the web app that advertises short-term vacancy in a house or apartment.</h4>
      </center>
    <!-- END of Title-->

    <!--Create Profile Div 1-->
      <form action="createacct.php" method="post" enctype = "multipart/form-data">
        <center>
          <div class="container-fluid" style="background-color: grey; border-style: solid; margin: 2px;">
            <br>
            <div class="container"> 
              <!--Row 1-->
                <div class="row cent">
                  <div class="col-md-4 space" >
                    <div class="col-25">
                     <label for="firstname">First Name</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="firstname" name="firstname" placeholder="Your first name.." style="width: 50%">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                      <label for="lastname">Last Name</label>
                    </div>
                    <div class="col-75">
                     <input type="text" id="lastname" name="lastname" placeholder="Your last name.." style="width: 50%">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                      <label for="uname">Username</label>
                    </div>
                    <div class="col-75">
                     <input type="text" id="uname" name="uname" placeholder="Your Username.." style="width: 50%">
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
                      <input type="password" id="pass" name="pass" placeholder="Your password..." style="width: 50%">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                      <label for="cpass">Confirm Password</label>
                    </div>
                    <div class="col-75">
                     <input type="password" id="cpass" name="cpass" placeholder="Confirm password..." style="width: 50%">
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
                     <input type="text" name="address" placeholder="Your permanent address..." style="width: 50%">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                      <label for="city">City</label>
                    </div>
                    <div class="col-75">
                     <input type="text" id="city" name="city" placeholder="Your city..." style="width: 50%">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                      <label for="state">State</label>
                    </div>
                    <div class="col-75">
                      <select name="state" style="width: 50%">
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
                      <input type="text" id="zip" name="zip" placeholder="Your Zip Code.." style="width: 50%">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                     <label for="age">Age</label>
                    </div>
                    <div class="col-75">
                      <input type="number" id="age" name="age" min="18" max="100" placeholder="Your age..." style="width: 50%">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                     <label for="gender">Gender</label>
                    </div>
                    <div class="col-75">
                      <select name="gender" style="width: 50%">
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
                      <input style="width: 50%" id="phone" requied name="telnum" type="tel">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                      <label for="email">E-Mail</label>
                    </div>
                    <div class="col-75">
                     <input type="email" id="email" name="email" placeholder="example@gmail.com" style="width: 50%">
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
                      <textarea  style="width: 75%; height: 75%" name="bio" placeholder="Description of you..."></textarea>
                  </div>
                  </div>
                </div>
              <!--End Row 6-->

              <br><br>
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
        <button class="btn" type="submit" name="submit" value="Submit" style="background-color: #002664; color: white">Create Account</button>
      </center>
    <!--End Create Account Button-->

    </form>

    <br><br>

    <!--Footer-->
      <footer style="background-color:#002664;">
        <center>
          <!--Links-->
            <div class="container">
              <div class="row"><br>
                <div class="col-md-4">
                  <a href="homepage.php" style="color: white"> Home </a>
                </div>
                <div class="col-md-4">
                  <a href="browselisting.php" style="color: white"> Browse Listings </a>
                </div>
               <div class="col-md-4">
                  <?php
                      if(isset($_SESSION["userid"])){
                        echo "<a href='myaccount.php' style='color: white'>My Account</a>";
                      } else {
                        echo "<a href='loginpage.html' style='color: white'><span class='glyphicon glyphicon-log-in'></span> Login </a>";
                      }
                  ?> 
                </div>
              </div>
            </div>
          <!--End Links-->
        </center>
          <br>
          <!--Copyright-->
        <div>
          <center>
            <span style="color: white;">2018 © Copyright Team 3 Solutions. All rights reserved.</span>
          </center>
        </div>
        <!--End of Copyright-->
        <br>
      </footer>
    <!--END Footer-->

    <!-- Start Sticky Navbar script -->
      <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
      </script>
    <!-- END Sticky Navbar script -->

    <!-- Start Phone Textboxb script -->
      <script>
        $(":input").inputmask();

        $("#phone").inputmask({"mask": "(999) 999-9999"});
      </script>
    <!-- END Phone Textboxb script -->  
  </body>
</html>