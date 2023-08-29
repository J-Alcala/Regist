<?php
    error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Home Page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax.libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>
<body>

<?php require 'master.php';?>

<?php 
    
    if (isset($_GET['Logout']) and $_GET['Logout'] == 1){
        session_unset();
    }

?>

    <div class="container text-center">
    <hl>Student Portal</hl>
    </div>

    <?php require_once 'footer.php';?>
</body>
</html>