<?php 
    session_start();
    if(isset($_SESSION['loggedIN'])){
        header('location:myside.php');
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
    <link rel="stylesheet" href="../php-style/style.css">
    <title>My Login Page</title>
</head>
<body>


    <div class="login-wrap">
        <p id="response"></p>
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="../Admin/first.php" method="post">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>

                        <div class="group">
                            <input type="button" class="button" value="Sign In" id="login"></input>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

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
                url: 'first.php',
                method: 'POST',
                data: {
                    login: 1,
                    userPHP: user,
                    passPHP: pass,
                },
                success: function(response) {
                    $("#response").html(response);
                    if (response.indexOf('success') >= 0)
                        window.location = 'myside.php';
                },
                dataType: 'text'
            });
        });
    });
    </script>
</body>
</html>