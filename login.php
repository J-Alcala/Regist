<?php
    error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login Page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax.libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>
<body>


    <?php require 'master.php';
    ?>


    <div class="container text-center">
        <hl>Student Login Portal</hl>
    </div>

    <br>

    <div class="container text-center">

        <form action="retrieval.php" method="post">

        <p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
        </p>
    
                
        <p>
                <label for="password">Password:</label>
                <input type="text" name="password" id="password">
        </p>

        <input type="submit" value="Submit">
        
        </form>        
    </div>
    
<?php require_once 'footer.php';?>
</body>
</html>