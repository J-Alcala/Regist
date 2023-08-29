<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<!DCOTYPE html>
<html lan="en">

<head>
    <title> Your Courses </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax.libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>
<?php include 'master.php';?>

    <div class="container text-center">
    <hl><b>Courses</b></hl>
    </div>
    <br>
    <center>
        <a href="regcourse.php" class="btn btn-danger">Add Course</a>
        <a href="regcourse.php" class="btn btn-danger">Drop Course</a>
        

    </center>
<?php



    $conn = mysqli_connect("localhost", "root", "", "students");

    $sql = "SELECT * FROM tblcourses WHERE id='" . $_SESSION['userID'] . "'"; 
?>