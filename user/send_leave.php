<?php

include_once("mail/smtp/PHPMailerAutoload.php");
// class database
// 	{
		
// 		function connection()
// 		{
// 			return mysqli_connect('127.0.0.1','phpmyadmin','676107869775','hrm');
// 		}
// 	}

//     $dbs = new database();
// 	$db=$dbs->connection();
//     $email=$_POST['email'];
    
//     $leavestatus=leave_letter($_POST['leavestatus']);
//     $reason=$_POST['reason'];
//     // $start_date=$_POST['start_date'];
//     // $end_date=$_POST['end_date'];
//     $idnum=$_POST['idname'];
//     $start_date = date('Y-m-d', strtotime($_POST['startdate']));
//     $end_date = date('Y-m-d', strtotime($_POST['enddate']));



   

//     $r=mysqli_query($db,"select FirstName,MiddleName,LastName from employee where EmployeeId=$empid");
//     $name='';
//     while($row=mysqli_fetch_assoc($r)){
//         $name= $row['FirstName']." ". $row['MiddleName']." " .$row['LastName'];   
//     }
    

session_start();
$leavesstatus=leave_letter($_SESSION["LeaveStatus"]);
$reasion=$_SESSION["Reason"];
$startdate=$_SESSION["Startdate"];
$end_date=$_SESSION['Enddate'];
$idnum = $_SESSION['User']['EmployeeId'];
$email=$_SESSION['email'];
$name=$_SESSION['User']['FirstName'].' '.$_SESSION['User']['MiddleName'].' '.$_SESSION['User']['LastName'];



    $msg1="<center><table><tr rowspan='2'><th style='text-alignment:center'>$leavestatus Letter</td></tr>";
    $msg1.="<tr><td> Id no </td><td> $idnum</td></tr>";
    $msg1.="<tr><td> Name </td><td>$name </td></tr>";
    $msg1.="<tr><td> Reason</td><td>$reasion</td></tr>";
    $msg1.="<tr><td> Start Date</td><td>$startdate</td></tr>";
    $msg1.="<tr><td>Span</td>$end_date </td></tr></table></center>";
    

    

    echo smtp_mailer($email,$leavestatus,$msg1);
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
            
            header('location:../user/applyleave.php?result=successfully sent');exit;
        }
    }



    function leave_letter($var){
        if($var==1)
            return "Sick Leave";
        else if($var==3)
            return "Casual Leave";
        else if($var==4)
            return "Privilege Leave";
        else 
            return "Half Day Leave";
    }
?>