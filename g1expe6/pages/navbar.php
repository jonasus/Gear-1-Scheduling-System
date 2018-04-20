<?php include('functions.php') ?>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Gear 1 Driving School</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
        <li><a href="../index.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
        
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
      <h1><a href="../index.php"><img src="../images/demo/g1logo.png"></a></h1>
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