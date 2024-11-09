<!-- <!DOCTYPE html>
<html>
    <head><title>Location</title></head>
    <body>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.9819773489603!2d79.96788317433308!3d15.539096853413414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4b017506bb9fed%3A0xc24a989ce5b955ae!2sSSN%20Degree%20College!5e0!3m2!1sen!2sin!4v1700629749752!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <button ><a href="home.php">Back</a></button>
    </body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Web Page Title</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        #map {
            height: 400px;
            width: 100%;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        section {
            padding: 1em;
        }
        .back-button {
            margin-top: 10px;
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Branch Location</h1>
    </header>

    <section>
        <h2>Location</h2>
        <!-- Replace the latitude and longitude with your desired location -->
        <div id="map">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.9819773489603!2d79.96788317433308!3d15.539096853413414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4b017506bb9fed%3A0xc24a989ce5b955ae!2sSSN%20Degree%20College!5e0!3m2!1sen!2sin!4v1700629749752!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

    </section>
        
    <section>
        <h2>Images</h2>
        <!-- Replace the image paths with your own image URLs -->
        <img src="./img/images.png" alt="Description for Image 1">
        <img src="./img/330x190-2.jpg" alt="Description for Image 2">
        <!-- Add more images as needed -->
    </section>
    <a href="javascript:history.back()" class="back-button">Back</a>
    
</body>
</html>
