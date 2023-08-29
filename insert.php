<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => students
        $conn = mysqli_connect("localhost", "root", "", "students");
         

        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         

        $id =  $_REQUEST['id'];
        $firstName = $_REQUEST['firstName'];
        $lastName = $_REQUEST['lastName'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address']; 
        $password =  $_REQUEST['password'];

        $sql = "INSERT INTO tbluser VALUES ('$id',
            '$firstName','$lastName','$email','$phone','$address','$password')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Account Information Saved."
                . " Never share your Password</h3>";
 
            echo nl2br("\n$id\n $email\n "
                . "$password\n $firstName\n $lastName\n $address\n $phone");
                header("Location: http://localhost/");

        } else{
            echo "ERROR: Data Not Saved $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>