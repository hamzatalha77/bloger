<?php 
    include("../funphp/action.php");
    if (isset($_SESSION['id']) && isset($_SESSION['userc'])                                                                                                               )
?>
<nav class="nav">
    <div class="nav-menu flex-row">
        <div class="nav-brand">
            <a href="blog2.php" class="text-gray">Blooger</a>
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
            <i class="fa fa-fw fa-home"></i><a href="log_out.php" class="active">Logout</a>
            <a><i class="fa fa-fw fa-user"></i><?php echo $_SESSION['userc']; ?></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

</nav>