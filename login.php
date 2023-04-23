<?php 
    session_start();
    if(isset($_SESSION['loggedIN'])){
        header('location:hidden.php');
        exit();
    }
    if (isset($_POST['login'])){
       $connection = new mysqli("localhost", "root", "", "hamza");
        $user = $connection->real_escape_string($_POST['userPHP']);
        $pass = md5($connection->real_escape_string($_POST['passPHP']));
        $data = $connection->query("SELECT id FROM admin WHERE user ='$user' AND pass ='$pass'");
        if($data->num_rows > 0){
            $_SESSION['loggedIN'] = '1';
            $_SESSION['user'] = $user;
            exit('Login success...');
        }else
            exit('Please check your inputs!');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Login Page</title>
</head>
<body>
    <form action="login.php" method="post">
        <label>Username</label>
        <input id="user" type="text">
        <label>Password</label>
        <input id="pass" type="password" data-type="password">
        <input type="button" value="Sign In" id="login"></input>
    </form>
    <p id="response"></p>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#login").on('click', function() {
            var user = $("#user").val();
            var pass = $("#pass").val();

            if (user == "" || pass == "")
                alert('please check your inputs');

            $.ajax({
                url: 'login.php',
                method: 'POST',
                data: {
                    login: 1,
                    userPHP: user,
                    passPHP: pass,
                },
                success: function(response) {
                    $("#response").html(response);
                },
                dataType: 'text'
            });
        });
    });
    </script>
</body>
</html>