<?php 
    include("action.php");
    if (isset($_SESSION['id']) && isset($_SESSION['user'])                                                                                                                      )
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Sidebar Menu with sub-menu | CodingNepal</title>

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
</body>
</html>