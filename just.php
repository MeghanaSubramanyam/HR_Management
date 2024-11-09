<?php
    // include("header.php");
class database
	{
		
		function connection()
		{
			return mysqli_connect('127.0.0.1','phpmyadmin','676107869775','hrm');
		}
	}
    $dbs=new database();
    $db=$dbs->connection();

    // $project=$_POST['project'];
    // $sql="SELECT * FROM projectinfo WHERE projectname='davudu'";
    // $result=mysqli_query($db,$sql);
    $emp1="111";
    $emp2="897";
    $emp3="113";
    $emp4="114";
    $emp5="115";
    $emp6="116";
    // if(mysqli_num_rows($result)>0){
    //     while($row=mysqli_fetch_assoc($result)){
    //         $emp1=$row['Emp1'];
    //         $emp2=$row['Emp2'];
    //         $emp3=$row['Emp3'];
    //         $emp4=$row['Emp4'];
    //         $emp5=$row['Emp5'];
    //         $emp6=$row['Emp6'];
    //     }
    // }
    $arr_names=array();
    $arr=array();
    $query="SELECT * FROM employee WHERE EmployeeId IN('$emp1','$emp2','$emp3','$emp4','$emp5','$emp6')";
    $result1=mysqli_query($db,$query);
    if(mysqli_num_rows($result1)>0){
        
        while($row=mysqli_fetch_assoc($result1)){
            $arr[]=$row['EmpId'];   
            
        }
    }

    
    print_r($arr);
    function roll($value){
        if($value==1)
            echo "Hr";
        else if($value==2)
            echo "Web Developer";
        else
            echo "Fullstack PHP Devleoper";
    }
    
?>
<?php 
    $q="SELECT * FROM employee WHERE EmpId=1";
    $r=mysqli_query($db,$q);
    if(mysqli_num_rows($r)>0){
        
        while($row=mysqli_fetch_assoc($r)){
            echo $row['FirstName']; 
            $img=$row['ImageName'];
            echo "<img src=$img>";  
            
        }
    }
    ?>