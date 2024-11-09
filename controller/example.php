<?php
	
	class database
	{
		
		function connection()
		{
			return mysqli_connect('127.0.0.1','phpmyadmin','676107869775','hrm');
		}
	}
    $dbs = new database();
    $db=$dbs->connection();
    $r=mysqli_query($db,"select FirstName,MiddleName,LastName from employee where EmployeeId=154");
    $name='';
    while($row=mysqli_fetch_assoc($r)){
        $name= $row['FirstName']." ". $row['MiddleName']." " .$row['LastName'];   
    }
    echo $name;


?>