<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHOTOGRAPHY WEBSITE</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>

        <div id="preloader"></div>

        <!-- header -->
        <header class = "header">
            <div class = "nav-section">
                <div class = "brand-and-navBtn">
                    <span class = "brand-name">
                        <a href="index.php"class = "active">BhattsLab</a>
                    </span>
                    <span class = "navBtn flex">
                        <i class = "fas fa-bars"></i>
                    </span>
            </div>
       
            <!-- navigation menu -->
                <nav class = "top-nav">
                    <ul>
                        <li><a href = "index.php">Home</a></li>
                        <li><a href = "gallery.php">Gallery</a></li>
                        <li><a href = "contact.php" class = "active">Contact</a></li>
                        <li><a href = "login/Admin login.php">Login</a></li>
                    </ul>
                </nav>
            </div>
            <div class = "container about">
                <div class = "about-content">
                    <div class = "about-img flex">
                        <img src = "images/P1.jpg" alt = "photographer img">
                    </div>
                    <h2>I'm Sarthak Bhatt</h2>
                    <h3>Nature | Photography</h3>
                    <blockquote>
                        "It is not so much for its beauty that the forest makes a claim upon men’s hearts, as for that subtle something, that quality of air that emanation from old trees, that so wonderfully changes and renews a weary spirit."
                        <span>-Robert Louis Stevenson</span>
                    </blockquote>
                </div>
            <!-- end navigation menu -->

            <!-- Social Media Icons -->   
            <div class = "social-icons">
                <ul>
                    <li>
                        <a href = "https://github.com/BHATTz" target="_blank"><i class = "fab fa-github"></i></a>
                    </li>
                    <li>
                        <a href = "https://twitter.com/SARTHAKBHATTz?t=QVI49QrdIlNOJ6PjulM27Q&s=08" target="_blank"><i class = "fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href = "https://instagram.com/________b__h__a__t__t________?utm_medium=copy_link" target="_blank"><i class = "fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href = "http://www.linkedin.com/in/sarthak-bhatt-09" target="_blank"><i class = "fab fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <!-- end Social Media Icons --> 
            </div>
        </header>
        <!-- end of header -->

        <!-- scrolldown -->
        <section>
            <div class="scrolldown">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>
        <!-- end of scrolldown-->

        <!-- blog-->
                <p style="font-size: 27px;color:#86c232"><b>BIO</b></p>
        <p style="color:#ffffff">
            Sarthak Bhatt is a Twenty years old Nature Photographer from Panchkula. He loves to capture the minute beauty of the surroundings. He is greatly attached with nature and its creation. His goal is to capture diversity in its original form. He began taking photographs in 2017 and captured a lot of pictures of clouds, sunset, sunrise, rainbow, rain, birds,insects, reptiles, mammals, flowers, leaves, plants, trees and the many other creature are the main attraction of his photography. He is continuously creating awareness towards changing environment through his photography. He is using mobile for his clicks. He edit the photographs by using apps like Photoshop Express<a href = " https://play.google.com/store/apps/details?id=com.adobe.psmobile" style = "color:#ffa500">( Download Link )</a>, Adobe Lightroom<a href = " https://play.google.com/store/apps/details?id=com.adobe.lrmobile" style = "color:#ffa500">( Download Link )</a>, Snapseed<a href = " https://snapseed.en.softonic.com/android/download" style = "color:#ffa500">( Download Link )</a>. His aim is to give his best in his photography and to be a passionate photographer. 
         </p>
        <p>"Close to Nature"</p>
        <!-- end of blog-->

            <!-- main -->
            <section class = "section-five">
            <div class = "container">
                <p style="font-size: 27px;color:#86c232"><b>CONTACT US / MAP</b></p>
                <div class = "contact-bottom">
                    <form class = "form" action = "demo.php" method="POST">
                        <input type = "text" placeholder="Your Name" name="username" required>
                        <input type = "email" placeholder="Your Email" name="email" required>
                        <input type = "text" placeholder="Subject" name="subject" required>
                        <textarea rows = "9" placeholder="Message" name="message" required></textarea>
                        <input type = "submit" class = "btn" value = "Send Message" name="submit">
                    </form> 
                                
                    <!-- Map -->
                    <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1714.9472316023257!2d76.86049049145346!3d30.721367195137393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f9304b9cd1ec9%3A0xa03079f264583f0!2sMansa%20Devi%20Complex%2C%20Mansa%20Devi%20Temple%20Complex%2C%20Panchkula%2C%20Haryana%20134114!5e0!3m2!1sen!2sin!4v1653722949104!5m2!1sen!2sin" width="100%" height="430px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                <!-- end Map --> 
                </div>
            </div>
        </section>
        <!-- end of main -->

        <!-- footer -->
        <footer class = "footer">
            <br><br>
            <a href = "index.php" class = "active">HOME PAGE</a>
            <br><br>
            <a href = "gallery.php" class = "active">PREVIOUS PAGE</a>
            <br><br>
            <a href = "#"><i class = "active"> TOP </i></a>
            <p>&copy; Copyright SARTHAKBHATT</p>
        </footer>
    <!-- end of footer -->        
    <script src="script.js"></script>
    <!-- Pre loader -->        
        <script>
        var loader= document.getElementById("preloader")
        window.addEventListener("load", function(){
            loader.style.display = "none"
        })
        </script>
<!-- end Pre loader -->
    </body>
</html>