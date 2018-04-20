<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php include('../functions.php') ?>
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    
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
    
    
    
    
<body>
	<div class="header">
		<h2>Admin - create user</h2>
	</div>
	
	<form method="post" action="create_userAdmin.php" enctype="multipart/form-data">

		<?php echo display_error(); ?>

        <div class="input-group">
        <label>First Name</label>
        <input name="firstname" placeholder="First Name" class="form-control"  type="text" value="<?php echo $firstname; ?>" autocomplete="off">
        </div>
        
        <div class="input-group">
        <label>Middle Name</label>
         <input name="middleinit" placeholder="Middle Name" class="form-control"  type="text" value="<?php echo $middleinit; ?>" autocomplete="off">
        </div>
        
        <div class="input-group">
        <label>Last Name</label>
          <input name="lastname" placeholder="Last Name" class="form-control"  type="text" value="<?php echo $lastname; ?>" autocomplete="off">
        </div>
        
        <div class="input-group">
        <label>Address</label>
        <input name="address" placeholder="Address" class="form-control"  type="text" value="<?php echo $address; ?>" autocomplete="off">
        </div>
        
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
        <br>
        <div class="form-group">
	<input type="hidden" name="size" value="1000000">
  	  <input type="file" name="image">
		<div class="input-group">
            <br>
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>
	</form>
</body>
</html>