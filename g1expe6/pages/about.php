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
        <li class = "active"><a href="about.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
    </nav>
  
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
      <li><a href="#">About</a></li>
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
     <h1>About Us:</h1>
      <h2 class = "head2">Company Profile:</h2>
      <img class="imgr borderedbox inspace-5" src="../images/demo/gear1car.jpg" alt="Kotse ng Gear 1">
      <p>Gear-1 Driving School is one of the most reliable contributors in educating people on roads safety. Our program is designed for beginner as well as experienced driving to become a responsible and safe road user. The quality of teaching instruction is significantly relevant in pursuing our goal to produce responsible drivers that help contribute on road safety. Thus, Gear-1 Driving School offers a high quality and effective driver education at the lowest possible costs.</p>
      <p>Founded in 2003, Gear-1 Driving School started its first brand in Muntinlupa City with only one training vehicle, the owner as driving instructor and his wife as office registrar. With the help of our Almighty God, perseverance and dedication they can be able to build up more and more branches to accommodate the growth of demand and needs of the clients. The school hires highly-trained and certified instructors who provide all the hands-on teaching services and quick witted registrars who assist inquiries and students of Gear-1 Driving School. The business is in the process of expanding the branches in metro manila and some parts of the country

</p>
      <img class="imgl borderedbox inspace-5" src="../images/demo/innova.png" alt="">
      <h2 font-size = small;>Mission:</h2>
        <p>We provide high-quality and student-specific driver education at very competitive prices through our well-trained and experienced instructors and staff to clients who share and recognize our advocacy for road safety.

</p>
      <h2 class = "head2">Vision</h2>
      <p>Our vision is to give the best quality training and to continue rasing the standards of driver education in the country.We aim to produce responsible and courteous drive4rs for better and safer roads for everyone.</p>
      
      <!-- ################################################################################################ -->
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