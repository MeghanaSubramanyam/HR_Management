<?php
	
   include("controller/connect.php");

	$dbs = new database();
	$db=$dbs->connection();
	
		// $data=$_POST;
		// $projectname=$data['projectname'];
		// $emp1=$data['teammates11'];
		// $emp2=$data['teammates12']; 
		// $emp3=$data['teammates13'];
		// $emp4=$data['teammates14'];
		// $emp5=$data['teammates15'];
		// $emp6=$data['teammates16'];
		

		// $fetch="SELECT * FROM employee where EmployeeId in ('$emp1','$emp2','$emp3','$emp4','$emp5','$emp6')";
		// $fetch="SELECT * FROM employee where EmployeeId in (111,113,456)";
		// $query= mysqli_query($db,$fetch);
		// $row=mysqli_num_rows($query);
		

        // $sql="INSERT INTO projectinfo VALUES('$projectname','$emp1','$emp2','$emp3','$emp4','$emp5','$emp6')";
		// $result=mysqli_query($db,$sql);
		// // $sql="INSERT INTO projectinfo VALUES('','12','12','23','343','34','3434')";
		// // $result = mysqli_query($db,$sql);
		
		// if($result==1){
		// 	// echo "successfully";
		// 	header("location:projectupdate.php?msg=Successfull to assining the project");
		// }
		// else
		// {
		// 	// echo "unsuccessfull";
		// 	header("location:projectupdate.php?msg=Unsuccessfull to assining the project");
		// }
		
       
		$data=$_POST;
		$projectname=$data['projectname'];
		$emp1=$data['teammates11'];
		$emp2=$data['teammates12']; 
		$emp3=$data['teammates13'];
		$emp4=$data['teammates14'];
		$emp5=$data['teammates15'];
		$emp6=$data['teammates16'];
			
		$project_assign_details=array();
    	$project_assign_details[0]= project_assign($db,$emp1);
		$project_assign_details[1]=project_assign($db, $emp2);
		$project_assign_details[2]=project_assign($db,$emp3);
		$project_assign_details[3]=project_assign($db,$emp4);
		$project_assign_details[4]=project_assign($db,$emp5);
		$project_assign_details[5]=project_assign($db,$emp6);
		
		$AlreadyAsssing =array();
		$i=0;
		$j=0;
		for($i=0;$i<count($project_assign_details);$i++){
			if($project_assign_details[$i]==0)
			{
				$AlreadyAsssing[$j]=$project_assign_details[$i];
				$j++;
			}
		}


		
		$fetch="SELECT * FROM employee where EmployeeId in ('$emp1','$emp2','$emp3','$emp4','$emp5','$emp6')";
		$query= mysqli_query($db,$fetch);
		$row=mysqli_num_rows($query);


		$assign="SELECT project_details FROM employee WHERE EmployeeId in('$emp1','$emp2','$emp3','$emp4','$emp5','$emp6') and project_details=1";

		if($row<6){
			header("location:projectupdate.php?The Id numbers not exist?");
		}
		else{
			$sql="INSERT INTO projectinfo VALUES('$projectname','$emp1','$emp2','$emp3','$emp4','$emp5','$emp6')";
			$result=mysqli_query($db,$sql);

			$pro = "UPDATE employee SET project_name = '$projectname' WHERE EmployeeId IN('$emp1','$emp2','$emp3','$emp4','$emp5','$emp6')";
			$result_pro = mysqli_query($db, $pro);

			header("location:projectupdate.php?successfully added");
		}
		
		function project_assign($db,$var){
			$sql="SELECT project_details FROM employee WHERE EmployeeId='$var' and project_details=1";
			$fetch=mysqli_query($db,$sql);
			$row=mysqli_num_rows($fetch);
			if($row==1)
				return 1;
			else
				return 0;
		}
		
?>
