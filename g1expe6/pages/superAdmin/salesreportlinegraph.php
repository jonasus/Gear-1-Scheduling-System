<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php include('../functions.php') ?>

<?php
	$servername = "localhost";
$username = "root";
$password = "";
$db = "multi_login";
$datesss = array();
$month = '2018/03';

//Make date start and end
$monthStart = $month.'/01';
$monthEnd = $month.'/'.date('30', strtotime($monthStart));
				$con=mysqli_connect($servername,$username,$password,$db);
				$result = mysqli_query($con,"SELECT Date FROM ordersmonthly");
				$query = sprintf("
    SELECT  studid, count(*) as totalprice  FROM enrolledstudents  GROUP BY MONTH(date) ", 
    mysqli_real_escape_string($con,$monthStart),
    mysqli_real_escape_string($con,$monthEnd)	
);
$result1 = mysqli_query($con,$query);
if (!$result1) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
		while($row = mysqli_fetch_array($result1)) {
         $total=$row["totalprice"];
		 $datesss[] = $total;
			// echo '<br/>Total for NZXT from '.date('l, jS F Y', strtotime($monthStart)).' to '.date('l, jS F Y', strtotime($monthEnd)).'  php='.number_format($total, 2);
			 }
?>		


<?php  
 $connect = mysqli_connect("localhost", "root", "", "multi_login");  
 $query = "SELECT dateEnrolled, count(*) as number FROM listofenrolledstudents GROUP BY MONTH(dateEnrolled)";  
 $result = mysqli_query($connect, $query);  
 ?> 

<!DOCTYPE html>
<html>
<head>
	<title>Sales Report of Gear 1 Driving School</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="../style.css">
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
        
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}        
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
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
	   echo "<img src='../photo". $_SESSION['image'] . "' >";
	   }
    ?>

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<a href="../index.php?logout='1'" style="color: red;">logout</a>
							&nbsp; <a href="create_userSuperAdmin.php"> + add user</a>
							<a href="addproducts.php">  -- Check Products</a>
                            <a href="salesreport.php">  -- Check Sales Reports</a>
					</small>

				<?php endif ?>
				
				
			</div>
         
    </div>
    </div>
    </div>
    </div>
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
      
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="salesreport.php">Transmission Used by Students</a>
  <a href="salesreportbymonth.php">Enrolled Students by Month</a>
  <a href="salesreportlinegraph.php">Monthly Enrollees(Line Graph)</a>
  
</div>
</body>
<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; other reports</span>
    <br><br>
    <head>
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {

      title:{
        text: "Students Enrolled Per Month"
      },
      axisX: {
        valueFormatString: "MMM",
        interval:1,
        intervalType: "month"
      },
      axisY:{
        includeZero: false

      },	
      data: [
      {
        type: "line",
	
        dataPoints: [
       { x: new Date(2012, 00, 1), y: <?php echo $datesss[0]; ?>},
        { x: new Date(2012, 01, 1), y: <?php echo $datesss[1]; ?>},
          { x: new Date(2012, 02, 1), y:<?php echo $datesss[2]; ?>},
        { x: new Date(2012, 03, 1), y: <?php echo $datesss[3]; ?> , indexLabel: "highest",markerColor: "red", markerType: "triangle" },
        { x: new Date(2012, 04, 1), y: <?php echo $datesss[4]; ?> },
        { x: new Date(2012, 05, 1), y: <?php echo $datesss[5]; ?> },
        { x: new Date(2012, 06, 1), y: <?php echo $datesss[6]; ?>},
        { x: new Date(2012, 07, 1), y: <?php echo $datesss[7]; ?> },
        { x: new Date(2012, 08, 1), y: <?php echo $datesss[8]; ?> },
        { x: new Date(2012, 09, 1), y: <?php echo $datesss[9]; ?> },
        { x: new Date(2012, 10, 1), y: <?php echo $datesss[10]; ?> },
        { x: new Date(2012, 11, 1), y: <?php echo $datesss[11]; ?> }
        ]
      }
      ]
    });
// , indexLabel: "highest",markerColor: "red", markerType: "triangle"
      
// , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"
    chart.render();
  }
  </script>
 <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></head>
    
    
    
    <body>
  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>
</body>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>

    
</html>