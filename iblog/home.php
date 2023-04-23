<?php
     include "../funphp/config.php";
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
    <div class="max-width-1 m-auto">
        <hr />
    </div>
    <div class="m-auto content max-width-1 my-2">
        <div class="content-left">

            <h1>The heaven for bloggers</h1>
            <p>
                iBlog is a website which lets you submit an article which upon
                approval will be up on our website and you can get a good amount of
                reach from here!
            </p>
            <p>
                My Halloween decorations are staying in the box this year. To be
                honest, they didn’t make it out of the box last year either. My
                Halloween spirit has officially been bludgeoned to death by teenagers
                who no longer care and a persistent October fear of the Northern
                California wildfires. And speaking of fear, isn’t there more than
                enough of that going around? Maybe all of us can pretend that
                Halloween isn’t even happening this year?
            </p>
        </div>
        <div class="content-right">
            <img src="img/home.svg" alt="iBlog" />
        </div>
    </div>

    <div class="max-width-1 m-auto">
        <hr />
    </div>
    <div class="main">
        <form action="../iblog/google.php" method="POST">

            <input type="text" name="search" placeholder="Search !">
            <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>

        </form>
    </div>











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
    <div class="home-articles max-width-1 m-auto font2">
        <h2>Featured Articles</h2>

        <div class="home-article">
            <div class="home-article-img">
                <?php echo'<img src="./artphotos/'.$row['photos'].'">'?>
            </div>
            <div class="home-article-content font1">
                <a href="/blogpost.html">
                    <h3><?php echo $row['title']; ?></h3>
                </a>

                <span class="fas fa-user"><?php echo $row['user'];?></span>
                <span class="fas fa-calendar-alt"><?php echo $row['date'];?></span>
                <div class="home-article-content ">
                    <p><?php echo substr($row['object'],0,110) . "..."; ?></p>
                </div>
                <?php echo "<a class=btn2 href='blogpost.php?title=".$row['title']."'> Read More !</a>";?>
            </div>
        </div>
    </div>
    <?php }
    }?>





    <?php
$sql1 = "SELECT * FROM posts";
$result1 = mysqli_query($conn, $sql1) or die("Query failed.");
    if(mysqli_num_rows($result1) > 0){
        $total_records = mysqli_num_rows($result1);
        $total_page = ceil($total_records / $limit);
            echo '<div class="pagination">';
            if($page > 1){
                echo'<a href="home.php?page='.($page - 1).'">Prev</a>';
            }
            for($i = 1; $i <= $total_page; $i++){
                if($i == $page){
                    $active = "active";
                }
                else{
                    $active ="";
                }
            echo '<a class="'.$active.'" href="home.php?page='.$i.'">'.$i.'</a>';
        }
          if($total_page > $page){
                echo'<a href="home.php?page='.($page + 1).'">next</a>';
            }
        echo'</div>';
    }
?>



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
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>