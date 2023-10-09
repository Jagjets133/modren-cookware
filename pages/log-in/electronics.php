<?php

    session_start();  

    if(!isset($_SESSION['username'])) {
        ?>
        <script>
            alert("You are logged out");
        </script>
        <?php
        header('location:../electronics.html');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronics | Modern Cookware</title>
    <link rel="stylesheet" href="../../style/electronics.css">
    
    <!--! Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../asset/icon/icon 1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../asset/icon/icon 1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../asset/icon/icon 1/favicon-16x16.png">
    <link rel="manifest" href="../../asset/icon/icon 1/site.webmanifest">

    <!--! Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <script src='https://kit.fontawesome.com/bcd1b2a4df.js' crossorigin='anonymous'></script>

   <!--! Reveal Elements on Page Scroll -->
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    
    <div class="navbar">

        <div class="mobile-navbar">
            <div class="text">MODERN COOKWARE</div>
            <div class="logo"></div>
        </div>

        <aside>
            <nav>
                <ul class="navbar-list">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="cookware.php">Cookware</a></li>
                    <li>
                        <details> 
                            <summary class="electronics">Electronics</summary>
                            <ol class="electronics-ol">
                                <li><a href='#raf'>RAF Electronics</a></li>
                                <li><a href='#'>SilverCrest</a></li>
                                <li><a href='#'>Hair Accessories</a></li>
                                <!-- <li><a href='#'>Marble Dinner Set</a></li>
                                <li><a href='#'>Porcelain Dinner Set</a></li>
                            </ol> -->
                        </details>
                    </li>
                    <li><a href="gadjets.php">Gadgets</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="log-out.php">Log-out</a></li>
                    <li><a href='#'><?php echo $_SESSION['username']; ?></a></li>
                </ul>
            </nav>
    
            <div class="mobile-nav-btn">
                <i class="fa-solid fa-bars" id="mobile-nav-icon"></i>
                <i class="fa-solid fa-xmark" id="mobile-nav-icon"></i>
            </div>
        </aside>


    </div>

    <main> 
        
        <div id="raf">
            <div class="box">
                <img src="../../asset/images/Electronics/raf electric baking pan.webp" alt="RAF Electric Baking Pan">
                <h1>RAF Electric Baking Pan</h1>
                <p>
                    In a sleek blue color, this Electric Baking Pan is a stylish addition to any home. Its temperature control and speed regulation provide precise and customized cooking, while the independent switch of the upper and lower disc allows for even more control and versatility in your cooking. Overall, this Electric Baking Pan is the perfect choice for anyone looking to take their cooking to the next level. Its optimized features and specifications make it a top choice for anyone looking for a reliable and high-performance baking pan.
                </p>
                <b class="price">RS. 7,799.00</b>
                <a href="#" class="buy-now"><button> Buy Now </button></a>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../../asset/images/Electronics/raf electric stove.webp" alt="RAF Electric Stove">
                <h1>RAF Electric Stove</h1>
                <p>
                    RAF Electric stove, your good helper when cooking, enjoy the beautiful cooking in the kitchen. This is an indispensable thing in any house, it can serve as an alternative or insurance option to the main stove. The compact size allows you to store the device in a closet or storage. The temperature is adjusted in seconds using an automatic switch. &nbsp; The power of the device is 1000 watts, which provides good electrocution functionality. & The clam is very easy to clean and dispose of
                </p>
                <b class="price">RS. 7,899.00</b>
                <a href="#" class="buy-now"><button> Buy Now </button></a>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../../asset/images/Electronics/raf food processors.webp" alt="RAF Food Processors">
                <h1>RAF Food Processors</h1>
                <p>
                    RAF Food Processors, harness the power of electricity for effortless food processing, saving you time and energy in the kitchen. Elevate your culinary prowess with a dedicated kitchen food processor, designed to simplify your meal preparation tasks. Compact yet powerful, our mini food processors are perfect for small kitchens or on-the-go cooking needs without compromising performance.
                </p>
                <b class="price">RS. 6,399.00</b>
                <a href="#" class="buy-now"><button> Buy Now </button></a>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../../asset/images/Electronics/raf blender.webp" alt="RAF Blender">
                <h1>RAF Blender</h1>
                <p>
                    Introducing the RAF 2 in 1 Blender Grinder, the perfect addition to any kitchen. With a powerful 1000 watt motor and 45000 RPM speed, this blender can handle anything from smoothies to ice crushing. It features a stainless steel blender and a glass grinder, both equipped with 6 high quality stainless steel blades. Designed with durability in mind, this blender is built to last. Upgrade your blending game with the RAF Blender Grinder.
                </p>
                <b class="price">RS. 7,699.00</b>
                <a href="#" class="buy-now"><button> Buy Now </button></a>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../../asset/images/Electronics/raf steem iron.webp" alt="RAF Steam Iron">
                <h1>RAF Steam Iron</h1>
                <p>
                    Introducing the RAF Steam Iron Model R.1224, the ultimate solution to all your ironing needs. With a powerful 2400 watts, this iron glides smoothly over clothes for a wrinkle-free finish. Equipped with a water spray and ceramic soleplate, it ensures perfect results every time. The self-cleaning feature saves time and effort, while the heavy-duty steam and more holes for steam make it ideal for tough fabrics. Made with high-quality materials, this iron is designed to last. Upgrade your ironing experience with the RAF Steam Iron Model R.1224
                </p>
                <b class="price">RS. 4,899.00</b>
                <a href="#" class="buy-now"><button> Buy Now </button></a>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../../asset/images/Electronics/raf electric oven.webp" alt="RAF Electric Oven">
                <h1>RAF Electric Oven</h1>
                <p>
                    Introducing the RAF Electric Oven, a sleek and durable kitchen essential. Crafted from aluminum plated iron, it boasts an 11-20-liter capacity, with independent temperature controls for upper and lower tubes. Precise cooking is assured through mechanical control, with added safety from overheat protection. Rated at 700W, 220V voltage, and 50/60Hz frequency, this black oven is perfect for baking and roasting. Weighing 2150KG, it's a must-have for home chefs seeking style and functionality.
                </p>
                <b class="price">RS. 8,499.00</b>
                <a href="#" class="buy-now"><button> Buy Now </button></a>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../../asset/images/Electronics/raf sandwich maker.webp" alt="RAF Sandwich Maker">
                <h1>RAF Sandwich Maker</h1>
                <p>
                    Introducing the RAF R.254 Sandwich Maker, the perfect addition to any kitchen! With 850 watts of power, this compact 2-slice sandwich maker is perfect for small spaces. Plus, it's incredibly easy to clean and there's no need for oil or butter. The Power and Ready lights make it easy to know when your sandwiches are ready to serve fresh and hot. Plus, the Cool Touch Locking Handle ensures safety while handling your delicious creations. Get your RAF Sandwich Maker today and enjoy the perfect snack or lunch
                </p>
                <b class="price">RS. 3,499.00</b>
                <a href="#" class="buy-now"><button> Buy Now </button></a>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../../asset/images/Electronics/raf air fryer.webp" alt="RAF Air Fryer">
                <h1>RAF Air Fryer</h1>
                <p>
                    Introducing the RAF Air Fryer, the perfect addition to your kitchen! This 6-liter capacity fryer is made from durable aluminum and comes with temperature control for perfect cooking every time. With its impressive 1500 watts of power, it can bake, reheat, and fry your favorite foods with ease. Weighing just 3 kilograms, it's easy to move around your kitchen and store away when not in use. Say goodbye to unhealthy frying and hello to delicious, crispy food with the RAF Air Fryer
                </p>
                <b class="price">RS. 15,499.00</b>
                <a href="#" class="buy-now"><button> Buy Now </button></a>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../../asset/images/Electronics/raf slice toaster.webp" alt="RAF Slice Toaster">
                <h1>RAF Slice Toaster</h1>
                <p>
                    Introducing the RAF R 502 Slice Toaster, your breakfast's best friend. This cool-touch 2-slice toaster packs a punch with its 930 Watt motor, guaranteeing perfect toasting every time. With defrost, warm up, and stop functions, you're in control of your toasting experience. It comes in stylish black and vibrant red, featuring an integrated grill pan and bun attachment for added convenience. Safety is paramount with its automatic On-Off function, and at just 0.8kg, it's a sleek addition to any kitchen. Elevate your breakfast game with the RAF Slice Toaster
                </p>
                <b class="price">RS. 5,399.00</b>
                <a href="#" class="buy-now"><button> Buy Now </button></a>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../../asset/images/Electronics/raf mini electric grinder.webp" alt="Mini Electric Grinder">
                <h1>Mini Electric Grinder </h1>
                <p>
                    Introducing the RAF Mini Electric Grinder R-7126 - a kitchen essential for households and commercial kitchens alike! This robust electric grinder effortlessly pulverizes all spice types, from black pepper to cinnamon. With its durable stainless steel shell and potent 300W motor, it's the perfect companion for any bustling kitchen. Whether you're a professional chef or a home cook, the RAF Mini Electric Grinder R-7126 is your trusted tool for grinding and blending. Don't delay; order yours today and unlock the unparalleled convenience and versatility of this remarkable product.
                </p>
                <b class="price">RS. 3,999.00</b>
                <a href="#" class="buy-now"><button> Buy Now </button></a>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../../asset/images/Electronics/raf meat grinder.webp" alt="RAF Meat Grinder">
                <h1>RAF Meat Grinder</h1>
                <p>
                    The RAF Meat Grinder R-3378 is perfect for household use, allowing you to easily grind your own meat at home. This electric grinder is app-controlled, giving you ultimate control over the grind. Its stainless steel housing ensures durability and easy cleaning. With a powerful 2000 watts motor and a voltage of 220, this grinder makes quick work of even the toughest meats. Enjoy fresh, homemade ground meat with the RAF Meat Grinder R-3378.
                </p>
                <b class="price">RS. 14,999.00</b>
                <a href="#" class="buy-now"><button> Buy Now </button></a>
            </div>

        </div>
        


    </main>

    <footer>
        <p>&copy; 2023-2023, moderncookware.com, Inc. or its affiliates</p>
        <p>Made with &hearts; by Modern Cookware</p>
    </footer> 




    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        const mobile_nav = document.querySelector(".mobile-nav-btn");
        const aside = document.querySelector('aside');

        const toggleNavbar = () => {
            aside.classList.toggle('active');
        };

        mobile_nav.addEventListener("click", () => toggleNavbar());


        //* Footer
        let main = document.querySelector('main');
        let footer = document.querySelector('footer');
        footer.style.top = main.offsetHeight + "px";

        
        //* Reveal Elements on Page Scroll
        AOS.init();
        
    </script>

</body>
</html>