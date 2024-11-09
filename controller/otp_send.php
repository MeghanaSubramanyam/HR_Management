<?php
include('smtp/PHPMailerAutoload.php');

// include_once('connect.php');
// $dbs = new database();
// $db=$dbs->connection();
// $r=mysqli_query($db,"select email from OTP where id=1");
// $email='';
// while($row=mysqli_fetch_assoc($r)){
//     $email=$row['email'];   
// }




//to_mail your mail
function generateNumericOTP($n)
{
  $generator = "1357902468";
  $result = "";

  for ($i = 1; $i <= $n; $i++) {
    $result .= substr($generator, rand() % strlen($generator), 1);
  }

  return $result;
}

// Main program
$n = 6;
$otp=generateNumericOTP($n);
session_start();
$_SESSION['otpcode']=$otp;
$mess="<h2 style='color:green'>OTP</h2> <br>$otp";
$email=$_SESSION['email_id'];

// mysqli_query($db,"update OTP set otp='$otp' where id=1");

echo smtp_mailer($email,'Verification',$mess);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "resource.rgukt@gmail.com";
	$mail->Password = "xjao rnyv viic hldn";
	$mail->SetFrom("resource.rgukt@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		echo "<script>alert('OTP send')</script>";
		header('location:../controller/Enter_otp.php');exit;
	}
}

?> 
