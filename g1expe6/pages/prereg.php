<?php
//call the FPDF library
require('fpdf17/fpdf.php');
include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
$usid = $_SESSION['userid'];
$db_username = 'root';
$db_password = '';
$db_name = 'multi_login';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);


/*
 $connect = mysqli_connect("localhost", "root", "", "multi_login");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],
                    'item_hours'               =>     $_POST["hidden_hours"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="normalcourse.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
               'item_hours'               =>     $_POST["hidden_hours"],
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="normalcourse.php"</script>';  
                }  
           }  
      }  
 }  */
 ?>  
<?php 
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
           
		$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				//'item_brand'		=>	$_POST["hidden_brand"],
                'item_name'			=>	$_POST["hidden_name"],
                'item_hours'		=>	$_POST["hidden_hours"],
				'item_price'		=>	$_POST["hidden_price"],
                'item_transmission'	=>	$_POST["hidden_transmission"],
				'item_date'         =>  date(" jS  F Y h:i:s A")
				
			);
			$item_id			=	$_GET["id"];
			//$item_brand			=	$_POST["hidden_brand"];
			$item_name			=	$_POST["hidden_name"];
            $item_hours			=	$_POST["hidden_hours"];
			$item_price	 		=	$_POST["hidden_price"];
            $item_transmission	=	$_POST["hidden_transmission"];
			
       
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multi_login";
// Create connection
$date = date(" jS  F Y h:i:s A");
$datem = date("Y-m-d");
          
                $conn = new mysqli($servername, $username, $password, $dbname);
			
			$query2 = "INSERT INTO enrolledstudents (studid,id,name,hours,price,transmission,date)  VALUES('$usid', '$item_id', '$item_name', '$item_hours','$item_price' , '$item_transmission' , '$datem')";
	    
		if (mysqli_query($conn, $query2)=== True);
		    
			$_SESSION["shopping_cart"][$count] = $item_array;
			echo "Enrolled course Successful";
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			    'item_id'			=>	$_GET["id"],
				//'item_brand'		=>	$_POST["hidden_brand"],
                'item_hours'			=>	$_POST["hidden_hours"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
                'item_transmission'		=>	$_POST["hidden_transmission"],
				'item_date'         =>  date(" jS  F Y h:i:s A")
			
			
		);
	
		$_SESSION["shopping_cart"][0] = $item_array;
	}
} 

$usid = $_SESSION['userid'];
//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();
//results

$pdf->SetFont('Arial','B',14);
$pdf->Image('../images/demo/g1logo.png',10,10,-160);

$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'',0,1);

$pdf->Cell(130 ,5,'Gear 1 Driving School',0,0);
$pdf->Cell(59 ,5,'ENROLLMENT FORM',0,1);//end of line

//font to arial
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'Alabang-Zapote Road, Almanza Uno',0,0);
$pdf->Cell(59 ,5,'',0,1);

$pdf->Cell(130 ,5,'Las Pinas City, NCR, Philippines',0,0);
$pdf->Cell(35 ,5,'Date Registered: ',0,0);
$pdf->Cell(34 ,5, $datem = date("Y-m-d") ,0,1);


$pdf->Cell(130 ,5,'(02) 806 1021',0,0);
$pdf->Cell(24 ,5,'Student ID: ',0,0);
$pdf->Cell(24 ,5,$_SESSION['user']['studid'],0,0);

//end of line

$pdf->Cell(189 ,10,'',0,1);

$pdf->Cell(15 ,5,'Name: ',0,0);
$pdf->Cell(90 ,5, $_SESSION['user']['lastname']. ", ".$_SESSION['user']['firstname']." ".$_SESSION['user']['middleinit'] ,0,1);

$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(18 ,5,'Address:  ',0,0);
$pdf->Cell(90 ,5, $_SESSION['user']['address'],0,1);

$pdf->Cell(189 ,10,'',0,1);
//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130 ,5,'Course Name',1,0);
$pdf->Cell(25 ,5,'Price ',1,0);
$pdf->Cell(34 ,5,'Total',1,1);

foreach($_SESSION["shopping_cart"] as $keys => $values)
    
$pdf->Cell(130 ,5,$values["item_name"],1,0);
$pdf->Cell(25 ,5, "Php. ". $values["item_price"],1,0);
$pdf->Cell(34 ,5,"Php. ". $values["item_price"],1,1);


                            
                         
                        


$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'Thank you for applying to Gear 1 Driving School',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'___________________',0,1);
$pdf->Cell(189 ,10,'Signature of Customer',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'___________________',0,1);
$pdf->Cell(189 ,10,'Signature of Receptionist',0,1);



$pdf->Output();
?>