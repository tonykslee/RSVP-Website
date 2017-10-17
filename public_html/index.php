<!DOCTYPE html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Assign database connection info to variables
        $db_host = "localhost";
        $db_username = "id3227097_tony";
        $db_pass = "swordy1";
        $db_name = "id3227097_weddingdatabase";

        //Assign first and last name to variables
        $fname = $_POST['First_Name'];
        $lname = $_POST['Last_Name'];

        //Connect to database
        $con = mysqli_connect($db_host, $db_username, $db_pass, $db_name);
        
        if(!$con) {
            $message =  'Something went wrong. You are not connected to the database.';
        } 

        //Check if rsvp exists
        $check=mysqli_query($con, "SELECT * FROM rsvp WHERE first_name='$fname' and last_name='$lname'");
        $checkrows=mysqli_num_rows($check);
        
        if($checkrows > 0) {
            $message = "An RSVP for $fname $lname has already been submitted.";
        } else {
            $sql = "INSERT INTO rsvp (first_name, last_name) VALUES ('$fname', '$lname')";
            $query = mysqli_query($con,$sql);
            if($query) {
                $message = "Thank you. Your RSVP has been submitted for $fname $lname";
            }
        }
        echo "<script type='text/javascript'>alert('$message');</script>";
        $con -> close();
    }
?>

<html lang="en">
  <head>
      <title>Annie & Tony's Wedding</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
      <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#home" class="w3-bar-item w3-button">HOME</a>
        <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
        <a href="#registry" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> REGISTRY</a>
        <a href="#rsvp" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> RSVP</a>

      </div>

      <!-- Navbar on small screens -->
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
        <a href="#registry" class="w3-bar-item w3-button" onclick="toggleFunction()">REGISTRY</a>
        <a href="#rsvp" class="w3-bar-item w3-button" onclick="toggleFunction()">RSVP</a>
      </div>
    </div>

    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle w3-center" style="white-space:nowrap;">
            <div class="mainHeader">
              <span class="w3-black">Annie Tran & Tony Lee</span>
            </div>  
        </div>
    </div>

    <!-- Container (About Section) -->
    <div class="w3-content w3-container w3-padding-64" id="about">
      <h3 class="w3-center">ABOUT US</h3>
      <p>	"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      <div class="w3-row">
        <div class="w3-col m6 w3-center w3-padding-large">
          <br>
          <img src="https://lh3.googleusercontent.com/X_0Y1yV0HbUfzpLPrDqnVyA5WUoRxbRHs3hUESaPGM0GIlpDprv8d4wkEv_WJFT3gQHtHcvQzfaL5gq8NuTszzFObqPSKlmwCrzyASMqDVyz1R39z1BMT2x6Cs9-tHQ9nhcqkllGxHbheaIcbxxJVoDTloFA1e2rENUeFVcjiyMveOCbJ6mO5szMfgbcbMCN1DbyC0rX3UOuczQFAvjiG-OLU1NE6HK4rm1E-Lr7GgNh9S2l8ir0NhU3i1R3nLrFGpa6NDeeNkSIC0fl7vmX4CZQvwIZ7ZLRmMXaF_9tcsOo5WaySNcjyET-jw-DcBp55viCI3_w7jPixyOJbMYE2tEJBy6WHAb2zCvny4BvbkAxdtTTl9thAjpnQamEspLhUqiC-WPVCvql0xW3CoebLs9MKygnXUkAlp_jr0Ao92Bbas5QvTT-TjJuyXS6OEdKdV-WNkWJG29iiSqUTe52kd1xWF95ZlsWiBHssObaixt7ePUSsVXYsIrkvNrxQjvea0gFDXCyMUXc-XaNch2LUvmNfvfD_dh2nP6urfnsOaCop15iIrQKeIAQaOHcK10B72l-vHlgRlpr9EuCQsKVozmPsD78bM9XFnMGlpihCZs=w1428-h949-no" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
        </div>

        <!-- Hide this text on small devices -->
        <div class="w3-col m6 w3-hide-small w3-padding-large">
            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" </p>
        </div>
      </div>
    </div>

    <!-- Second Parallax Image with Portfolio Text -->
    <div class="bgimg-2 w3-display-container w3-opacity-min">
      <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">REGISTRY</span>
      </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="w3-content w3-container w3-padding-64" id="registry">

      <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
      <div class="w3-row-padding w3-center">
        <div class="w3-col m3">
            <a href="https://www.target.com/">
          <img border="0" src="https://seeklogo.com/images/T/Target-logo-9FE48EBE3B-seeklogo.com.png" style="width:50%" class="w3-hover-opacity">
        </div>

        <div class="w3-col m3">
            <a href="http://www.ikea.com/us/en/">
          <img border="0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Ikea_logo.svg/2000px-Ikea_logo.svg.png" style="width:100%"class="w3-hover-opacity">
            </a>
        </div>

        <div class="w3-col m3">
            <a href="https://www.costco.com/">
          <img border="0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Costco_Wholesale.svg/2000px-Costco_Wholesale.svg.png" style="width:100%" class="w3-hover-opacity">
          </a>
        </div>

        <div class="w3-col m3">
            <a href="https://www.bedbathandbeyond.com/">
          <img border="0" src="https://d3ei0t9fwgqcl.cloudfront.net/2016/05/27/02/21/17/97e5b886-a115-4f59-8fdd-d61fec749a1f/4214388.png" style="width:100%" class="w3-hover-opacity">
            </a>
        </div>
      </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
      <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
      <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
      </div>
    </div>

    <!-- Third Parallax Image with Portfolio Text -->
    <div class="bgimg-3 w3-display-container w3-opacity-min">
      <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">RSVP</span>
      </div>
    </div>


            
    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="rsvp">
      <h3 class="w3-center">We're Excited to See You</h3>
      <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-container">
          <!-- Add Google Maps -->
          <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
        </div>
        <div class="w3-col m8 w3-panel">
          <div class="w3-large w3-margin-bottom">
            <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Seattle, WA<br>
            <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: ###-###-####<br>
            <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: ####@gmail.com<br>
          </div>
          
            
          
          <form method="post">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="First Name" required name="First_Name">
              </div>
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Last Name" required name="Last_Name">
              </div>
            </div>
            
            
          </form>

          <button id ="modalBtn" class="w3-button w3-black w3-right w3-section">
            <i class="fa fa-paper-plane"></i> Find My Reservation
          </button>
          
          <div id="simpleModal" class="modal">
            <div class="modal-content">
                      <div class="modal-header">
                          <span class="closeBtn">&times;</span>
                          <h2>Modal Header</h2>
              </div>
              <div class = "modal-body">
                <p>Hello...I'm a modal</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam asperiores perspiciatis facilis dolorum animi hic unde? Autem esse ipsam ab error amet, nesciunt tempore placeat qui iste sequi accusamus temporibus!</p>
              </div>
              <div class="modal-footer">
                <h3>Modal Footer</h3>
              </div>
            </div>
          </div>
          
          <script src="main.js"></script>

        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
      <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
      <div class="w3-xlarge w3-section">
      </div>
    </footer>
    
    <!-- Add Google Maps -->
    <script>
    function myMap()
    {
      myCenter=new google.maps.LatLng(47.6062, -122.3321);
      var mapOptions= {
        center:myCenter,
        zoom:12, scrollwheel: false, draggable: false,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

      var marker = new google.maps.Marker({
        position: myCenter,
      });
      marker.setMap(map);
    }

    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
        }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-FvCbyBmp6wMZf7au40Txx0pMZ4rBJm4&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->
    
  </body>
</html>
