<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font Awesome & Pixeden Icon Stroke icon font-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
        <!-- Google fonts - Roboto Condensed & Roboto-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400">
        <!-- lightbox-->
        <link rel="stylesheet" href="css/lightbox.min.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="css/style.blue.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/cornell-logo.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <?php 
            require_once 'php/config.php'; 
            $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
            $activePage = "login";
            include 'php/nav.php'; 
            include 'php/title.php';
            $login = false;
            if(!empty($_POST['username'])&&!empty($_POST['password'])){
                $username = filter_input( INPUT_POST, 'username', FILTER_SANITIZE_STRING );
                $password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_STRING );
                $result = $mysqli->query('SELECT * FROM Users;');
                while($row = $result->fetch_assoc()){
                    $hash = $row['hashpassword'];
                    $hashuser = $row['username']; 
                if(password_verify($username, $hashuser) && password_verify($password, $hash)){
                        $_SESSION['user'] = $username;
                        $login = true;
                    }  
                }
            }
        ?>
        <div class="container">
            <?php
            //only show form if neither field is set
            if(!isset($_POST['username']) || !isset($_POST['password'])){
            ?>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" type="text" name="username" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" name="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                          <button type="submit" name="login" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log In</button>
                        </div>
                    </div>
                </form>
            <?php
            }
            else{
                if($login)
                    echo "$username, you have logged in successfully!";           
                else
                    print "Invalid username or passward!";  
            }
            ?>
        </div>

        <?php
            include 'php/footer.php';
        ?>
    </body>
</html>