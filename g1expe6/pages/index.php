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
                        <a href = enrollmentpage.php>Book Course</a>
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
        <h1><a href="index.php"><img src="images/demo/g1logo.png"></a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="">Home</a></li>
        <li class = "drop"><a class="clear" href="courses(tabled).php">Courses</a>
          <ul>
            <li><a href="manualcourse.php">Manual Course</a></li>
            <li><a href="autocourse.php">Automatic Course</a></li>
          </ul>
          <li><a href="gallery.php">Gallery</a>
         <li><a class="drop" href="reminders.php">Reminders</a>
        <ul>
            <li><a href="advancestudy.html">Advance Study</a></li>
            <li><a href = "rules.php">Rules And Regulations</a></li>
          </ul>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
    </nav>
  
  </header>
</div>
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/carbg%20(1).jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <h3 class="heading">Enroll Now!</h3>
            <p>Be a responsible and effective driver...Unlock your driving potential! </p>
            <footer><a class="btn" href="courses(tabled).php">Check courses</a></footer>
          </article>
        </li>
        <li>
          <article>
            <h3 class="heading">Company Profile</h3>
            <p>Know the history of Gear 1 Drving School!</p>
            <footer><a class="btn inverse" href="about.php">Check profile</a></footer>
          </article>
        </li>
        <li>
          <article>
            <h3 class="heading">Gallery</h3>
            <p>Come and look how fun in Gear 1 is!</p>
            <footer><a class="btn" href="gallery.php">Check gallery</a></footer>
          </article>
        </li>
      </ul>
    </div>

  </div>
    <!-- ################################################################################################ -->
  
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
 <main class="hoc container clear"> 
   
    <div class="sectiontitle">
      <h2 class="heading">Gear 1</h2>
    </div>
    <p class="btmspace-50 justified">GEAR-1 DRIVING SCHOOL is designed for beginners as well as experienced drivers to become a responsible and safe road user. We offer a quality, affordable and effective training programs that will help our students to become a responsible driver. Quality training through one-on-one hands-on teaching by our well-trained instructors, affordable tuitions for beginner and refresher and effective program which include actual orientation and lecture that will enhance your skills in driving.
   </p>
   <div id="center">
    <a href="images/gear1branches/bacoor.jpg"><img src="images/gear1branches/bacoor.jpg" alt=""></a>
    <a href="images/gear1branches/munti.jpg" alt = ""><img src="images/gear1branches/munti.jpg" alt=""></a>
      </div>
    <br>
      <div>
          <h2>Testimonials of our satisfied customers:</h2>
     <div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="images/g1testimonials/1.png" style="width:100%">
  <img class="mySlides" src="images/g1testimonials/2.png" style="width:100%">
  <img class="mySlides" src="images/g1testimonials/3.png" style="width:100%">
    <img class="mySlides" src="images/g1testimonials/4.png" style="width:100%">
  <img class="mySlides" src="images/g1testimonials/5.png" style="width:100%">
    <img class="mySlides" src="images/g1testimonials/6.png" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 10000); // Change image every 10 seconds
}
</script>
      </div>
<p style = "clear: both;"></p>
  
    <div class="clear"></div>
  </main>
</div>


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
        <li><a class="faicon-facebook" href="https://www.facebook.com/Gear-1-Driving-School-465129803530919/?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
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
  <div id="copyright" class="hoc clear"> 
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