<?php
	// include("connect.php");
	// $dbs = new database();
    // $db=$dbs->connection();
    // $r=mysqli_query($db,"select otp from OTP where id=1");
	session_start();
    $otp=$_SESSION['otpcode'];
    // while($row=mysqli_fetch_assoc($r)){
    //     $otp=$row['otp'];   
    // }
	if($otp==$_POST['otpCode'])
	{
		header('location:../home.php');
		exit;
		
	}
	else{
		echo "<script>alert('Wrong Password')</script>";
	}
	// header('location:../controller/Enter_otp.php?msg=Erorr In Entering OTP');
	
?>