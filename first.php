<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Login Page</title>
</head>
<body>
    <style>
    <?php include "php-style/style.css";
    ?>
    </style>
    <?php 
        if(isset($_SESSION['status']) && $_SESSION['status']!=''){
            echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
    ?>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="action.php" method="post">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" name="user" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" name="pass" class="input" data-type="password">
                        </div>

                        <div class="group">
                            <input type="submit" name=login_btn class="button" value="Sign In">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>