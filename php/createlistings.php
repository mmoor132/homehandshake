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
<div class="container-fluid" style="background-color: grey; border-style: solid; margin: 2px;">
  <br>
  <div class="container">
    <form action="listingupload.php" method="post">
        
        <!--Row 1-->
        <div class="row">
          <div class="col-md-4">
            <div class="col-25">
             <label for="listtitle">Give Your Listing a Title</label>
            </div>
            <div class="col-75">
              <input type="text" id="listtitle" name="listtitle" placeholder="Listing Title...">
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-25">
             <label for="housingstyle">Type of Listing</label>
            </div>
            <div class="col-75">
              <select name="housingstyle">
                  <option value="apartment">Apartment Room</option>
                  <option value="house">House</option>
               </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-25">
                <label>Price of Rent: (numbers only)</label>
            </div>
            <div class="col-75">
             <input type="text" id="rent" name="rent" placeholder="Type something...">
            </div>
          </div>
        </div>
        <!--End Row 1-->

        <!--Row 2-->
        <div class="row">
          <div class="col-md-4">
            <div class="col-25">
             <label for="description">Description</label>
            </div>
            <div class="col-75">
              <textarea name="bio" placeholder="Description..."></textarea>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-25">
             <label for="address">Address</label>
            </div>
            <div class="col-75">
              <input type="text" id="address" name="address" placeholder="Listing's Address...">
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-25">
             <label for="city">City</label>
            </div>
            <div class="col-75">
              <input type="text" id="city" name="city" placeholder="City Name...">
            </div>
          </div>
        </div>
        <!--End Row 2-->

         <!--Row 3-->
        <div class="row">
          <div class="col-md-4">
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
          <div class="col-md-4">
            <div class="col-25">
             <label for="zip">Zip</label>
            </div>
            <div class="col-75">
              <input type="text" id="zip" name="zip" placeholder="Your Zip Code...">
            </div>
          </div>
          <div class="col-md-4">
            <!--Blank-->
          </div>
        </div>
        <!--End Row 3-->

        <br>

        <!--Row 4-->
        <div class="row">
          <div class="col-md-4" style="border-style: solid; margin: 2px;">
            <label>Amenities - Check all that apply:</label>
            <br>
            <div style="" class="col-md-4">
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
            <div style="" class="col-md-8">
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

          <div class="col-md-6">
           
            <div>   
            </div>
          </div>
          
          <div class="col-md-4">
            
        </div>
        <!--End Row 4-->

        <!--Row 5-->
         <div class="row">
          <div class="col-md-6">
            <div class="col-25">
             <label for="available">Avalibility</label>
            </div>
            <div class="col-75">
              <input type="text" id="sdate" name="sdate" placeholder="XX/XX/XXXX">
              <span> to: </span>
              <input type="text" id="edate" name="edate" placeholder="XX/XX/XXXX">
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-25">
             <label for="expiration">Listing Expiration:</label>
            </div>
            <div class="col-75">
              <input type="text" id="expiration" name="expiration" placeholder="XX/XX/XXXX">
            </div>
          </div>
          <div class="col-md-4">
            <!--Blank-->
          </div>
        </div>
        <!--End Row 5-->

        <!--Row 6-->
        <div class="row">
          <div class="col-md-4">
            <div class="col-25">
             <label for="numofroom">Number of Rooms</label>
            </div>
            <div class="col-75">
              <input type="text" id="numofroom" name="numofroom" placeholder="Number of Room...">
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-25">
             <label for="numofpeople">Number of Rooms</label>
            </div>
            <div class="col-75">
              <input type="text" id="numofpeople" name="numofpeople" placeholder="Number of Roommates...">
            </div>
          </div>
          <div class="col-md-4">
            <!--Blank-->
          </div>
        </div>
        <!--End Row 6-->

      </div>
      <!--Create Listing Button-->
      <center>
        <br>
        <br>
        <button type="submit" name="submit" value="Submit" class="btn" style="background-color: maroon; color: white">Create Listing</button>
      </center>
      <!--End Create Listing Button-->
    </form>
  </div>
  <br>
</div>
<!--End Listing Div-->

<br>



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