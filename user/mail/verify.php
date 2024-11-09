<?php
	// include("connect.php");
	// $dbs = new database();
    // $db=$dbs->connection();
    // $r=mysqli_query($db,"select otp from OTP where id=2");
	session_start();
    $otp=$_SESSION['otp'];
    // while($row=mysqli_fetch_assoc($r)){
    //     $otp=$row['otp'];   
    // }
	
	if($otp==$_POST['otpCode'])
	{
		header('location:../home.php');
		exit;
		
	}
	
	header('location:../mail/Enter_otp.php?msg=Erorr In Entering OTP');
	
?>