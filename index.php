<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHOTOGRAPHY WEBSITE</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "stylesheet" href = "simplelightbox-master/dist/simple-lightbox.css">
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
                        <li><a href = "index.php" class = "active">Home</a></li>
                        <li><a href = "gallery.php">Gallery</a></li>
                        <li><a href = "contact.php">Contact</a></li>
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

    <!-- unsplash images-->
        <br><br>
        <section class="text-gray-600 body-font">
            <div class="flex flex-wrap -mx-4 -mb-10 text-center">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="https://source.unsplash.com/1201x501/?mobilephotography,nature">
                </div>
            </div>
        </section>
    <!-- end unsplash images-->
    
        <p style = "font-size :40px; color:#86c232">SAMPLE IMAGES</p>
        <section class = "section-three">
            <div class = "container">
                <div class = "gallery">
                    <a href = "images/s1.jpg">
                        <div class = "single-img">
                            <img src = "images/s1.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/s2.jpg">
                        <div class = "single-img">
                            <img src = "images/s2.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/s3.jpg">
                        <div class = "single-img">
                            <img src = "images/s3.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/s4.jpg">
                        <div class = "single-img">
                            <img src = "images/s4.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/s5.jpg">
                        <div class = "single-img">
                            <img src = "images/s5.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/s6.jpg">
                        <div class = "single-img">
                            <img src = "images/s6.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </section>

    <!-- unsplash images-->
        <section class="text-gray-600 body-font">
            <div class="flex flex-wrap -mx-4 -mb-10 text-center">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="https://source.unsplash.com/1201x501/?nature,mobilephotography">
                </div>
            </div>
        </section>
        <br><br>
    <!-- end unsplash images-->

    <!-- footer -->
        <footer class = "footer">
            <br><br>
            <a href = "gallery.php" class = "active">NEXT PAGE - GALLERY</a>
            <br><br> 
            <a href = "#"><i class = "active"> TOP </i></a>
            <p>&copy; Copyright SARTHAKBHATT</p>
        </footer>
    <!-- end of footer -->

        <!-- LIGHTBOX -->
        <script src = "simplelightbox-master/dist/simple-lightbox.js"></script>
         <script src="script.js"></script>
        <!-- LIGHTBOX - END-->

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