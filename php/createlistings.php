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
        <li class="active"><a href="homepage.html" style="color: white">Home</a></li>
        <li><a href="housinghandshakes.html" style="color: white">Housing Handshakes</a></li>
        <li><a href="listings.html" style="color: white">Housing Listing</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="createaccount.html" style="color: white"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.html" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
    <form action="action_page.php">
      <div class="container">
        
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
             <label for="listtitle">Type of Listing</label>
            </div>
            <div class="col-75">
              <select>
                <option value="apartment">Apartment Room</option>
                <option value="house">House<option>
              </select> 
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
             <label for="description">Description</label>
            </div>
            <div class="col-75">
              <textarea placeholder="Listing Title..."></textarea>
            </div>
          </div>
          <div class="col-md-4">
            <!--Blank-->
          </div>
          <div class="col-md-4">
            <!--Blank-->
          </div>
        </div>
        <!--End Row 2-->

        <br>

        <!--Row 3-->
        <div class="row">
          <div class="col-md-4" style="border-style: solid; margin: 2px;">
            <label>Amenities - Check all that apply:</label>
            <br>
            <div style="" class="col-md-4">
              <div class="col-75">
                <form>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">Laundry</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">Pets</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">Cooling</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">Parking</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">Furnished</label>
                  </div>
                </form>
              </div>
            </div>
            <div style="" class="col-md-8">
              <form>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Swimming</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Gym</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Property Management</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Hot Tub</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Private Bathroom</label>
                </div>
              </form>
            </div> 
          </div>

          <div class="col-md-6">
           <label>Details:</label>
            <br>
              <div class="col-25">
                <label>Address</label>
              </div>
              <div class="col-75">
               <input type="text" id="address" name="address" placeholder="Type something...">
               <select>
                  <option value="apartment">Apartment Room</option>
                  <option value="house">House</option>
               </select>
              </div>
              <br>
          <div>
                 
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
        <!--End Row 3-->

        <!--Row 4-->
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
        <!--End Row 4-->

      </div>
    </form>
  </div>
  <br>
</div>
<!--End Listing Div-->

<br>

<!--Create Listing Button-->
<center>
  <button type="button" class="btn" style="background-color: maroon; color: white">Create Listing</button>
</center>
<!--End Create Listing Button-->

  <br><br>

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