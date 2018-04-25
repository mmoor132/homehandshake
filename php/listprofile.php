<?php
  $servername = "localhost";
  $username = "administrator";
  $password = "";
  $dbname = "homehandshake";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Start Session
  session_start();

  // Call all Variables
  $latitude = $_SESSION['latitude'];
  $longitude = $_SESSION['longitude'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $phone = $_SESSION['phone'];
  $email = $_SESSION['email'];
  $listingnum = $_SESSION['listingnum'];
  $title = $_SESSION['title'];
  $price = $_SESSION['price'];
  $address = $_SESSION['address'];
  $city = $_SESSION['city'];
  $state = $_SESSION['state'] ;
  $zip = $_SESSION['zip'] ;
  $housingstyle = $_SESSION['housingstyle'];
  $roommates = $_SESSION['roommates'] ;
  $numofroom = $_SESSION['numofroom'] ;
  $startdate = $_SESSION['startdate'] ;
  $enddate = $_SESSION['enddate'] ;
  $description = $_SESSION['description'] ;
  $complex = $_SESSION['complex'] ;
  $availability = $_SESSION['availability'] ;
  $pic1 = $_SESSION['pic1'] ;
  $pic2 = $_SESSION['pic2'] ;
  $pic3 = $_SESSION['pic3'] ;
  $pic4 = $_SESSION['pic4'] ;
  $pic5 = $_SESSION['pic5'] ;
  $furnished = $_SESSION['furnished'] ;
  $gym = $_SESSION['gym'] ;
  $laundry = $_SESSION['laundry'] ;
  $pets = $_SESSION['pets'] ;
  $cooling = $_SESSION['cooling'] ;
  $parking = $_SESSION['parking'] ;
  $pool = $_SESSION['pool'] ;
  $garage = $_SESSION['garage'] ;
  $propertymanagement = $_SESSION['propertymanagement'] ;
  $hottub = $_SESSION['hottub'];
  $privatebathroom = $_SESSION['privatebathroom'] ;

  // Query For getting contact information
    $stm = $conn->prepare("SELECT fname, lname, phone, email FROM users WHERE userid = '1'");

    // Execute Query
    $stm->execute();

    // Assign Result
    $result = $stm->get_result();
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
    <link href="css\handshake2.css" type="text/css" rel="stylesheet" />
    <link href="css\slideshow.css" type="text/css" rel="stylesheet" />
    <link href="css\listtabs.css" type="text/css" rel="stylesheet" />
  </head>

  <style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        text-align: center;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .col-container {
        display: table;
        width: 100%;
    }
    .col {
        display: table-cell;
        padding: 16px;
    }

     @media only screen and (max-width: 991px){
        .map1{
          height: 100px;
        }
      }
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
    hr { 
    display: block;
    border-style: inset;
    border-width: 1px;
    } 

    .button {
      padding: 10px 15px;
      font-size: 24px;
      text-align: center;
      cursor: pointer;
      outline: none;
      color: #fff;
      background-color: #002664;
      border: none;
      border-radius: 15px;
      box-shadow: 0 9px #999;
    }

    .button:hover {background-color: #002664}

    .button:active {
      background-color: lbue;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }

    <?php
       if (!isset($_SESSION["userid"])) {
         echo '
          .map1{
            opacity: 0.5;
            filter: blur(5px);
          }
          .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
          }  
         ';
       }
    ?>
  </style>
  

  <body>

    <!--Jumbotron code-->
      <div>
        <img src="img/KSU Fountain.jpg" alt = "Header Image" style="width: 100%; height: 250px;">
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
                <li><a href="homepage.php" style="color: white">Home</a></li>
                <li class="active"><a href="browselisting.php" style="color: white">Browse Listings</a></li>
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

    <!--List Profile-->

      <!--Image and Map Row-->
        <div class="container-fluid" style="border:0;margin: 0;padding: 0" align="center">       
            <!--Row 1-->
              <div class="row">
                <div class="col-md-6" align="center">
                  <h1><?php echo "$title" ?></h1>
                </div>
                <div class="col-md-6" align="center">
                  <button id="myBtn" class="button" style="margin:25px; width: 25%; height: 25%" >Contact</button>
                  <a href="browselisting.php" style="color: black"><button class="button" style="width: 40%; height: 50%">Return to Listings</button></a>
                  <!-- The Modal -->
                    <div id="myModal" class="modal">
                      <!-- Modal content -->
                      <div class="modal-content">
                        <span class="close">&times;</span>
                        <?php
                         while($row = $result->fetch_assoc())
                          {
                            if(isset($_SESSION["userid"])){
                        ?> 
                          <p>Leasor: <?php echo $fname; echo " "; echo $lname; ?></p>
                          <br>
                          <p>Phone: <?php echo "$phone"; ?></p>
                          <br>
                          <p>E-Mail: <?php echo "$email";?></p>
                        <?php
                          } else {
                            echo "<center>
                                  <br>
                                  <h5>Please Login to view Leasor's Contact Information.
                                  <br>
                                  </center>";
                            }
                          }
                        ?>
                      </div>
                    </div>
                  <!--END The Modal-->
                </div>
              </div>
            <!--END Row 1-->

            <!--Row 2-->
              <div class="row"  style="border:0;,margin: 0;padding: 0">
                <div class="col-md-2">
                  <h2 align="">$ <?php echo "$price" ?> per Month</h2>
                </div>
                <div class="col-md-6">
                    <?php
                        if(isset($_SESSION["userid"])){
                            echo "<h2>$address, $city, $state, $zip</h2>";
                        }else{
                            echo "";
                        }
                    ?>
                </div>
                <div class="col-md-2">
                  <h2 align=""><?php echo "$complex" ?></h2>
                </div>
              </div>
            <hr>
            <!--END Row 2-->

            <!--Row 3-->
              <div class="row" style="">
                <div class="col-md-4" style="border:0;margin: 0;padding: 0; margin-bottom: 10px">
                  <!--Main Image Display-->
                    <div class="container" style="max-width: 100%;border:0;margin: 0;padding: 0" align="center">
                      <div class="mySlides">
                        <img src="<?php echo $pic1 ?>" style="width:100%;">
                      </div>
                      <div class="mySlides">
                        <img src="<?php echo $pic2 ?>" style="width:100%;">
                      </div>
                      <div class="mySlides">
                        <img src="<?php echo $pic3 ?>" style="width:100%;">
                      </div>  
                      <div class="mySlides">
                        <img src="<?php echo $pic4 ?>" style="width:100%;">
                      </div>
                      <div class="mySlides">
                         <img src="<?php echo $pic5 ?>" style="width:100%;">
                      </div>
                  <!--END of Main Image Display-->

                  <!--Image Navbar-->
                    <div class="row" style="">
                      <div class="column">
                        <img class="demo cursor" src="<?php echo $pic1 ?>" style="width:100%; height: 50%" onclick="currentSlide(1)" alt="">
                      </div>
                      <div class="column">
                        <img class="demo cursor" src="<?php echo $pic2 ?>" style="width:100%; height: 50%" onclick="currentSlide(2)" alt="">
                      </div>
                      <div class="column">
                        <img class="demo cursor" src="<?php echo $pic3 ?>" style="width:100%; height: 50%" onclick="currentSlide(3)" alt="">
                      </div>
                      <div class="column">
                        <img class="demo cursor" src="<?php echo $pic4 ?>" style="width:100%; height: 50%" onclick="currentSlide(4)" alt="">
                      </div>
                      <div class="column">
                        <img class="demo cursor" src="<?php echo $pic5 ?>" style="width:100%; height: 50%" onclick="currentSlide(5)" alt="">
                      </div>     
                    </div>
                  <!--END Image Navbar-->
                  </div>
                </div>
                <div class="col-md-4" style="margin-bottom: 10px" align="center"> 
                  <div style="margin-left:10px; margin-right: 10px">
                      <!--Row 1--> 
                        <div class="row" style="">
                          <div style="">
                            <div class="w3-card-4">
                              <header class="w3-container" style="background-color: #002664">
                                <h3 style="color: white">Poster's Comment</h3>
                              </header>
                              <div class="w3-container">
                                <p><?php echo "$description" ?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      <!--END Row 1-->
                      <br>
                      <!--Row 2--> 
                        <div class="row">
                          <div class="w3-card-4">
                            <header class="w3-container" style="background-color: #002664">
                               <h3 style="color: white">Availability</h3>
                            </header>
                            <div class="w3-container">
                                <p><?php echo "$availability" ?></p>
                              <p><?php echo date("m-d-Y", strtotime($startdate)); echo " - "; echo date("m-d-Y", strtotime($enddate))?></p>
                            </div>
                          </div>                                               
                        </div>
                      <!--END Row 2-->
                      <br>
                      <!--Row 3--> 
                        <div class="row" style="">
                          <div class="w3-card-4">
                            <header class="w3-container" style="background-color: #002664">
                              <h3 style="color: white">Pricing</h3>
                            </header>
                            <div class="w3-container">
                              <p>$<?php echo "$price" ?> per month</p>
                            </div>
                          </div>
                        </div>
                      <!--END Row 3-->
                      <br>
                      <!--Row 4--> 
                        <div class="row">
                          <div class="w3-card-4">
                            <header class="w3-container" style="background-color: #002664">
                              <h3 style="color: white">Amenities</h3>
                            </header>
                            <div class="w3-container">
                              <ul class="" style="list-style-type: none; margin: 0; padding: 0;">
                           <?php 
                              $ammenities = array($furnished, $gym, $laundry, $pets, $cooling, $parking, $pool, $garage, $propertymanagement, $hottub, $privatebathroom);

                              foreach ($ammenities as $name) {
                                if (isset($name) && $name != "") {
                                  echo "$name";
                                  echo "<br>";
                                }
                              }   
                            ?>
                          </ul>
                            </div>
                          </div>  
                        </div>
                      <!--END Row 4-->
                  </div>
                </div>
                <!--Google Map-->
                  <div class="col-md-4" style="border:0;,margin: 0;padding: 0; margin-bottom: 10px">
                    <!-- Google map -->
                      <center>
                      <div id="map" class="map1 " style="width:100%;height:60vh;" frameborder="0" style="border:0;,margin: 0;padding: 0">
                          <div class="centered">Please login to View Google Maps</div>
                      </div>
                      <script>
                        function myMap() {
                        var mapOptions = {
                            center: new google.maps.LatLng(<?php echo "$latitude";?>, <?php echo "$longitude";?>),
                            zoom: 13,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                        }
                      </script>
                      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwPMtmTS5-ruHic9Qa3Q9h_R-I0ptYC3w&callback=myMap"></script>

                      <script>
                        function initMap() {
                          var kent = {

                          lat: <?php if(isset($_SESSION["userid"])){echo "$latitude";}else{echo "41.148725";}?>, 

                          lng: <?php if(isset($_SESSION["userid"])){echo "$longitude";}else{echo " -81.341442";}?>};
                          var map = new google.maps.Map(document.getElementById('map'), {

                          zoom: 15,
                          center: kent

                          });


                          var marker = new google.maps.Marker({
                            position: kent,
                            map: map,
                            });
                          marker.addListener('click', function() {
                            infowindow.open(map, marker);
                          });
                        }
                      </script>
                      <script async defer
                      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwPMtmTS5-ruHic9Qa3Q9h_R-I0ptYC3w&callback=initMap">
                      </script>
                      </center>  
                    <!-- End Google map -->
                  </div>
                <!--END Google Map-->
              </div>
            <!--END Row 3-->

        </div> 

    <!--END of List Profile-->

    <br>

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

    <!--Script for Carousel-->
      <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }

        function openCity(cityName,elmnt,color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(cityName).style.display = "block";
            elmnt.style.backgroundColor = color;

        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>

        <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
      </script>
    <!--END Script for Carousel-->

    <!--Start Carousel 2 Script
      <script>
        function myFunction(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");

        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
          });
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
        }
      </script>
    <END Carousel 2 Script-->

    <!-- Start Sticky Navbar script
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
    End Sticky Navbar script -->

  </body>
</html>