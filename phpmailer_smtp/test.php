<?php
include('smtp/PHPMailerAutoload.php');
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$mess="Name : $name <br>Email : $email<br>Subject : $subject<br>Message : $message";
echo smtp_mailer('resource.rgukt@gmail.com','Feedback',$mess);
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
	$mail->Username = "malyadri6761@gmail.com";
	$mail->Password = "fcek lrfm wqsy jvxv";
	$mail->SetFrom("malyadri6761@gmail.com");
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
		header("location:../../hrl/index.html");
	}
}
?>