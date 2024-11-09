<?php 
    include("userheader.php");
    
    
    
    class database
        {
            
            function connection()
            {
                return mysqli_connect('localhost','root','','hrm');
            }
        }
        $dbs=new database();
        $db=$dbs->connection();
        // session_start();
        $emid=$_SESSION['employee_id'];

        // var_dump($emid);
        // $sql = "SELECT * FROM projectinfo WHERE Emp1='$emid' OR Emp2='$emid' OR Emp3='$emid' OR Emp4='$emid' OR Emp5='$emid' OR Emp6=116";
        
        // $result=mysqli_query($db,$sql);
        // $arr[]=array();
        // $row="";
        // if(mysqli_num_rows($result)>0){
        //     while($row=mysqli_fetch_assoc($result)){
        //         $arr[]=$row['projectname'];
        //     }
        // }
        
        $sql="SELECT * FROM employee WHERE EmployeeId=111";
        $result=mysqli_query($db,$sql);
        $project_name="";
        $emp1="";
        $emp2="";
        $emp3="";
        $emp4="";
        $emp5="";
        $emp6="";
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $project_name= $row["project_name"];
               
            }
        }



        $p="SELECT * FROM projectinfo WHERE projectname='$project_name'";
        $res=mysqli_query($db,$p);
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                $emp1=$row["Emp1"];
                $emp2=$row["Emp2"];
                $emp3=$row["Emp3"];
                $emp4=$row["Emp4"];
                $emp5=$row["Emp5"];
                $emp6=$row["Emp6"];
            }
        }
        
        
        function employee_details($db,$var){
            $sql= "SELECT * from employee where EmployeeId='$var'";
            $name="";
            $result=mysqli_query($db,$sql); 
            if(mysqli_num_rows($result)> 0){    
                while($row=mysqli_fetch_assoc($result)){
                    $name=$row['FirstName'].' '.$row['MiddleName'].' '.$row['LastName'];
                }
            }
            return $name;
        }

        function employee_email($db,$var){
            $sql= "SELECT * from employee where EmployeeId='$var'";
            $email="";
            $result=mysqli_query($db,$sql); 
            if(mysqli_num_rows($result)> 0){    
                while($row=mysqli_fetch_assoc($result)){
                    $email=$row['Email'];
                }
            }
            return $email;
        }

        function employee_phone($db,$var){
            $sql= "SELECT * from employee where EmployeeId='$var'";
            $phone="";
            $result=mysqli_query($db,$sql); 
            if(mysqli_num_rows($result)> 0){    
                while($row=mysqli_fetch_assoc($result)){
                    $phone=$row['Mobile'];
                }
            }
            return $phone;
        }
        

        function employee_role($db,$var){
            $sql= "SELECT * from employee where EmployeeId='$var'";
            $phone="";
            $result=mysqli_query($db,$sql); 
            if(mysqli_num_rows($result)> 0){    
                while($row=mysqli_fetch_assoc($result)){
                    $phone=$row['RoleId'];
                }
            }
            return role($phone);
        }

        function role($var){
           
            if($var==1){
                return "HR";
            }
            if($var==2){
                return "Web Developer";
            }
            if($var==3){
                return "FullStack PHP Developer";
            }
        }
        
        
?>
   
   <style>
         /* body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }  */

         h2 {
            color: #333;
            text-align: center;
        }

        .member-card {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 15px;
            width: 300px;
            text-align: left;
            transition: transform 0.3s;
        }

        .member-card:hover {
            transform: scale(1.05);
        }

        strong {
            color: #333;
        }

        p {
            margin: 0;
            color: #555;
        } 
        .scroll-container {
            overflow-y: auto;
            height: 400px; /* Set the height as needed */
            width: 800px; /* Set the width as needed */
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #fff;
        }

    </style>




<div class="scroll-container">
<center>
<h2><?php echo $project_name; ?></h2>
<div class="member-card">
    <strong>Team Manager</strong><br>
    <strong>Name:</strong> <span><?php echo employee_details($db,$emp1); ?></span><br>
    <strong>Email:</strong> <span><?php echo employee_email($db,$emp1); ?></span><br>
    <strong>Phone Number:</strong> +91 <?php echo employee_phone($db,$emp1); ?><br>
    <strong>Role:</strong> <?php echo employee_role($db,$emp1); ?>
</div>

<div class="member-card">
    <strong>Team Lead</strong><br>
    <strong>Name:</strong> <span><?php echo employee_details($db,$emp2); ?></span><br>
    <strong>Email:</strong> <span><?php echo employee_email($db,$emp2); ?></span><br>
    <strong>Phone Number:</strong> +91 <?php echo employee_phone($db,$emp2); ?><br>
    <strong>Role:</strong> <?php echo employee_role($db,$emp2); ?>
</div>

<div class="member-card">
<strong>Developer</strong><br>
    <strong>Name:</strong> <span><?php echo employee_details($db,$emp3); ?></span><br>
    <strong>Email:</strong> <span><?php echo employee_email($db,$emp3); ?></span><br>
    <strong>Phone Number:</strong> +91 <?php echo employee_phone($db,$emp3); ?><br>
    <strong>Role:</strong> <?php echo employee_role($db,$emp3); ?>
</div>

<div class="member-card">
<strong>Developer</strong><br>
    <strong>Name:</strong> <span><?php echo employee_details($db,$emp4); ?></span><br>
    <strong>Email:</strong> <span><?php echo employee_email($db,$emp4); ?></span><br>
    <strong>Phone Number:</strong> +91 <?php echo employee_phone($db,$emp4); ?><br>
    <strong>Role:</strong> <?php echo employee_role($db,$emp4); ?>
</div>

<div class="member-card">
<strong>Testing</strong><br>
    <strong>Name:</strong> <span><?php echo employee_details($db,$emp5); ?></span><br>
    <strong>Email:</strong> <span><?php echo employee_email($db,$emp5); ?></span><br>
    <strong>Phone Number:</strong> +91 <?php echo employee_phone($db,$emp5); ?><br>
    <strong>Role:</strong> <?php echo employee_role($db,$emp5); ?>
</div>

<div class="member-card">
<strong>Testing</strong><br>
    <strong>Name:</strong> <span><?php echo employee_details($db,$emp6); ?></span><br>
    <strong>Email:</strong> <span><?php echo employee_email($db,$emp6); ?></span><br>
    <strong>Phone Number:</strong> +91 <?php echo employee_phone($db,$emp6); ?><br>
    <strong>Role:</strong> <?php echo employee_role($db,$emp6); ?>
</div>
    
    
    </center>
    </div>
    




<?php include("userfooter.php"); ?>

