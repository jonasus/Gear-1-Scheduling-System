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
    SELECT  username, count(*) as totalprice  FROM listofenrolledstudents  GROUP BY MONTH(dateEnrolled) ", 
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
$dataPoints = array(
	array("label"=> "January", "y"=> $datesss[0]),
	array("label"=> "February", "y"=> $datesss[1]),
	array("label"=> "March", "y"=> $datesss[2]),
	array("label"=> "April", "y"=> $datesss[3]),
	array("label"=> "May", "y"=> $datesss[4]),
	array("label"=> "June", "y"=> $datesss[5]),
	array("label"=> "July", "y"=> $datesss[6]),
	array("label"=> "August", "y"=> $datesss[7]),
	array("label"=> "September", "y"=> $datesss[8]),
	array("label"=> "October", "y"=> $datesss[9]),
    array("label"=> "November", "y"=> $datesss[10]),
    array("label"=> "December", "y"=> $datesss[11])
);

?>



<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Top 10 Google Play Categories - till 2017"
	},
	axisY: {
		title: "Number of Apps",
		includeZero: false
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>  