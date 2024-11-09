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
        session_start();
        $emid=$_SESSION['User']['EmployeeId'];
        $sql = "SELECT * FROM projectinfo WHERE Emp1='$emid' OR Emp2='$emid' OR Emp3='$emid' OR Emp4='$emid' OR Emp5='$emid' OR Emp6=116";
        
        $result=mysqli_query($db,$sql);
        $arr[]=array();
        $row="";
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $arr[]=$row['projectname'];
            }
        }
        
        
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .head {
            /* background-color: #333; */
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            border-radius: 5px;
        }

        h1, h2, h3 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #666;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            color: #fff;
            background: linear-gradient(to right, #4CAF50, #45a049);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease;
            margin-top: 20px;
        }

        .back-button:hover {
            background: #2c52ed;
        }
        .card{
            width:700px;
            float:left;
            padding-bottom: 40px;
            background-color: #eaeaea;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: #333; /* Text color */
            background-color: #eaeaea; /* Background color */
            padding: 10px 20px; /* Padding around the text */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow */
        }
    </style>
</head>

<body>
    <div class="card">
    <header class="head">
        <h1>Project Name</h1>
    </header>

    <section>
        <h2>About the Project</h2>
        <p>
            This project developing intraction between the Software Employments and Project Manager.
        </p>

        <h2>Project Details</h2>
        <ul>
            <li><strong>Start Date:</strong> January 1, 2023</li>
            <li><strong>End Date:</strong> December 31, 2023</li>
            <li><strong>Project Name :</strong><?php echo $project; ?></li>
            <li><strong>Project Manager:</strong> <?php echo $emp1; ?></li>
            <li><strong>Team Members:</strong> Alice, Bob, Charlie</li>
        </ul>
    </section>

    

    </div>


</body>

</html>
<?php include('userfooter.php'); ?>