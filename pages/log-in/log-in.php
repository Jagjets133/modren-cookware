<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in | Modern Cookware</title>
    <link rel="stylesheet" href="../../style/log-in.css">
    
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

    include '../dbcon.php';

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = " select * from registration where email='$email' ";
        $query = mysqli_query($con,$email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];

            $_SESSION['username'] = $email_pass['username'];

            $pass_decode = password_verify($password, $db_pass);

            if($pass_decode){
                ?>
                    <script>
                        alert("Login Successfuly");
                        location.replace("home.php");
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert("Incorrect Password");
                    </script>
                <?php
            }

        } else {
            ?>
                <script>
                    alert("Invalid Email");
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
                    <li><a href="gadjets.html">Gadjets</a></li>
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
        
        <div class="sign-up-form">
            <h1>Log-In</h1>
            <h2>Get started with your free accouunt</h2>

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div id="input">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email address" required>
                </div>

                <div id="input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Create password" required>
                </div>

                <div>
                    <button type="submit" name="submit" id="button">Log in</button>
                </div>
            </form>
            <p>Don't have an account? <a href="sign-up.php">Sign-up here</a></p>
        </div>

    </main>

    <footer>
        <p>&copy; 2023-2023, modrencookware.com, Inc. or its affiliates</p>
        <p>Made with &hearts; by Modren Cookware</p>
    </footer> 


    <script>
        const mobile_nav = document.querySelector(".mobile-nav-btn");
        // const nav_header = document.querySelector("aside");
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