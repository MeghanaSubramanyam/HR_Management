<?php include("userheader.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <style>
        

        .card {
            background-color: #fff;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px; /* Adjust the width as needed */
        }

        form {
            margin: 0; /* Remove default form margin */
            text-align: center;
        }

        h2 {
            margin-bottom: 10px;
        }

        input[type="file"] {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
    <div class="card">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <h2>Project File Upload</h2>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br>
            <input type="submit" value="Upload File" name="submit">
        </form>
    </div>
    </center>
</body>
</html>
<?php include("userfooter.php"); ?>
