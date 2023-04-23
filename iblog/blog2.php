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
    <link rel="stylesheet" href="../iblog/css/ass.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="../css/Style.css">

</head>

<body>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    <?php
    include('headerblog.php');
?>

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

        <!-- ----------x---------- Blog Carousel --------x-------- -->

        <!-- ---------------------- Site Content -------------------------->



        <section class="container">

            <div class="site-content">


                <div class="posts">
                    <?php
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
                            <a><?php echo $row['title']; ?></a>
                            <p><?php echo substr($row['object'],0,110) . "..."; ?></p>
                            <?php echo "<a class=btn post-btn href='blogpost.php?id=".$row['id']."'> Read More !</a>";?>
                        </div>
                    </div>
                    <hr>
                    <?php }
                         }?>
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <div class="looking">
                            <form action="../iblog/google.php" method="POST">
                                <input type="text" class="input-element" name="search" placeholder="Search !">
                                <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
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




                    <div class="popular-post">
                        <h2>Popular Post</h2>
                        <?php
   $limit = 3;
   if(isset($_GET['page'])){
   $page = $_GET['page'];
   }else{
    $page = 1;
   }
   $offset = ($page - 1) * $limit;
   $sql = "SELECT * FROM posts Order by id asc LIMIT  {$offset},{$limit}";
   $result = mysqli_query($conn,$sql)or die("Query failed.");
    if(mysqli_num_rows($result)>0) { 
    while ($row = mysqli_fetch_array($result)) { ?>





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
                                <a
                                    href="#"><?php echo "<a href='blogpost.php?id=".$row['id']."'>";?><?php echo $row['title']; ?></a>

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
    <?php
$sql1 = "SELECT * FROM posts";
$result1 = mysqli_query($conn, $sql1) or die("Query failed.");
    if(mysqli_num_rows($result1) > 0){
        $total_records = mysqli_num_rows($result1);
        $total_page = ceil($total_records / $limit);
            echo '<div class="pagination">';
            if($page > 1){
                echo'<a href="blog2.php?page='.($page - 1).'">Prev</a>';
            }
            for($i = 1; $i <= $total_page; $i++){
                if($i == $page){
                    $active = "active";
                }
                else{
                    $active ="";
                }
            echo '<a class="'.$active.'" href="blog2.php?page='.$i.'">'.$i.'</a>';
        }
          if($total_page > $page){
                echo'<a href="blog2.php?page='.($page + 1).'">next</a>';
            }
        echo'</div>';
    }
?>
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
                    <img src="./assets/instagram/thumb-card3.png" alt="insta1">
                    <img src="./assets/instagram/thumb-card4.png" alt="insta2">
                    <img src="./assets/instagram/thumb-card5.png" alt="insta3">
                </div>
                <div class="flex-row">
                    <img src="./assets/instagram/thumb-card6.png" alt="insta4">
                    <img src="./assets/instagram/thumb-card7.png" alt="insta5">
                    <img src="./assets/instagram/thumb-card8.png" alt="insta6">
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
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>

</body>

</html>