
<?php
    include("userheader.php");
class database
	{
		
		function connection()
		{
			return mysqli_connect('127.0.0.1','phpmyadmin','676107869775','hrm');
		}
	}
    $dbs=new database();
    $db=$dbs->connection();

    $project=$_POST['project'];
    $sql="SELECT * FROM projectinfo WHERE projectname='$project'";
    $result=mysqli_query($db,$sql);
    $emp1="";
    $emp2="";
    $emp3="";
    $emp4="";
    $emp5="";
    $emp6="";
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $emp1=$row['Emp1'];
            $emp2=$row['Emp2'];
            $emp3=$row['Emp3'];
            $emp4=$row['Emp4'];
            $emp5=$row['Emp5'];
            $emp6=$row['Emp6'];
        }
    }
    $arr_names=array();
    $arr=array();
    $query="SELECT * FROM employee WHERE EmployeeId IN('$emp1','$emp2','$emp3','$emp4','$emp5','$emp6')";
    $result1=mysqli_query($db,$query);
    if(mysqli_num_rows($result1)>0){
        
        while($row=mysqli_fetch_assoc($result1)){
            $arr[]=$row['EmpId'];   
            
        }
    }
    

    function roll($value){
      if($value==1)
          echo "Hr";
      else if($value==2)
          echo "Web Developer";
      else
          echo "Fullstack PHP Devleoper";
  }
       
    
?>
<!DOCTYPE html>
<html>
    <head>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .team-member {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin: 20px;
      padding: 20px;
      text-align: center;
    }

    .team-member img {
      border-radius: 50%;
      max-width: 100%;
      height: auto;
    }

    .team-member h2 {
      margin-top: 10px;
      color: #333;
    }

    .team-member p {
      color: #777;
    }
  </style>
    </head>
    <body>

  <div class="team-member">
  <button style="float:left" value="Back"><a href="projectview.php">Back</a></button>
    <h3>Project Name </h3>
    <h4> <?php echo $project;?></h4>
    
    <!-- <p>Designer</p> -->
  </div>

  <div class="team-member">
    
    <h2></h2>
    <h4><?php 
    $q="SELECT * FROM employee WHERE EmployeeId='$emp1'";
    $r=mysqli_query($db,$q);
    if(mysqli_num_rows($r)>0){
        
        while($row=mysqli_fetch_assoc($r)){
            echo  "Name : ". $row['FirstName'].' '.$row['MiddleName'].' '.$row['LastName'];   
            echo "<br><br>";
            echo roll($row['RoleId']);
        }
    }
    ?></h4>
    <h4> <?php echo "ID NO : ".$emp1 ?></h4>

    
    <a href="detailview.php?employeeid=<?php echo $arr[0]; ?>">view</a>
    <!-- <p>Developer</p> -->
  </div>



  <div class="team-member">
    
    <h2></h2>
    <h4><?php 
    $q="SELECT * FROM employee WHERE EmployeeId='$emp2'";
    $r=mysqli_query($db,$q);
    if(mysqli_num_rows($r)>0){
        
        while($row=mysqli_fetch_assoc($r)){
            echo "Name : ".$row['FirstName'].' '.$row['MiddleName'].' '.$row['LastName']; 
            echo "<br><br>";
            echo roll($row['RoleId']);  
            
        }
    }
    ?></h4>
    <h4> <?php echo "ID NO : ".$emp2 ?></h4>
    <a href="detailview.php?employeeid=<?php echo $arr[1]; ?>">view</a>
    <!-- <p>Developer</p> -->
  </div>




  <div class="team-member">
    
    <h2></h2>
    <h4><?php 
    $q="SELECT * FROM employee WHERE EmployeeId='$emp3'";
    $r=mysqli_query($db,$q);
    if(mysqli_num_rows($r)>0){
        
        while($row=mysqli_fetch_assoc($r)){
            echo "Name : ".$row['FirstName'].' '.$row['MiddleName'].' '.$row['LastName']; 
            echo "<br><br>";
            echo roll($row['RoleId']);  
            
        }
    }
    ?></h4>
    <h4> <?php echo "ID NO : ".$emp3 ?></h4>
    <a href="detailview.php?employeeid=<?php echo $arr[2];?>">view</a>
    <!-- <p>Developer</p> -->
  </div>
  <div class="team-member">
    
    <h2></h2>
    <h4><?php 
    $q="SELECT * FROM employee WHERE EmployeeId='$emp4'";
    $r=mysqli_query($db,$q);
    if(mysqli_num_rows($r)>0){
        
        while($row=mysqli_fetch_assoc($r)){
            echo "Name : ".$row['FirstName'].' '.$row['MiddleName'].' '.$row['LastName']; 
            echo "<br><br>";
            echo roll($row['RoleId']);  
            
        }
    }
    ?></h4>
    <h4> <?php echo "ID NO : ".$emp4 ?></h4>
    <a href="detailview.php?employeeid=<?php echo $arr[3] ;?>">view</a>
    <!-- <p>Developer</p> -->
  </div>
  <div class="team-member">
    
    <h2></h2>
    <h4><?php 
    $q="SELECT * FROM employee WHERE EmployeeId='$emp5'";
    $r=mysqli_query($db,$q);
    if(mysqli_num_rows($r)>0){
        
        while($row=mysqli_fetch_assoc($r)){
            echo "Name : ". $row['FirstName'].' '.$row['MiddleName'].' '.$row['LastName'];   
            echo "<br><br>";
            echo roll($row['RoleId']);
            
        }
    }
    ?></h4>
    <h4> <?php echo "ID NO : ".$emp5 ?></h4>
    <a href="detailview.php?employeeid=<?php echo $arr[4]; ?>">view</a>
    <!-- <p>Developer</p> -->
  </div>
    <div class="team-member">
    
  <h2></h2>
  <h4><?php 
    $q="SELECT * FROM employee WHERE EmployeeId='$emp6'";
    $r=mysqli_query($db,$q);
    if(mysqli_num_rows($r)>0){
        
        while($row=mysqli_fetch_assoc($r)){
            echo "Name : ". $row['FirstName'].' '.$row['MiddleName'].' '.$row['LastName'];   
            echo "<br><br>";
            echo roll($row['RoleId']);
            
        }
    }
    ?></h4>
    <h4> <?php echo "ID NO : ".$emp6 ?></h4>
    <a href="detailview.php?employeeid=<?php echo $arr[5]; ?>">view</a>
    <!-- <p>Developer</p> -->
  </div>
  

    </body>
</html>
  

<?php include('userfooter.php')?>


