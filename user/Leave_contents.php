<?php
include_once("mail/smtp/PHPMailerAutoload.php");
class database
	{
		
		function connection()
		{
			return mysqli_connect('127.0.0.1','phpmyadmin','676107869775','hrm');
		}
	}
    session_start();

    $email=$_POST['email'];
    $SESSION['email']=$email;
    $leavestatus=$_POST['$leavestatus'];
    $SESSION['leavestatus']=$leavestatus;
    header('location:../user/send_leave.php')
   
    // $start_date=$_POST['start_date'];
    // $end_date=$_POST['end_date'];
    // $idnum=$_POST['idname'];

    
    // while($row=mysqli_fetch_assoc($r)){
    //     $name= $row['FirstName']." ". $row['MiddleName']." " .$row['LastName'];   
    // }
?>

<table> 
    <th rowspan="2">Employee Leave</th>
    <tr><td>Name </td><?php
    $r=mysqli_query($db,"select FirstName,MiddleName,LastName from employee where EmployeeId=154");
    while($row=mysqli_fetch_assoc($r)){
        echo $row['FirstName']." ". $row['MiddleName']." " .$row['LastName'];   
    }?></tr>
    <tr><td>ID number</td><td><?php echo $_POST['idname'];?></td>
    </tr>
    <tr><td>Reason</td><td> <?php   echo $_POST['reason']; ?></td></tr>
    <tr><td>Leave Time</td><td><?php echo $_POST['start_date']."-".$_POST['end_date'];?></td>
</table>