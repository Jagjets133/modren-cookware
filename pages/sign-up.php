<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in | Modern Cookware</title>
    <link rel="stylesheet" href="../style/sign-in.css">
    
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

    include 'dbcon.php';

    if(isset($_POST['submit'])){

        $username = mysqli_real_escape_string($con, $_POST['username']) ;
        $email = mysqli_real_escape_string($con, $_POST['email']) ;
        $password = mysqli_real_escape_string($con, $_POST['password']) ;
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $emailquery = " select * from registration where email='$email' ";
        $query = mysqli_query($con,$emailquery);

        $emailcount = mysqli_num_rows($query);

        if($emailcount>0){
            ?>
                <script>
                    alert("Email Already Exists");
                </script>
            <?php
        } else{
            
            if($password === $cpassword){

                $insertquery = "insert into registration( username, email, password, cpassword) values('$username','$email','$pass','$cpass')";

                $iquery = mysqli_query($con, $insertquery);

                if($iquery) {
                    ?>
                        <script>
                            alert("Sign-up Successfully");
                        </script>
                    <?php
                }else {
                    ?>
                        <script>
                            alert("Something went wrong");
                        </script>
                    <?php
                }

            }else{
                ?>
                    <script>
                        alert("Password are not matching");
                    </script>
                <?php
            }
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
        
        <div class="sign-up-form">
            <h1>Create Account</h1>
            <h2>Get started with your free account</h2>

            <form action="" method="POST">
                <div id="input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" id="username" placeholder="Full name" required>
                </div>

                <div id="input">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email address" required>
                </div>

                <div id="input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Create password" required>
                </div>

                <div id="input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password" required>
                </div>

                <div>
                    <button type="submit" name="submit" id="button" > Create Account</button>
                </div>
            </form>
            <p>Have an account? <a href="log-in/log-in.php">Log In</a></p>
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