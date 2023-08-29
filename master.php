<?php
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('session.use_cookies','1');
    session_start();
    if(isset($_SESSION['username']))
        echo "Welcome:". $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax.libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron">
    <div class="container text-center">
        <hl>Student Portal</hl>

    </div>
</div>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
        <?php
            session_start();

            if (isset($_SESSION['username']))
            {

                echo '<li><a href="courses.php"><span class="glyphicon glyphicon-pencil"></span> Courses</a></li>';
                echo '<li><a href="profile.php"><span class="glyphicon glyphicon-briefcase"></span> Profile</a></li>';
                echo '<li><a href="index.php?Logout=1"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';
            }
            else
            {
                echo '<li><a href="login.php" ><span class="glyphicon glyphicon-user"></span> Login</a></li>';
                echo '<li><a href="registration.php"><span class="glyphicon glyphicon-pencil"></span> Registration</a></li>';
            }
        ?>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>    