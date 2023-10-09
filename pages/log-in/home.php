<?php

    session_start();  

    if(!isset($_SESSION['username'])) {
        ?>
        <script>
            alert("You are logged out");
        </script>
        <?php
        header('location:../index.html');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Modern Cookware</title>
    <link rel="stylesheet" href="../../style/style.css">

    <!--//! Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../asset/icon/icon 1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../asset/icon/icon 1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../asset/icon/icon 1/favicon-16x16.png">
    <link rel="manifest" href="../../asset/icon/icon 1/site.webmanifest">
</head>


<body>
    
    <header>
        <div class="hero"></div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="cookware.php">Cookware</a></li>
                <li><a href="electronics.php">Electronics</a></li>
                <li><a href="gadjets.php">Gadgets</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="log-out.php">Log-out</a></li>
                <li><a href='#'><?php echo $_SESSION['username']; ?></a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Cookware</h1>
        <div class="cookware">
            <div class="box">
                <h2>Non- Stick</h2>
                <div class="box-img" style="background-image: url(../../asset/images/cookware_image1.webp);"></div>
                <a href="cookware.html"><p>See more</p></a>             
            </div>
            <div class="box">
                <h2>Melamine Dinner Set</h2>
                <div class="box-img" style="background-image: url(../../asset/images/cookware_image2.webp);"></div>
                <a href="cookware.html"><p>See more</p></a>             
            </div>
            <div class="box">
                <h2>Bone China</h2>
                <div class="box-img" style="background-image: url(../../asset/images/cookware_image3.webp);"></div>
                <a href="cookware.html"><p>See more</p></a>             
            </div>
            <div class="box">
                <h2>Marble Dinner Set</h2>
                <div class="box-img" style="background-image: url(../../asset/images/cookware_image4.webp);"></div>
                <a href="cookware.html"><p>See more</p></a>             
            </div>
            <div class="box">
                <h2>Porcelain Dinner Set</h2>
                <div class="box-img" style="background-image: url(../../asset/images/cookware_image5.webp);"></div>
                <a href="cookware.html"><p>See more</p></a>             
            </div>
        </div>
    </section>

    <section>
        <h1>Electronics</h1>
        <div class="electronics">
            <img src="../../asset/images/Electronics/raf electric stove.webp" alt="RAF Electric Stove" height="200px">

            <img src="../../asset/images/Electronics/raf electric baking pan.webp" alt="RAF Electric Baking Pan" height="200px">

            <img src="../../asset/images/Electronics/raf food processors.webp" alt="RAF Food Processors" height="200px">

            <img src="../../asset/images/Electronics/silvercrest powder grinder.webp" alt="Silver Crest Powder Grinder" height="200px">

            <img src="../../asset/images/Electronics/silvercrest juicer.webp" alt="Silver Crest Juicer" height="200px">

            <img src="../../asset/images/Electronics/silvercrest toaster.webp" alt="Silver Crest Toaster" height="200px">
        </div>
        <p><a href="electronics.html">See More</a></p>
    </section>

    <section>
        <h1>Gadjets</h1>
        <div class="gadjets">
            <video src="../../asset/video/gadjets (1).mp4" controls></video>
            <video src="../../asset/video/gadjets (2).mp4" controls></video>
            <video src="../../asset/video/gadjets (3).mp4" controls></video>
            <video src="../../asset/video/gadjets (4).mp4" controls></video>
        </div>
        <p><a href="gadjets.html">See More</a></p>
    </section>

    <footer>
        <p>&copy; 2023-2023, moderncookware.com, Inc. or its affiliates</p>
        <p>Made with &hearts; by Modern Cookware</p>
    </footer>

</body>
</html>