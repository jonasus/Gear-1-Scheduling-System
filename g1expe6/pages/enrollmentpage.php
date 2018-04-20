<?php include('functions.php');
include ('calendarfunction.php');
$date_today = date("Y-m-d");

if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
$usid = $_SESSION['userid'];
?>

 <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>

<!DOCTYPE html>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Gear 1 Driving School</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link type="text/css" rel="stylesheet" href="styling.css"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="jquery.min.js"></script>

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
      <ul class="nospace">
        <li><a href="../index.html"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="register.php">Register</a></li>
<li><a href = "login.php">Login</a></li>
        
      </ul>
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
      <h1><a href="../index.html"><img src="../images/demo/g1logo.png"></a></h1>
    </div>
  <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="../index.html">Home</a></li>
        <li class = "drop"><a class="clear" href="courses(tabled).html">Courses</a>
          <ul>
            <li><a href="manualcourse.html">Manual Course</a></li>
            <li><a href="autocourse.html">Automatic Course</a></li>
          </ul>
          <li><a href="gallery.html">Gallery</a>
         <li><a class="drop" href="reminders.html">Reminders</a>
        <ul>
            <li><a href="advancestudy.html">Advance Study</a></li>
            <li><a href = "rules.html">Rules And Regulations</a></li>
          </ul>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contactus.html">Contact Us</a></li>
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
      <li><a href="register.html">Registration</a></li>
       <li><a href>Select Enrollment</a></li>

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
    
        <?php echo getCalender(); ?>
    </div>
  
  <div class="contain">

    <form class="well form-horizontal" action=" " method="post"  enctype="multipart/form-data" >
<fieldset>

<!-- Form Name -->
<?php echo display_error() ?>
<h1>REGISTER</h1>

<form method = "post">
<p>
   Package Name</p>
<select name="package_name">
  <option value=" ">Select...</option>
  <option value="Regular Course">Regular Course</option>
  <option value="Automatic Course">Automatic Course</option>
  </select>
  <p>
<p>
    Select Transmission</p>
<select name="transmission_type">
  <option value=" ">Select...</option>
  <option value="Manual">Manual</option>
  <option value="Automatic">Automatic</option>
  </select>
  <p>
    Select Car Type</p>

<select name="unit_type">
  <option value=" ">Select...</option>
  <option value="Sedan">Sedan</option>
  <option value="SUV">SUV</option>
</select>
    
      <p>
    Select Hours</p>
<select name="package_hours">
  <option value=" ">Select...</option>
  <option value="5">5</option>
  <option value="7">7</option>
   <option value="10">10</option>
  <option value="15">15</option>
    <option value="20">20</option>
</select>
<p>Input Date From:</p>
<input type="date" name="date_from" min="<?php echo $date_today; ?>" max="2019-12-31" value="<?php echo $date_today; ?>">

<p>Input Date To:</p>
<input type="date" name="date_to" max="2019-6-31" value = "<?php echo $date_to; ?>" >

<p>Input Time From:</p>
<input type="time" name = "time_from" value = "<?php echo $time_from?>">

<p>Input Time To:</p>
<input type="time" name="time_to"  value = "<?php echo $time_to?>">

<br><br>

<button name = "enroll_btn">Next Step</button>
</form>


<!-- Text input

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>
-->
<!-- Text input-->

        

</fieldset>
</form>
</div>
    </div>

    
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      
      <!-- ################################################################################################ -->
    
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
