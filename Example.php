<?php
	$result ="";
	if(isset($_GET['msg']))
	{
		$result=$_GET['msg'];
	}
?>

<!DOCTYPE html>
<html>
    <head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/morris.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css"> 
    <script src="js/jquery-2.1.4.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
        <style>
        
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
.login-w3 {
		width: 100%;
		float: unset;
		text-align: center;
	}

body {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #00e6ee;
    background-image: url('image/human_resources.png');
    background-repeat: no-repeat;
    background-position:center;
    background-size:cover;
   
    
}

::selection {
    color: #fff;
    background: #53f0e3;
}

.wrapper {
    width: 450px;
    padding: 40px 30px 50px 30px;
    background: #fff;
    border-radius: 5px;
    text-align: center;
    box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.1);
}

.wrapper header {
    font-size: 25px;
    font-weight: 550;
}

.wrapper form {
    margin: 40px 0;
}

form .field {
    width: 100%;
    margin-bottom: 20px;
}

form .field.shake {
    animation: shake 0.3s ease-in-out;
}

@keyframes shake {
    0%,
    100% {
        margin-left: 0px;
    }
    20%,
    80% {
        margin-left: -12px;
    }
    40%,
    60% {
        margin-left: 12px;
    }
}

form .field .input-area {
    height: 50px;
    width: 100%;
    position: relative;
}

form input {
    width: 100%;
    height: 100%;
    outline: none;
    padding: 0 45px;
    font-size: 18px;
    background: none;
    caret-color: #5372F0;
    border-radius: 5px;
    border: 1px solid #bfbfbf;
    border-bottom-width: 2px;
    transition: all 0.2s ease;
}

form .field input:focus,
form .field.valid input {
    border-color: #5372F0;
}

form .field.shake input,
form .field.error input {
    border-color: #dc3545;
}

.field .input-area i {
    position: absolute;
    top: 50%;
    font-size: 18px;
    pointer-events: none;
    transform: translateY(-50%);
}

.input-area .icon {
    left: 15px;
    color: #bfbfbf;
    transition: color 0.2s ease;
}

.input-area .error-icon {
    right: 15px;
    color: #dc3545;
}

form input:focus~.icon,
form .field.valid .icon {
    color: #5372F0;
}

form .field.shake input:focus~.icon,
form .field.error input:focus~.icon {
    color: #bfbfbf;
}

form input::placeholder {
    color: #bfbfbf;
    font-size: 17px;
}

form .field .error-txt {
    color: #dc3545;
    text-align: left;
    margin-top: 5px;
}

form .field .error {
    display: none;
}

form .field.shake .error,
form .field.error .error {
    display: block;
}

form .pass-txt {
    text-align: left;
    margin-top: -10px;
}

.wrapper a {
    color: #5372F0;
    text-decoration: none;
}

.wrapper a:hover {
    text-decoration: underline;
}

form input[type="submit"] {
    height: 50px;
    margin-top: 30px;
    color: #fff;
    padding: 0;
    border: none;
    background: #5372F0;
    cursor: pointer;
    border-bottom: 2px solid rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

form input[type="submit"]:hover {
    background: #2c52ed;
}
.button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  border: none;
  border-radius: 5px;
  color: #fff; /* Text color */
  background: linear-gradient(to right, #4CAF50, #45a049); /* Gradient background */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
  transition: background 0.3s ease; /* Smooth color transition on hover */
  
}

        </style>
    </head>
    <body>
    

            <!DOCTYPE html>
            <html lang="en">
            
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Login Form</title>
                <link rel="stylesheet" href="style.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
            </head>
            
            <body>
            
                <div class="wrapper">
                    <header>Human Resources</header>
                    <form action="controller/login.php" method="post" >
				
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="Email" name="name" class="form-control"  placeholder="Enter Email Address">
					<div class="clearfix"></div>
				</div>
                <div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" name="password" class="form-control"  placeholder="Enter Password">
					<div class="clearfix"></div>
				</div>
				
              
                

               
				
		
				<h4 style="color: #F1C40F;"><?php echo $result; ?></h4>
				
				<div class="login-w3">
					<input type="submit" name="submit" class="login" value="Sign In">
				</div>
                
				<br><br>
				<div class="clearfix" ></div>
				<button class="button"><a href="./user" class="text-white" >Login as an Employee</a></button>
				<div class="clearfix"></div>
			</form>
                    <!-- <div class="sign-txt">Login Employee <a href="./user">Click .....</a></div>
                </div> -->
            
                
            
            </body>
            
            </html>
    </body>
</html>