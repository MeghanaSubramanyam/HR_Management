<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-left ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .nav-left li {
            margin-right: 20px;
            position: relative;
        }

        .nav-left li:hover ul {
            display: block;
        }

        .nav-left ul ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #333;
            padding: 10px;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .nav-left ul ul li {
            margin: 0;
            padding: 0;
            margin-top: 10px;
        }

        .nav-right {
            text-align: right;
        }
    </style>
</head>
<body>

<nav>
    <div class="nav-left">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Location</a></li>
            <li>
                <a href="#">Company</a>
                <ul>
                    <li><a href="#">Submenu 1</a></li>
                    <li><a href="#">Submenu 2</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="nav-right">
        <div class="employee-info">
            <p style="color: white; margin: 0;">Username</p>
            <!-- Add your PHP session logic here -->
        </div>
        <a href="#" style="color: white;">Logout</a>
    </div>
</nav>

<!-- Your content goes here -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
