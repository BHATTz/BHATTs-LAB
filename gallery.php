<?php include "db_conn.php"; ?>
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
        <style>
            .alb {
                width: 450px;
                height: 300px;
                padding: 5px;
                margin: 40px 78px;
            }
            .alb img {
                width: 100%;
                height: 100%;
            }

        </style>
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
                        <li><a href = "gallery.php" class = "active">Gallery</a></li>
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

        <!-- main -->
        <section class = "section-three">
            <div class = "container">
                <div class = "gallery">
                
                    <a href = "images/r1.jpg">
                        <div class = "single-img">
                            <img src = "images/r1.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r2.jpg">
                        <div class = "single-img">
                            <img src = "images/r2.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r4.jpg">
                        <div class = "single-img">
                            <img src = "images/r4.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r5.jpg">
                        <div class = "single-img">
                            <img src = "images/r5.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r7.jpg">
                        <div class = "single-img">
                            <img src = "images/r7.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r9.jpg">
                        <div class = "single-img">
                            <img src = "images/r9.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r3.jpg">
                        <div class = "single-img">
                            <img src = "images/r3.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt/h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r6.jpg">
                        <div class = "single-img">
                            <img src = "images/r6.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r8.jpg">
                        <div class = "single-img">
                            <img src = "images/r8.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r10.jpg">
                        <div class = "single-img">
                            <img src = "images/r10.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r11.jpg">
                        <div class = "single-img">
                            <img src = "images/r11.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r13.jpg">
                        <div class = "single-img">
                            <img src = "images/r13.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r12.jpg">
                        <div class = "single-img">
                            <img src = "images/r12.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r14.jpg">
                        <div class = "single-img">
                            <img src = "images/r14.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r15.jpg">
                        <div class = "single-img">
                            <img src = "images/r15.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r21.jpg">
                        <div class = "single-img">
                            <img src = "images/r21.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r17.jpg">
                        <div class = "single-img">
                            <img src = "images/r17.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r18.jpg">
                        <div class = "single-img">
                            <img src = "images/r18.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r19.jpg">
                        <div class = "single-img">
                            <img src = "images/r19.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r20.jpg">
                        <div class = "single-img">
                            <img src = "images/r20.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r22.jpg">
                        <div class = "single-img">
                            <img src = "images/r22.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r16.jpg">
                        <div class = "single-img">
                            <img src = "images/r16.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "images/r23.jpg">
                        <div class = "single-img">
                            <img src = "images/r23.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>
                    
                    <a href = "images/r24.jpg">
                        <div class = "single-img">
                            <img src = "images/r24.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>
                    <?php 
                    $sql = "SELECT * FROM images ORDER BY id DESC";
                    $res = mysqli_query($c,  $sql);

                    if (mysqli_num_rows($res) > 0) {
          	        while ($images = mysqli_fetch_assoc($res)) {  ?>
             
                    <a href = "images/<?=$images['image_url']?>">
                        <div class = "single-img">
                        <img src = "images/<?=$images['image_url']?>" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>©_bhatt</h3>
                            </div>
                        </div>
                    </a>
          		
                    <?php 
                    } 
        }?>
                </div>
            </div>
        </section>
        <!-- end of main -->

    <!-- footer -->
    <footer class = "footer">
        <br><br>
        <a href = "contact.php" class = "active">NEXT PAGE - CONTACT</a>
        <br><br>
        <a href = "index.php" class = "active">PREVIOUS PAGE</a>
        <br><br>
        <a href = "#"><i class = "active"> TOP </i></a>
        <p>&copy; Copyright SARTHAKBHATT</p>
    </footer>
    <!-- end of footer -->
        
        <!-- LIGHTBOX -->
        <script src = "simplelightbox-master/dist/simple-lightbox.js"></script>
        <script src="script.js"></script>
        <!-- LIGHTBOX - END-->

        <!-- PRELOADER -->
        <script>
            var loader= document.getElementById("preloader")
            window.addEventListener("load", function(){
                loader.style.display = "none"
            })
        </script>
        <!-- PRELOADER - END-->        
    </body>
</html>