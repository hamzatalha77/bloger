<?php
    include "../funphp/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blooger</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="../css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="../css/Style.css">

</head>

<body>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">Blooger</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="#">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Category</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Archive</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Pages</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>

        <!------------------------ Site Title ---------------------->

        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3>Tours & Travels</h3>
                <h1>Amazing Place on Earth</h1>
                <button class="btn">Explore</button>
            </div>
        </section>

        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Blog Carousel ----------------- -->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="../assets/Blog-post/post-1.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>London Fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="../assets/Blog-post/post-3.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>London Fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="../assets/Blog-post/post-2.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>London Fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="../assets/Blog-post/post-5.png" alt="post-1">
                            <div class="blog-title">
                                <h3>London Fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------x---------- Blog Carousel --------x-------- -->

        <!-- ---------------------- Site Content -------------------------->

        <section class="container">
            <?php        
        $title = mysqli_real_escape_string($conn, $_GET['title']);
        $sql= "SELECT * FROM posts WHERE title='$title'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if($queryResult >0)
          { while ($row = mysqli_fetch_assoc($result)){ ?>
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <?php echo'<img class="img" alt="blog1" src="./artphotos/'.$row['photos'].'">'?>
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;<?php echo $row['user'];?></span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;
                                    <?php echo $row['date'];?></span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#"> <?php echo $row['title']; ?></a>
                            <p> <?php echo $row['object']; ?></p>
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/<?php echo $row['link']; ?>" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>

                    <div class="pagination flex-row">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="pages">1</a>
                        <a href="#" class="pages">2</a>
                        <a href="#" class="pages">3</a>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h2>Category</h2>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="#">Software</a>
                                <span>(05)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="#">Techonlogy</a>
                                <span>(02)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="#">Lifestyle</a>
                                <span>(07)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="#">Shopping</a>
                                <span>(01)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="#">Food</a>
                                <span>(08)</span>
                            </li>
                        </ul>
                    </div>


                    <?php
    include "../funphp/config.php";
   $limit = 3;
   if(isset($_GET['page'])){
   $page = $_GET['page'];
   }else{
    $page = 1;
   }
   $offset = ($page - 1) * $limit;
   $sql = "SELECT * FROM posts Order by id desc LIMIT  {$offset},{$limit}";
   $result = mysqli_query($conn,$sql)or die("Query failed.");
    if(mysqli_num_rows($result)>0) { 
    while ($row = mysqli_fetch_array($result)) { ?>




                    <div class="popular-post">
                        <h2>Popular Post</h2>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <?php echo'<img class="img" alt="blog1" src="./artphotos/'.$row['photos'].'">'?>
                                </div>
                                <div class="post-info flex-row">
                                    <span><i
                                            class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;<?php echo $row['date'];?></span>
                                    <span class="fas fa-user"><?php echo $row['user'];?></span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#"><?php echo $row['title']; ?></a>
                            </div>
                        </div>


                        <?php }
    }?>


























                        <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                            <h2>Newsletter</h2>
                            <div class="form-element">
                                <input type="text" class="input-element" placeholder="Email">
                                <button class="btn form-btn">Subscribe</button>
                            </div>
                        </div>
                        <div class="popular-tags">
                            <h2>Popular Tags</h2>
                            <div class="tags flex-row">
                                <span class="tag" data-aos="flip-up" data-aos-delay="100">Software</span>
                                <span class="tag" data-aos="flip-up" data-aos-delay="200">technology</span>
                                <span class="tag" data-aos="flip-up" data-aos-delay="300">travel</span>
                                <span class="tag" data-aos="flip-up" data-aos-delay="400">illustration</span>
                                <span class="tag" data-aos="flip-up" data-aos-delay="500">design</span>
                                <span class="tag" data-aos="flip-up" data-aos-delay="600">lifestyle</span>
                                <span class="tag" data-aos="flip-up" data-aos-delay="700">love</span>
                                <span class="tag" data-aos="flip-up" data-aos-delay="800">project</span>
                            </div>
                        </div>
                </aside>
            </div>
        </section>

        <!-- -----------x---------- Site Content -------------x------------>

    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->


    <!-- --------------------------- Footer ---------------------------------------- -->

    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia atque nemo ad modi officiis
                    iure, autem nulla tenetur repellendus.</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Instagram</h2>
                <div class="flex-row">
                    <img src="../assets/instagram/thumb-card3.png" alt="insta1">
                    <img src="../assets/instagram/thumb-card4.png" alt="insta2">
                    <img src="../assets/instagram/thumb-card5.png" alt="insta3">
                </div>
                <div class="flex-row">
                    <img src="../assets/instagram/thumb-card6.png" alt="insta4">
                    <img src="../assets/instagram/thumb-card7.png" alt="insta5">
                    <img src="../assets/instagram/thumb-card8.png" alt="insta6">
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow us</h2>
                <p>Let us be Social</p>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2019 All rights reserved | made by
                <a href="www.youtube.com/c/dailytuition" target="_black">Daily Tuition <i class="fab fa-youtube"></i>
                    Channel</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>

    <!-- -------------x------------- Footer --------------------x------------------- -->

    <!-- Jquery Library file -->
    <script src="../js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="../js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="../js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="../js/main.js"></script>
    <?php }
    } ?>
</body>

</html>