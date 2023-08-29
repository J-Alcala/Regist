<center>
<?php
        session_start();

        $conn = mysqli_connect("localhost", "root", "", "students");

        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $id = $_REQUEST['id'];
        $userid = $_SESSION['userID']; 

        $sql = "INSERT INTO tblclasses VALUES ('$userid','$id')"; 

        if(mysqli_query($conn, $sql)){

        header("Location: http://localhost/creg.php");}

        else{
            echo "Registration Error $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>