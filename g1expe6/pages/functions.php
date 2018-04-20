<?php 
	session_start();
    $_SESSION['uname'] = "";
	$_SESSION['eadd'] =  "";
    $_SESSION['utype'] = "";
    $_SESSION['imagee'] = "";
    //$_SESSION['userid'] = "";
	// connect to database

    $_SESSION['pname'] =  "";
	$_SESSION['phours'] = "";
    $_SESSION['pprice'] = "";
    $_SESSION['pimage'] = "";

   
    $_SESSION['pname1'] =  "";
	$_SESSION['phours1'] = "";
    $_SESSION['pprice1'] = "";
    $_SESSION['pimage1'] = ""; 

	$db = mysqli_connect('localhost', 'root', '', 'gear1');

	// variable declaration
	$firstname = "";
    $lastname  = "";
    $middleinit = "";
    $address  = "";
	$username = "";
	$email    = "";
    $firstname = "";
    $lastname  = "";
    $middleinit = "";
    $address  = "";
	$username = "";
	$email    = "";
	$errors   = array(); 

	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}
if (isset($_POST['enroll_btn'])) {
		enroll();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		userlogin();
	}
    if (isset($_POST['adminlogin_btn'])) {
		adminlogin();
	}
    if (isset($_POST['delete_btn'])) {

	   deleter();
    }
    if (isset($_POST['select_btn'])) {

	   selecter();
    }
    if (isset($_POST['save_btn'])) {

	   updater();
    }

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../login.php");
	}
//manual
 if (isset($_POST['deleteprod_btn'])) {

	   deleter();
    }
    if (isset($_POST['selectprod_btn'])) {

	   selecterprod();
    }
    if (isset($_POST['saveprod_btn'])) {

	   updaterprod();
    }
//matic
 if (isset($_POST['deleteprod1_btn'])) {

	   deleter1();
    }
    if (isset($_POST['selectprod1_btn'])) {

	   selecterprod1();
    }
    if (isset($_POST['saveprod1_btn'])) {

	   updaterprod1();
    }
if (isset($_POST['register_btn'])) {
		register();
	}

	// REGISTER USER
	function register(){
		global $db, $errors;

		// receive all input values from the form
		// receive all input values from the form
        $firstname    =  e($_POST['firstname']);
        $lastname    =  e($_POST['lastname']);
        $middleinit   =  e($_POST['middleinit']);
		$address    =  e($_POST['address']);
        $username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);
        
        $image =  $_FILES['image']['name'];

        //folder of uploaded pictures
        $target = "../photo/".basename($image);
        
  //      $sql = "INSERT INTO users2 (image) VALUES ('$image')";
  	// execute query
  //	mysqli_query($db, $sql);
        
		// form validation: ensure that the form is correctly filled
		if (empty ($firstname)){
            array_push($errors, "Please enter first name");
        }
        if (empty ($lastname)){
            array_push($errors, "Please enter last name");
        }
        if (empty ($middleinit)){
            array_push($errors,"Please enter middle name");
        }
         if (empty ($address)){
            array_push($errors,"Please enter address");
        }
        if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

        //photo checking if image
 
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        
  	}else{
  		array_push ($errors,"Failed to upload image");
  	}
        
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO tbl_students (firstname, middleinit, lastname, address, username, email, user_type, password, image) 
						  VALUES('$firstname','$middleinit','$lastname','$address','$username','$email', '$user_type', '$password','$image')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: home.php');
			}
            else{
				$query = "INSERT INTO tbl_students (firstname, middleinit, lastname, address, username, email, user_type, password,image) 
						  VALUES('$firstname','$middleinit','$lastname','$address','$username', '$email', 'user', '$password','$image')";
				mysqli_query($db, $query);

				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

                $sql = "SELECT * FROM tbl_students WHERE studid = " . $logged_in_user_id;
			
			    $result = mysqli_query($db, $sql);
                
                $logged_in_user = mysqli_fetch_assoc($result);
                
				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
                $_SESSION['image']  = $logged_in_user['image'];
				 $_SESSION['userid']  = $logged_in_user['studid'];
				header('location: index.php');				
			}
            if (!($db->query($query))){
            array_push($errors, "Personal Details Already Registered");
                header ('register.php');
} 

		}

	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM tbl_students WHERE studid=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}
function enroll(){
		global $db, $errors;
$link = mysqli_connect("localhost", "root", "", "gear1");

$package_name = mysqli_real_escape_string($link, $_REQUEST['package_name']);
$transmission_type = mysqli_real_escape_string($link, $_REQUEST['transmission_type']);
$unit_type = mysqli_real_escape_string($link, $_REQUEST['unit_type']);
$package_hours = mysqli_real_escape_string($link, $_REQUEST['package_hours']);
$date_from = mysqli_real_escape_string($link, $_REQUEST['date_from']);
$date_to = mysqli_real_escape_string($link, $_REQUEST['date_to']);
$time_from = mysqli_real_escape_string($link, $_REQUEST['time_from']);
$time_to = mysqli_real_escape_string($link, $_REQUEST['time_to']);

    $sql = "INSERT INTO tbl_booking (package_name, transmission_type,unit_type,package_hours, date_from, date_to, time_from, time_to) VALUES ('$package_name', '$transmission_type', '$unit_type','$package_hours','$date_from', '$date_to','$time_from', '$time_to')";
    
    
if(!($link->query($sql))){
    array_push($errors, "Data Already Booked");
} 
    else{
    array_push($results, "Succesfull Booked");
    
    }
    
// close connection
mysqli_close($link);
    
		
    }
			

		
	// LOGIN USER
	function userlogin(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM tbl_students WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {

				array_push($errors, "Cannot Login Admin");
				header('location: login.php');		  
				}else if ($logged_in_user['user_type'] == 'superadmin') {

					array_push($errors, "Cannot Login Superadmin");
					header('location: login.php');		  
                }
                else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
                    $_SESSION['image'] = $logged_in_user['image'];
                 $_SESSION['userid'] = $logged_in_user['studid'];
					header('location: index.php');
				}
              
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
function adminlogin(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM users2 WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
                    $_SESSION['image'] = $logged_in_user['image'];
					header('location: Admin/home.php');
                    
				}else if ($logged_in_user['user_type'] == 'superadmin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: superAdmin/home.php');		  
                }
                else{
				array_push($errors, "Cannot Login User");
				header('location: adminlogin.php');		  
				}
              
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}


	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
        }
	}
function isSuperAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'superadmin' ) {
			return true;
		}else{
			return false;
		}
	}


	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}
function userTable(){
	$sql = "SELECT studid, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["studid"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

}
function deleter(){

$id = e($_POST['studid']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multi_login";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


	$sql = "DELETE  FROM users2 WHERE studid= '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}

function deleterprod(){

$pid = e($_POST['id']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multi_login";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


	$sql = "DELETE  FROM tbl_productmanual WHERE id= '$pid'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}

//DELETER PROD AUTO
function deleterprod1(){

$pid1 = e($_POST['id']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multi_login";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


	$sql = "DELETE  FROM tbl_productautomatic WHERE id= '$pid1'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}


function updater (){
$id = e($_POST['studid']);
$uname = e($_POST['name']);
$uemail = e($_POST['eaddress']);
$euser = e($_POST['usertype']);
$eimage = e($_POST['image']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multi_login";


$id = e($_POST['studid']);

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


	$sql = "UPDATE users2 SET username= '$uname' , email='$uemail' , user_type='$euser', image='$eimage'   WHERE studid = $id"; 
	
	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
	 $_SESSION['uname'] = "";
	$_SESSION['eadd'] =  "";
	 $_SESSION['utype'] = "";
    $_SESSION['imagee'] = "";
}
 else {
    echo "Error updating record: " . $conn->error;
}
}

function updaterprod (){
$pid = e($_POST['pid']);
$pname = e($_POST['pname']);
$phours = e($_POST['hours']);
$pprice = e($_POST['price']);
$pimage = e($_POST['pimage']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multi_login";


$id = e($_POST['pid']);

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


	$sql = "UPDATE tbl_productmanual SET name= '$pname' , hours='$phours' , price='$pprice', image='$pimage'   WHERE id = $pid"; 
	
	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
	 $_SESSION['pname'] = "";
     $_SESSION['phours'] ="";
	 $_SESSION['pprice'] = "";
     $_SESSION['pimage'] = "";
}
 else {
    echo "Error updating record: " . $conn->error;
}
}

//UPDATER PROD AUTO
function updaterprod1 (){
$pid1 = e($_POST['pid1']);
$pname1 = e($_POST['pname1']);
$phours1 = e($_POST['hours1']);
$pprice1 = e($_POST['price1']);
$pimage1 = e($_POST['pimage1']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multi_login";


$id = e($_POST['pid1']);

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


	$sql = "UPDATE tbl_productmanual SET name= '$pname1' , hours='$phours1' , price='$pprice1', image='$pimage1'   WHERE id = $pid1"; 
	
	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
	 $_SESSION['pname1'] = "";
     $_SESSION['phours1'] ="";
	 $_SESSION['pprice1'] = "";
     $_SESSION['pimage1'] = "";
}
 else {
    echo "Error updating record: " . $conn->error;
}
}



function selecter() {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multi_login";


$id = e($_POST['studid']);

	$con=mysqli_connect($servername,$username,$password,$dbname);
	$result = mysqli_query($con,"SELECT username,email,user_type,image FROM users2 WHERE id = $id"); 
	$row = mysqli_fetch_array($result);
	
	$_SESSION['studids'] =  $id;
   $_SESSION['uname'] =  $row['username'];
	$_SESSION['eadd'] =  $row['email'];
	 $_SESSION['utype'] = $row['user_type'];
     $_SESSION['imagee'] = $row['image'];
}
//SELECTOR PROD
function selecterprod() {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multi_login";


$id = e($_POST['id']);

	$con=mysqli_connect($servername,$username,$password,$dbname);
	$result = mysqli_query($con,"SELECT name,hours,price,image FROM tbl_productmanual WHERE id = $id"); 
	$row = mysqli_fetch_array($result);
	
	$_SESSION['pid'] =  $id;
    $_SESSION['pname'] =  $row['name'];
	$_SESSION['phours'] =  $row['hours'];
    $_SESSION['pprice'] = $row['price'];
    $_SESSION['pimage'] = $row['image'];
     
}

//SELECTOR PROD AUTO
function selecterprod1() {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multi_login";


$id = e($_POST['id']);

	$con=mysqli_connect($servername,$username,$password,$dbname);
	$result = mysqli_query($con,"SELECT name,hours,price,image FROM tbl_productautomatic WHERE id = $id"); 
	$row = mysqli_fetch_array($result);
	
	$_SESSION['pid1'] =  $id;
    $_SESSION['pname1'] =  $row['name'];
	$_SESSION['phours1'] =  $row['hours'];
    $_SESSION['pprice1'] = $row['price'];
    $_SESSION['pimage1'] = $row['image'];
     
    
}

?>
