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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--END Bootstrap 3-->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  </head>

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
                <li class="active"><a href="homepage.php" style="color: white">Home</a></li>
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

    <!--Legal Div-->
      <center>
        <div class="container" style="border-style: solid; margin: 2px;">
          <span style="font-weight:bold; font-size: 20px;">
            Legal Stuff: Discrimination by race/origin, age, family status ("no kids", "ideal for one"), disability, creed, sexual orientation, or income source is illegal under fair housing law. Describe premises, not people.
          </span>
        </div>
      </center>
    <!--End Legal Div-->

    <br><br>

    <!--Create Listing Div-->
      <div id="" class="container-fluid" style="border-style: solid; margin: 2px;">
        <br>
        <div class="container">
          <form action="createlisting.php" method="post" enctype = "multipart/form-data">
              
              <!--Row 1-->
                <div class="row cent">
                  <div class="col-md-4 space">
                    <div class="col-25">
                     <label for="listtitle">Give Your Listing a Title</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="listtitle" name="listtitle" placeholder="Listing Title...">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                     <label for="housingstyle">Type of Listing</label>
                    </div>
                    <div class="col-75">
                      <select name="housingstyle">
                          <option value="">Select Listing Type</option>
                          <option value="apartment">Apartment Room</option>
                          <option value="house">House</option>
                       </select>
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                     <label for="city">City</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="city" name="city" placeholder="City Name...">
                    </div>
                  </div>
                </div>
              <!--End Row 1-->

              <!--Row 2-->
                <div class="row cent">
                  <div class="col-md-4 space">
                    <div class="col-25">
                      <label for="country">State</label>
                    </div>
                    <div class="col-75">
                      <select name="state">
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
                  <div class="col-md-4 space">
                    <div class="col-25">
                     <label for="address">Address</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="address" name="address" placeholder="Listing's Address...">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                     <div class="col-25">
                     <label for="zip">Zip</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="zip" name="zip" placeholder="Your Zip Code...">
                    </div>
                  </div>
                </div>
              <!--End Row 2-->

              <!--Row 3-->
                <div class="row cent">
                  <div class="col-md-4 space">
                    <div class="col-25">
                        <label>Price of Rent: (Per Month)</label>
                    </div>
                    <div class="col-75">
                      <div class="">
                        <input type="number" id="rent" name="rent" min="0" max="2000" style="width: 50%;" placeholder="$1234" class="">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                     <label for="numofpeople">Number of Roommates</label>
                    </div>
                    <div class="col-75">
                      <input type="number" id="numofpeople" name="numofpeople" min = "1" max = "10" style="width: 50%">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                     <label for="complex">Apartment Complex</label>
                    </div>
                    <div class="col-75">
                      <select name="complex">
                          <option value="">Select complex</option>
                          <option value="Unversity TownHomes">Unversity TownHomes</option>
                          <option value="Campus Pointe">Campus Pointe</option>
                          <option value="University Edge">University Edge</option>
                          <option value="College Towers">College Towers</option>
                          <option value="Eagles Landing">Eagles Landing</option>
                          <option value="Province">Province</option>
                       </select>
                    </div>
                  </div>
                </div>
              <!--End Row 3-->

              <!--Row 4-->
                <div class="row space" style="">
                  <div class="col-md-12" style="border-style: solid; margin: 2px;">
                    <label>Amenities - Check all that apply:</label>
                    <br>
                    <div style="" class="col-md-6" align="middle">
                      <div class="col-75">
                        <div class="checkbox">
                          <label><input type="checkbox" name="check_list[]" value="Laundry">Laundry</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="check_list[]" value="Pets">Pets</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="check_list[]" value="Cooling">Cooling</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="check_list[]" value="Parking">Parking</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="check_list[]" value="Furnished">Furnished</label>
                        </div>
                      </div>
                    </div>
                    <div style="" class="col-md-6" align="middle">
                      <div class="checkbox">
                        <label><input type="checkbox" name="check_list[]" value="Swimming">Swimming</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="check_list[]" value="Gym">Gym</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="check_list[]" value="Property Management">Property Management</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="check_list[]" value="Hot Tub">Hot Tub</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="check_list[]" value="Private Bathroom">Private Bathroom</label>
                      </div>
                    </div> 
                  </div>
                </div>
              <!--End Row 4-->

              <!--Row 5-->
                <div class="row cent">
                  <div class="col-md-4 space">
                    <div class="col-25">
                     <label for="available">Avalibility</label>
                    </div>
                    <div class="col-75">
                      <input type="date" id="sdate" name="sdate" placeholder="">
                      <span> to: </span>
                      <input type="date" id="edate" name="edate" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                     <label for="expiration">Listing Expiration:</label>
                    </div>
                    <div class="col-75">
                      <input type="date" id="expiration" name="expiration" placeholder="XX/XX/XXXX">
                    </div>
                  </div>
                  <div class="col-md-4 space">
                    <div class="col-25">
                     <label for="availability">Term Availability</label>
                    </div>
                    <div class="col-75">
                      <select name="availability">
                        <option value="">Select Availability</option>
                        <option value="Fall Semester">Fall Semester</option>
                        <option value="Spring Semester">Spring Semester</option>
                        <option value="Summer Semester">Summer Semester</option>
                       </select>
                    </div>
                  </div>
                </div>
              <!--End Row 5-->

              <!--Row 6-->
                <div class="row space">
                  <center>
                  <div>
                    <div class="col-25">
                     <label for="description">Listing Description</label>
                    </div>
                    <div class="col-75" style="height: 75%">
                      <textarea  style="width: 75%; height: 75%" name="bio" placeholder="Description of Listing..."></textarea>
                    </div>
                  </div>
                  </center>
                </div>
              <!--End Row 6-->

              <!--Row 7-->
                <div class="row space">
                  <center>
                    <h5 style="font-weight: bold;">Upload Your Listing's Pictures</h5>
                    <div class="col-md-6 space">
                      <input type="file" name="fileToUpload" id="fileToUpload">
                      <br>
                      <input type="file" name="fileToUpload2" id="fileToUpload2">
                      <br>
                      <input type="file" name="fileToUpload3" id="fileToUpload3">
                      <br>
                    </div>
                    <div class="col-md-6 space">
                      <input type="file" name="fileToUpload4" id="fileToUpload4">
                      <br>
                      <input type="file" name="fileToUpload5" id="fileToUpload5">
                      <br>
                    </div>
                  </center>
                </div>
              <!--End Row 7-->

            </div>

            <!--Create Listing Button-->
              <center>
                <br>
                <br>
                <button type="submit" name="submit" value="Submit" class="btn" style="background-color: #002664; color: white">Create Listing</button>
              </center>
            <!--End Create Listing Button-->

          </form>
        </div>
        <br>
      </div>
    <!--End Listing Div-->

    <br><br><br>

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
            <div>
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
    <!-- End Sticky Navbar script -->

  </body>
</html>