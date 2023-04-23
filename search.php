<?php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="php-style/ass.css">
    <title>Document</title>
</head>
<body>
    <style type="text/css">
    .main-row {
        margin: 8%;
        background-color: white;
        box-shadow: 0 0 10px 10px rgb(0 0 0 / 5%);
        border-radius: 0.5rem;
    }
    </style>
    <form action="search.php" method="POST">
        <div class="main">
            <input type="text" name="search" placeholder="What Are You Looking For !">
            <button type="submit" name="submit-search" class="tt">Search !</button>
        </div>
    </form>
    <h1>Search Page</h1>
    <?php
    if(isset ($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM posts WHERE title LIKE '%$search%' OR object LIKE '%$search%' 
        OR user LIKE '%$search%' OR date LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        echo "There Are ".$queryResult." Results !";
        }
        if($queryResult > 0){
        while ($row = mysqli_fetch_array($result)){?>
    <div class="container">
        <div class="row main-row p-2">
            <div class="col-lg-4 col-md-12 col-ms-12">
                <div class="blog-img">
                    <?php echo'<img src="artphotos/'.$row['photos'].'">'?>
                </div>
                <div class="row">
                    <div class="col-sm-12 mb-2">
                        <ul class="list-group list-group-horizontal ul-cls">
                            <li class="list-group-item">
                                <i class="fa fa-behance fa-2x" aira-hidden="true"></i>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-facebook fa-2x" aira-hidden="true"></i>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-dribbble fa-2x" aira-hidden="true"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-ms-12">
                <div class="blog-title mb-3">
                    <h3><?php echo $row['title']; ?></h3>
                </div>
                <div class="blog-title mb-3">
                    <span class="fas fa-user"><?php echo $row['user'];?></span>
                </div>
                <div class="blog-date mb-2">
                    <span class="fas fa-calendar-alt"><?php echo $row['date'];?></span>
                </div>
                <div class="blog-desc mb-2">
                    <p><?php echo substr($row['object'],0,110) . "..."; ?></p>
                </div>
            </div>
        </div>
        <?php echo "<a class=btn2  href='blog.php?title=".$row['title']."'> Read More !</a>";?>
    </div>
    <?php }
    }?>

</body>
</html>