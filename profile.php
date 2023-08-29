<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<!DCOTYPE html>
<html lan="en">

<head>
    <title> Profile Page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax.libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>
<body>
<?php include 'master.php';?>

    <div class="container text-center">
    <hl><b>Your Profile</b></hl>
    </div>

<?php

    $conn = mysqli_connect("localhost", "root", "", "students");

    $sql = "SELECT * FROM tbluser WHERE id='" . $_SESSION['userID'] . "'"; 

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        echo "<br> <div class='container text-center'><b>ID:</b> ". $row['id'] . " </div>";
        echo "<br> <div class='container text-center'><b>Email:</b> ". $row['email'] . " </div>";
        echo "<br> <div class='container text-center'><b>First Name:</b> ". $row['firstName'] . " </div>";
        echo "<br> <div class='container text-center'><b>Last Name:</b> ". $row['lastName'] . " </div>";
        echo "<br> <div class='container text-center'><b>Address:</b> ". $row['address'] . " </div>";
        echo "<br> <div class='container text-center'><b>Phone:</b> ". $row['phone'] . " </div>";

    }
?>

<?php include 'footer.php';?>
</body>
</html>    
