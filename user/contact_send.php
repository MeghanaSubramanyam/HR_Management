<?php

include_once("mail/smtp/PHPMailerAutoload.php");
	class database
		{
			
			function connection()
			{
				return mysqli_connect('127.0.0.1','phpmyadmin','676107869775','hrm');
			}
		}
	
		$dbs = new database();
		$db=$dbs->connection();

		session_start();
		$id=$_SESSION['employee_id'];
		$sql="SELECT Email FROM employee WHERE EmployeeId='$id'";
        $result = mysqli_query($db, $sql);
        $email="";
        while( $row = mysqli_fetch_array($result) ){
            $email=$row["Email"];
        }
        $name=$_POST['fname'];
        $me=$_POST['message'];
        $message=" Message : from $name <br><table style='border:2px solid black' width='600px'><tr><td>$me</td></tr></table>";
        $subject=$_POST['subject'];

        $admin_email=$_POST['email'];
        echo smtp_mailer($admin_email,$subject,$message);
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
            
            header('location:contact.php?result=successfully sent');exit;
        }
    }

    ?>