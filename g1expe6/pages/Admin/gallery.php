<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

?>
<!DOCTYPE html>
<!--
Template Name: Jeren
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Gear 1 Driving School</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
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
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="../index.php"><img src="../images/demo/g1logo.png"></a></h1>
    </div>
  <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a class="drop" href="courses(tabled).html">Courses</a>
          <ul>
            <li><a href="Normalcourse.php">Manual Course</a></li>
            <li><a href="execcourse.php">Executive Course</a></li>
            <li><a href="rushcourse.php">Rush Course</a>
            </li>
          </ul>
          <li><a class="drop" href="gallery.php">Gallery</a>
        <ul>
            <li><a href="advancestudy.php">Advance Study</a></li>
          </ul>
        <li><a href="reminders.php">Reminders</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-color: black;">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="../index.html">Home</a></li>
      <li><a href="gallery.html">Gallery</a></li>
    </ul>
    <!-- ################################################################################################ -->
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
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
          <header class="heading">Gear 1 Activities</header>
          <ul class="nospace clear">
            <li class="one_quarter first"><a href="../images/gear1gallery/1.jpg"><img src="../images/gear1gallery/1.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="../images/gear1gallery/2.jpg"><img src="../images/gear1gallery/2.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="../images/gear1gallery/3.jpg"><img src="../images/gear1gallery/3.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="../images/gear1gallery/4.jpg"><img src="../images/gear1gallery/4.jpg" alt=""></a></li>
            <li class="one_quarter first"><a href="../images/gear1gallery/5.jpg"><img src="../images/gear1gallery/5.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="../images/gear1gallery/6.jpg"><img src="../images/gear1gallery/6.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="../images/gear1gallery/7.jpg"><img src="../images/gear1gallery/7.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="../images/gear1gallery/8.jpg"><img src="../images/gear1gallery/8.jpg" alt=""></a></li>
            <li class="one_quarter first"><a href="../images/gear1gallery/9.jpg"><img src="../images/gear1gallery/9.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="../images/gear1gallery/10.jpg"><img src="../images/gear1gallery/10.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="../images/gear1gallery/11.jpg"><img src="../images/gear1gallery/11.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="../images/gear1gallery/12.jpg"><img src="../images/gear1gallery/12.jpg" alt=""></a></li>
          </ul>
          <figcaption></figcaption>
        </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li class="current"><strong>1</strong></li>
          <li><a href="gallery2.html">2</a></li>
          <li><a href="gallery3.html">3</a></li>
          <li><a href="gallery4.html">4</a></li>
          <li><a href="gallery5.html">5</a></li>
          <li><a href="gallery2.html">Next &raquo;</a></li>
        </ul>
      </nav>
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