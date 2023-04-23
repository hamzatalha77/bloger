<?php 
    include("action.php");
    if (isset($_SESSION['id']) && isset($_SESSION['user'])                                                                                                                      )
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Sidebar Menu with sub-menu | CodingNepal</title>
    <link rel="stylesheet" href="php-style/side.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="topnav">
        <a href="logout.php" class="active"><i class="fa fa-fw fa-home"></i> Logout</a>
        <a><i class="fa fa-fw fa-user"></i><?php echo $_SESSION['user']; ?></a>
    </div>
    <div class="btn">
        <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="text">Side Menu</div>
        <ul>
            <li class="active"><a href="myside.php">Dashboard</a></li>
            <li>
                <a href="#" class="feat-btn">Features
                    <span class="fas fa-caret-down first"></span>
                </a>
                <ul class="feat-show">
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Elements</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="serv-btn">Article
                    <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="serv-show">
                    <li><a href="index2.php">List Article</a></li>
                    <li><a href="contact.php">Add Article</a></li>

                </ul>
            </li>
            <li><a href="index.php">List Admin</a></li>
            <li><a href="addadmin.php">Add Admin</a></li>

            <li><a href="posts.php">Posts</a></li>
            <li><a href="pagin.php">blog</a></li>
        </ul>
    </nav>


    <script>
    $('.btn').click(function() {
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
    });
    $('.feat-btn').click(function() {
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
    });
    $('.serv-btn').click(function() {
        $('nav ul .serv-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
    });
    $('nav ul li').click(function() {
        $(this).addClass("active").siblings().removeClass("active");
    });
    </script>

</body>
</html>