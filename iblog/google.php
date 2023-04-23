<?php
    include "../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/all.css" />
    <link rel="stylesheet" href="./css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="./css/aos.css" />
    <link rel="stylesheet" href="css/utils.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/ass.css">
    <title>iBlog - Heaven for bloggers</title>
</head>
<body>
    <?php
    include('headerblog.php');
?>
    <div class="main">
        <form action="../iblog/google.php" method="POST">
            <input type="text" name="search" placeholder="Search !">
            <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <h2>Featured Articles</h2>
    <?php
    if(isset ($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM posts WHERE title LIKE '%$search%' OR object LIKE '%$search%' 
        OR user LIKE '%$search%' OR date LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        echo "<div class=success>
        <span class=closebtn><i class=fa fa-search></i></span> 
        <strong>There!</strong> Are ".$queryResult." Results !
        </div>";}
        else{
        echo "<div class=alert>
        <span class=closebtn><i class=fa fa-search></i></span> 
        <strong>There</strong> is No Result Matching Your Search !
        </div>";}
        if($queryResult > 0){
        while ($row = mysqli_fetch_array($result)){?>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font2">


        <div class="home-article">
            <div class="home-article-img">
                <?php echo'<img src="./artphotos/'.$row['photos'].'">'?>
            </div>
            <div class="home-article-content font1">

                <h4><?php echo "<a href='blogpost.php?id=".$row['id']."'>";?><?php echo $row['title']; ?>
                </h4>


                <span class="fas fa-user"><?php echo $row['user'];?></span>
                <span class="fas fa-calendar-alt"><?php echo $row['date'];?></span>
                <div class="home-article-content ">
                    <p><?php echo substr($row['object'],0,110) . "..."; ?></p>
                </div>
                <?php echo "<a class=btn2  href='blogpost.php?id=".$row['id']."'> Read More !</a>";?>
            </div>
        </div>
    </div>
    <?php }
    }?>
    <h2>Featured Articles</h2>
    <?php
    if(isset ($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM article WHERE title LIKE '%$search%' ";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        echo "<div class=success>
        <span class=closebtn><i class=fa fa-search></i></span> 
        <strong>There!</strong> Are ".$queryResult." Results !
        </div>";}
        else{
        echo "<div class=alert>
        <span class=closebtn><i class=fa fa-search></i></span> 
        <strong>There</strong> is No Result Matching Your Search !
        </div>";}
        if($queryResult > 0){
        while ($row = mysqli_fetch_array($result)){?>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font2">


        <div class="home-article">
            <div class="home-article-img">
                <?php echo'<img src="./artphotos/'.$row['photos'].'">'?>
            </div>
            <div class="home-article-content font1">

                <h4><?php echo "<a href='blogpost.php?id=".$row['id']."'>";?><?php echo $row['title']; ?></h4>


                <span class="fas fa-user"><?php echo $row['user'];?></span>
                <span class="fas fa-calendar-alt"><?php echo $row['date'];?></span>
                <div class="home-article-content ">
                    <p><?php echo substr($row['object'],0,110) . "..."; ?></p>
                </div>
                <?php echo "<a class=btn2  href='blogpost.php?id=".$row['id']."'> Read More !</a>";?>
            </div>
        </div>
    </div>
    <?php }
    }?>



    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium
                    quia atque nemo ad modi officiis iure, autem nulla tenetur
                    repellendus.
                </p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email" /><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Instagram</h2>
                <div class="flex-row">
                    <img src="./assets/instagram/thumb-card3.png" alt="insta1" />
                    <img src="./assets/instagram/thumb-card4.png" alt="insta2" />
                    <img src="./assets/instagram/thumb-card5.png" alt="insta3" />
                </div>
                <div class="flex-row">
                    <img src="./assets/instagram/thumb-card6.png" alt="insta4" />
                    <img src="./assets/instagram/thumb-card7.png" alt="insta5" />
                    <img src="./assets/instagram/thumb-card8.png" alt="insta6" />
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

    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
</body>
</html>