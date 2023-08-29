<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<!DCOTYPE html>
<html lan="en">

<head>
    <title> Add Course </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax.libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>
<?php include 'master.php';?>

    <div class="container text-center">
    <hl><b>Add Course</b></hl>
    </div>

<?php

    $conn = mysqli_connect("localhost", "root", "", "students");

    $sqlstu = "SELECT * FROM tblclasses WHERE id='" . $_SESSION['userID'] . "'";
    $sqlcor = "SELECT * FROM tblcourses";
    $sqlcls = "INSERT INTO tblclasses VALUES ('$id', '$courseid')";

    $result = $conn->query($sqlstu);
    $courseresult = $conn->query($sqlcor);
    $courseresult->fetch_all();
    foreach ($courseresult as $course){
        echo "<div class='container text-center'><b>Capacity:</b> ". $course['cap'] . " </div>";
        echo "<div class='container text-center'><b>Registered:</b> ". $course['filled'] . " </div>";
        echo "<div class='container text-center'><b>Course ID:</b> ". $course['id'] . " </div>";
        echo "<div class='container text-center'><b>Course Name:</b> ". $course['name'] . " </div>";
        echo "<div class='container text-center'><b>Waitlist Capacity:</b> ". $course['wlcap'] . " </div>";
        echo "<div class='container text-center'><b>Waitlisted:</b> ". $course['wlfilled'] . " </div><br>";

    }

?>

<center>
    <form action="regcourse.php" method="post">

            <p>
               <label for="id">Enter Course ID:</label>
               <input type="text" name="id" id="id">
            </p>

            <input type="submit" value="Submit">
    </form>
</center>