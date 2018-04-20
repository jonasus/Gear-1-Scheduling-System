<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

?>
<!DOCTYPE html>
<!----HOME PAGE OF USER----->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Gear 1 Driving School</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}
input[type=password], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}
    input[type=email], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}


label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.contain {
    border-radius: 5px;
    background-color: #FFCC00;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 60%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
    }

.profile_info img {
	display: inline-block; 
	width: 50px; 
	height: 50px; 
	margin: 5px;
	float: left;
}

.profile_info div {
	display: inline-block; 
	margin: 5px;
}

.profile_info:after {
	content: "";
	display: block;
	clear: both;
}
    </style>

<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i>(02)806-1021 </li>
        <li><i class="fa fa-envelope-o"></i>gear1drivingschool@yahoo.com</li>
      </ul>
    </div>

     <div class="fl_right">
     <div class="profile_info">
     	<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
    <?php
        if(isset($_SESSION['image'])){
	   echo "<img src='../photo/". $_SESSION['image'] . "' >";
	   }
    ?>

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
				
				
			</div>

         
    </div>
     

    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 

    <div id="logo" class="fl_left">
        <h1><a href="../index.php"><img src="images/demo/g1logo.png"></a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li><a href="index.php">Home</a></li>
        <li class = "drop"><a class="clear" href="courses(tabled).php">Courses</a>
          <ul>
            <li><a href="manualcourse.php">Manual Course</a></li>
            <li><a href="autocourse.php">Automatic Course</a></li>
          </ul>
          <li><a href="gallery.php">Gallery</a>
         <li><a class="drop">Reminders</a>
        <ul>
            <li><a href="advancestudy.php">Advance Study</a></li>
<li class = "active"><a href = "rules.php">Rules And Regulations</a></li>
          </ul>
        <li><a href="about.php">About Us</a></li>
        <li class = "active"><a href="contactus.php">Contact Us</a></li>
      </ul>
    </nav>
  
  </header>
</div>
    <!-- ################################################################################################ -->
  </header>
</div>

    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
    </ul> 
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
     <h1>Find us at:</h1>
     <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
  <div id="map" style="height: 448px; width: 1000px;">
</div>
<script type="text/javascript">
    var locations = [
      ['Gear 1 Alvarez, Las Piñas', 14.430090, 121.003553],
      ['Gear 1 National Road, Muntinlupa', 14.393333, 121.044547],
      ['Gear 1 Biñan, Laguna', 14.323675, 121.095242],
      ['Gear 1 Balibago, Sta Rosa, Laguna', 14.290121, 121.108245],
      ['Gear 1 Better Living, Parañaque',14.482729, 121.037317],
      ['Gear 1 Molino', 14.398252, 120.977893],
      ['Gear 1 Almanza Uno, Las Piñas', 14.432623, 121.013677]
    ];
    function initMap(){
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(14.444102, 120.994334),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
    }
  </script> 
        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbD_F3GdmiGLG9rhfHHszpiuTLvMW-VxI&callback=initMap">
    </script>
        
   <!--     <div class="mySlides fade">
            <center><h2>School Address: 8 Don Manolo Blvd, Cupang, Muntinlupa, 1771 Metro Manila</h2>

<br>

                <div id="map" style="width:1000px;height:450px;background:yellow"></div></center>

<script>
      function initMap() {
        var almanza = {lat: 14.430090, lng: 121.003553 };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: almanza
          
        });
        var marker = new google.maps.Marker({
          position: almanza,
          map: map
        });
      }
    function initMap1() {
        var muntinlupa = {lat: 14.393333, lng: 121.044547 };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: muntinlupa
          
        });
        var marker = new google.maps.Marker({
          position: muntinlupa,
          map: map
        });
      }
    
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbD_F3GdmiGLG9rhfHHszpiuTLvMW-VxI&callback=initMap">
    </script>
	
</div>  -->
        
        
        
        
        <div class="spacingg">
     <h3><bold>List of Branches:</bold></h3>
            </div>
	<table id="store-list" class="table">
	  <thead class="thead-inverse">
	    <tr>
	   
	      <th>Branch</th>
	      <th>Location</th>
	      <th>Telephone No.</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      	<td><b>Gear 1 Las Piñas</b></td>
	      	<td>1360 Marcos Alvarez Ave, Las Pinas, 1747 Metro Manila</td>
	      	<td><b>(02) 553 5908</b></td>
	    </tr>
	    <tr>
	    	
	    	<td><b>Gear 1 Biñan</b></td>
	    	<td>38 Manila S Rd, Biñan, 4026 Laguna</td>
	    	<td><b>(049) 411 2963</b></td>
	    </tr>
	    <tr>
	    	
	    	<td><b>Gear 1 Molino</b></td>
	    	<td>RG Mabuhay Mini Market, Molino Rd, Malino 3, Bacoor, 4102 Cavite</td>
	    	<td><b>940-9964</b></td>
	    </tr>
	    <tr>
	    	
	    	<td><b>Gear 1 Sta Rosa</b></td>
	    	<td>National Hi-Way, Balibago, Santa Rosa, 4026 Laguna</td>
	    	<td><b>(049) 533 9023</b></td>
	    </tr>
	    <tr>
	    	
	    	<td><b>Gear 1 Bacoor</b></td>
	    	<td>171 E Aguinaldo Hiway, Panapaan 1, Bacoor, 4102 Cavite</td>
	    	<td><b>(046) 417 3187</b></td>
	    </tr>
	    <tr>
	    	
	    	<td><b>Gear 1 Parañaque</b></td>
	    	<td>59 Dona Soledad Avenue, Better Living Subdivision, Parañaque, 1711 Metro Manila</td>
	    	<td><b>516-2209</b></td>
	    </tr>
	    <tr>
	    	
	    	<td><b>Gear 1 Dasmariñas</b></td>
	    	<td>Emilio Aguinaldo Hwy, Salitran, Dasmariñas, 4114 Cavite</td>
	    	<td><b>(046) 850 1550</b></td>
	    </tr>
	    <tr>
	    	
	    	<td><b>Gear 1 Muntinlupa</b></td>
	    	<td>National Road, Putatan, Muntinlupa, 1772 Metro Manila</td>
	    	<td><b>(02) 836 3889</b></td>
	    </tr>
	       <tr>
	    	
	    	<td><b>Gear 1 Las Piñas</b></td>
	    	<td>Alabang–Zapote Road, Alamanza Uno, Las Pinas, 1740 Metro Manila</td>
	    	<td><b>(02) 403 7789</b></td>
	    </tr>
	        <tr>
	    	
	    	<td><b>Gear 1 Parañaque (Doña Soledad)</b></td>
	    	<td>No. 59, Dona Soledad Avenue, Parañaque, 1700 Metro Manila</td>
	    	<td><b>(02) 822 9942</b></td>
	    </tr>
	    	
	  </tbody>
	</table>
    
      </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">Gear 1 Driving School</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Alabang-Zapote Road, Almanza Uno, Las Piñas City
          </address>
        </li>
        <li><i class="fa fa-phone"></i> (02) 806 1021</li>
        <li><i class="fa fa-envelope-o"></i> gear1drivingschool@yahoo.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Goal:</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace">"We aim to produce professionally educated drivers with dedication to work and contribute to the community on roads cleanliness and safety."</p>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_third">
      <h6 >News and Updates</h6>
      <p class="nospace btmspace-30">Subscribe now and get the latest news in Gear1 Driving School!</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear";> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Gear 1 Driving School</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>