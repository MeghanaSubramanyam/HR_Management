<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Human Resources</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
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

        h2 {
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
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .back-button {
            display: inline-block;
            float:right;
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
    </style>
</head>

<body>

    <header>
        <h1>About Human Resources</h1>
    </header>
    <a class="back-button" href="home.php">&larr; Back</a>

    <section>
        <h2>Our Mission</h2>
        <p>
            At Human Resources, our mission is to provide innovative and effective solutions to meet the
            diverse needs of organizations and individuals. We strive to create a positive and inclusive work
            environment, foster professional development, and contribute to the overall success of our clients.
        </p>

        <h2>Our Team</h2>
        <p>
            Our team consists of experienced HR professionals dedicated to delivering exceptional services.
            We value collaboration, integrity, and continuous improvement. Each member of our team is committed
            to helping clients achieve their goals and create a thriving workplace.
        </p>

        <h2>Services We Offer</h2>
        <p>
            - Recruitment and Staffing<br>
            - Employee Training and Development<br>
            - HR Consulting<br>
            - Performance Management<br>
            - Workplace Diversity and Inclusion<br>
            - Employee Relations<br>
            - and much more!
            
        </p>
    </section>
    
    

    

</body>

</html>
<?php   
    include ("aboutusfooter.php");
?>