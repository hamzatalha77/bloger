<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blogpost.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/all.css">



    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">
    <link rel="stylesheet" href="./css/ass.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="../css/style.css">
    <title>iBlog - Heaven for bloggers</title>
</head>
<body>


    <?php
    include('headerblog.php');
?>

    <div class="max-width-1 m-auto">
        <?php $id = $_GET['id'];?>
        <?php      
        $sql= "SELECT * FROM posts WHERE  id='$id'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if($queryResult >0){
           while ($posts = mysqli_fetch_assoc($result)){
               $id = $posts['id'];
               ?>
        <hr>

    </div>

    <div class="post-img">

        <?php echo'<img class="img" alt="blog1" src="./artphotos/'.$posts['photos'].'">'?>
    </div>

    <div class="m-auto blog-post-content max-width-2 m-auto my-2">
        <h1 class="font1"><?php echo $posts['title']; ?></h1>
        <div class="blogpost-meta">
            <div class="author-info">
                <div>
                    <b>
                        <?php echo $posts['user'];?>
                    </b>
                </div>
                <div> <?php echo $posts['date'];?></div>
            </div>
            <div class="social">
                <svg width="29" height="29" class="hk">
                    <path
                        d="M22.05 7.54a4.47 4.47 0 0 0-3.3-1.46 4.53 4.53 0 0 0-4.53 4.53c0 .35.04.7.08 1.05A12.9 12.9 0 0 1 5 6.89a5.1 5.1 0 0 0-.65 2.26c.03 1.6.83 2.99 2.02 3.79a4.3 4.3 0 0 1-2.02-.57v.08a4.55 4.55 0 0 0 3.63 4.44c-.4.08-.8.13-1.21.16l-.81-.08a4.54 4.54 0 0 0 4.2 3.15 9.56 9.56 0 0 1-5.66 1.94l-1.05-.08c2 1.27 4.38 2.02 6.94 2.02 8.3 0 12.86-6.9 12.84-12.85.02-.24 0-.43 0-.65a8.68 8.68 0 0 0 2.26-2.34c-.82.38-1.7.62-2.6.72a4.37 4.37 0 0 0 1.95-2.51c-.84.53-1.81.9-2.83 1.13z">
                    </path>
                </svg>

                <svg style="background: black;
                border-radius: 21px;" width="29" height="29" viewBox="0 0 29 29" fill="none" class="hk">
                    <path
                        d="M5 6.36C5 5.61 5.63 5 6.4 5h16.2c.77 0 1.4.61 1.4 1.36v16.28c0 .75-.63 1.36-1.4 1.36H6.4c-.77 0-1.4-.6-1.4-1.36V6.36z">
                    </path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M10.76 20.9v-8.57H7.89v8.58h2.87zm-1.44-9.75c1 0 1.63-.65 1.63-1.48-.02-.84-.62-1.48-1.6-1.48-.99 0-1.63.64-1.63 1.48 0 .83.62 1.48 1.59 1.48h.01zM12.35 20.9h2.87v-4.79c0-.25.02-.5.1-.7.2-.5.67-1.04 1.46-1.04 1.04 0 1.46.8 1.46 1.95v4.59h2.87v-4.92c0-2.64-1.42-3.87-3.3-3.87-1.55 0-2.23.86-2.61 1.45h.02v-1.24h-2.87c.04.8 0 8.58 0 8.58z"
                        fill="#fff"></path>
                </svg>

                <svg width="29" height="29" class="hk">
                    <path
                        d="M23.2 5H5.8a.8.8 0 0 0-.8.8V23.2c0 .44.35.8.8.8h9.3v-7.13h-2.38V13.9h2.38v-2.38c0-2.45 1.55-3.66 3.74-3.66 1.05 0 1.95.08 2.2.11v2.57h-1.5c-1.2 0-1.48.57-1.48 1.4v1.96h2.97l-.6 2.97h-2.37l.05 7.12h5.1a.8.8 0 0 0 .79-.8V5.8a.8.8 0 0 0-.8-.79">
                    </path>
                </svg>

            </div>
        </div>
        <iframe width="900" height="400" src="https://www.youtube.com/embed/<?php echo $posts['link']; ?>"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        <?php echo "<p>".nl2br($posts['object']). "</p>";?>
    </div>
    <?php }
    }?>
    <div class="max-width-1 m-auto">

        <hr>

    </div>

    <div class="wrapper">
        <form class="login100-form validate-form" action="../funphp/comment.php" method="post"
            enctype="multipart/form-data" class="from">
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <div class="input-group textarea">
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
            </div>
            <div class="input-group">
                <button name="postcomment" class="btn">Post Comment</button>
            </div>
        </form>
        <div class="prev-comments">
            <?php 
			
			$sql = "SELECT * FROM comments WHERE post_id='$id' ORDER BY id DESC";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
            <div class="single-item">
                <h4><i class="fa fa-fw fa-user"></i><?php echo $row['username']; ?></h4>
                <h5>Posted at &nbsp;&nbsp;<i class="fas fa-calendar-alt"></i> &nbsp;&nbsp;<?php echo $row['date']; ?>
                </h5>

                <h3><?php echo $row['comment']; ?></h3>
            </div>
            <?php

				}
			}
			
			?>
        </div>
    </div>
    <div class="home-articles max-width-1 m-auto font2">
        <h2>People who read this also read</h2>
        <div class="row">
            <?php
   $limit = 3;
   if(isset($_GET['page'])){
   $page = $_GET['page'];
   }else{
    $page = 1;
   }
   $offset = ($page - 1) * $limit;
   $sql = "SELECT * FROM posts Order by rand() limit 3 ";
   $result = mysqli_query($conn,$sql)or die("Query failed.");
    if(mysqli_num_rows($result)>0) { 
    while ($posts = mysqli_fetch_array($result)) { ?>
            <div class="home-article more-post">

                <div class="home-article-img">
                    <?php echo'<img class="img" src="./artphotos/'.$posts['photos'].'">'?>
                </div>
                <div class="home-article-content font1 center">
                    <a href="/blogpost.html">
                        <h3><?php echo "<a href='blogpost.php?id=".$posts['id']."'>";?><?php echo $posts['title']; ?>
                    </a>
                    </h3>
                    </a>
                </div>

            </div>
            <?php }
    }?>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia atque nemo ad modi
                    officiis
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