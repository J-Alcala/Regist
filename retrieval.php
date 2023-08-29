<?php
    error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    
    $conn = mysqli_connect("localhost", "root", "", "students");

    $sql = "SELECT * FROM tbluser WHERE email='" . $_REQUEST['email'] . "'"; 

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<br>Student Information";
        $row = $result->fetch_assoc();
        echo $row['email'];
        
        if ($row['password']== $_REQUEST['password']) {
            $_SESSION['username'] = $row['firstName'];
            $_SESSION['userID'] = $row['id'];
            header("Location: http://localhost/");
        } 
    }
    ?>
    