<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

    if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: login.php");
	}
?>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Admin Check Products </title>
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
						<a href = "home.php">Back to Home</a>
						<a href="../index.php?logout='1'" style="color: red;">logout</a>
							&nbsp; <a href="create_userSuperAdmin.php"> + add user</a>
					</small>

				<?php endif ?>
				
				
			</div>
         
    </div>
    </div>

    <!-- ################################################################################################ -->
  </div>
</div>
	<div class="content">
	
	<table>
</table>
		<!-- notification message -->
                <?php
				
				//Table for users
				
				$servername = "localhost";
$username = "root";
$password = "";
$db = "multi_login";


				$con=mysqli_connect($servername,$username,$password,$db);
				$result = mysqli_query($con,"SELECT id,name,hours,image,price FROM tbl_productmanual"); 
				

echo "<table style='border: solid 1px black;'>";
 echo "<tr>
 <th>Id</th>
 <th>Name</th>
 <th>Hours</th>
 <th>Image</th>
 <th>Price</th>
<th>Add Edit Or Delete</th>
 </tr>";
 echo "Manual Courses";
while($row = mysqli_fetch_array($result)) {
$id = $row['id'];

    echo "<tr>";
    echo "<td style='width:150px;border:1px solid black;'>" . $row['id'] . "</td>";
    echo "<td style='width:150px;border:1px solid black;'>" . $row['name'] . "</td>";
    echo "<td style='width:150px;border:1px solid black;'>" . $row['hours'] . "</td>";
    echo "<td style='width:150px;border:1px solid black;'>" . $row['image'] . "</td>";
echo "<td style='width:150px;border:1px solid black;'>" . $row['price'] . "</td>"; 
echo '<td><form method="post" action="" enctype="multipart/form-data" ><button type="submit" class="btn" name="delete_btn">Delete Product</button></td><td><input type="hidden" name="id" value="' . $id . '"/></td></form>';
 echo "</tr>";
}
echo "</table>";
?>
                
			</div>
	
</body>
</html>