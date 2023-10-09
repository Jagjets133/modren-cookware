<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Modern Cookware</title>
    <link rel="stylesheet" href="../style/contact.css">
    
    <!-- //! Favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="../asset/icon/icon 1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../asset/icon/icon 1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../asset/icon/icon 1/favicon-16x16.png">
    <link rel="manifest" href="../asset/icon/icon 1/site.webmanifest">

    <!-- //! Font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <script src='https://kit.fontawesome.com/bcd1b2a4df.js' crossorigin='anonymous'></script>
</head>

<body>

    <?php

        include 'contact-dbcon.php';

        if(isset($_POST['submit'])){

            $title = mysqli_real_escape_string($con, $_POST['title']) ;
            $email = mysqli_real_escape_string($con, $_POST['email']) ;
            $messege = mysqli_real_escape_string($con, $_POST['messege']) ;

            $insertquery = "insert into contact_details( title, email, messege) values('$title','$email','$messege')";

            $iquery = mysqli_query($con, $insertquery);


            if($iquery) {
                ?>
                    <script>
                        alert("Message Sent Successfully");
                        // let contact_messege = document.getElementById(contact_messege);
                        // let messege_title = document.getElementById(messege_title);
                        // let messege_email = document.getElementById(messege_email);
                        // let messege_description = document.getElementById(messege_description);

                        // contact_messege.classList.remove('hide');
                        // messege_title.innerHTML = document.getElementById('title').value;
                        // messege_email.innerHTML = document.getElementById('email').value;
                        // messege_description.innerHTML = document.getElementById('messege').value;

                        
                    </script>
                <?php
            }else {
                ?>
                    <script>
                        alert("Something went wrong :(");
                    </script>
                <?php
            }

        } 

    ?>

    <div class="navbar">

        <div class="mobile-navbar">
            <div class="text">MODERN COOKWARE</div>
            <div class="logo"></div>
        </div>

        <aside>
            <nav>
                <ul class="navbar-list">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="cookware.html">Cookware</a></li>
                    <li><a href="electronics.html">Electronics</a></li>
                    <li><a href="gadjets.html">Gadgets</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="sign-in.php">Sign-in</a></li>
                </ul>
            </nav>
    
            <div class="mobile-nav-btn">
                <i class="fa-solid fa-bars" id="mobile-nav-icon"></i>
                <i class="fa-solid fa-xmark" id="mobile-nav-icon"></i>
            </div>
        </aside>

    </div>

    <main> 
        
        

        <div class="contact-form">
            <h1>Contact Us</h1>
            <h2><a href="mailto:moderncookware@asia.com">moderncookware@asia.com</a></h2>

            <!-- <div id="contact_messege"> <!- - class="hide" - ->
                <div id="messege_title"></div>
                <div id="messege_email"></div>
                <div id="messege_description"></div>
            </div> -->


            <form action="" method="POST">           
                <input type="text" name="title" id="title" placeholder="Title" required>                    
                <input type="email" name="email" id="email" placeholder="Email address" required>                                    
                <textarea rows="7" name="messege" id="messege" placeholder="Message" required></textarea>
                <button type="submit" name="submit" id="button" > Submit</button>
            </form>
        </div>

    </main>

    <footer>
        <p>&copy; 2023-2023, moderncookware.com, Inc. or its affiliates</p>
        <p>Made with &hearts; by Modern Cookware</p>
    </footer> 

    <script>
        const mobile_nav = document.querySelector(".mobile-nav-btn");
        const aside = document.querySelector('aside');

        const toggleNavbar = () => aside.classList.toggle('active');

        mobile_nav.addEventListener("click", () => toggleNavbar());


        //* Footer
        let main = document.querySelector('main');
        let footer = document.querySelector('footer');
        footer.style.top = main.offsetHeight + "px";
        
    </script>

</body>
</html>