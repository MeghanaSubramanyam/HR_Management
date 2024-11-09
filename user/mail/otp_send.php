<?php
include('smtp/PHPMailerAutoload.php');

// include_once('connect.php');
// $dbs = new database();
// $db=$dbs->connection();
// $r=mysqli_query($db,"select email from OTP where id=2");
// $email='';
// while($row=mysqli_fetch_assoc($r)){
//     $email=$row['email'];   
// }




//to_mail your mail
function generateNumericOTP($n)
{
  // Taking a generator string that consists of
  // all the numeric digits
  $generator = "1357902468";

  // Iterating for n-times and pick a single character
  // from generator and append it to $result

  // Login for generating a random character from generator
  //     ---generate a random number
  //     ---take modulus of same with length of generator (say i)
  //     ---append the character at place (i) from generator to result

  $result = "";

  for ($i = 1; $i <= $n; $i++) {
    $result .= substr($generator, rand() % strlen($generator), 1);
  }

  // Returning the result
  return $result;
}

// Main program
$n = 6;
$otp=generateNumericOTP($n);

session_start();
$_SESSION["otp"] = $otp;
$email=$_SESSION['email_id'];
$mess="<h2 style='color:green'>OTP</h2> <br>$otp";

// mysqli_query($db,"update OTP set otp='$otp' where id=2");

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
		header('location:../mail/Enter_otp.php');exit;
	}
}

?> 
