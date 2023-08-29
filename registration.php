<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Registration Page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax.libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>
<body>
<?php include 'master.php';?>

    <div class="container text-center">
    <hl>Welcome to the Registration Page</hl>
    </div>
    <head>
      <title>Store Data</title>
   </head>
   <body>

      <center>
         <h1>Registration Form</h1>
         <form action="insert.php" method="post">

<p>
               <label for="id">ID:</label>
               <input type="text" name="id" id="id">
            </p>  
            
<p>
               <label for="firstName">First Name:</label>
               <input type="text" name="firstName" id="firstName">
            </p>

<p>
               <label for="lastName">Last Name:</label>
               <input type="text" name="lastName" id="lastName">
            </p> 

<p>
               <label for="email">Email:</label>
               <input type="text" name="email" id="email">
            </p>

<p>
               <label for="phone">Phone:</label>
               <input type="text" name="phone" id="phone">
            </p>            

<p>
               <label for="address">Address:</label>
               <input type="text" name="address" id="Address">
            </p>

<p>
               <label for="password">Password:</label>
               <input type="text" name="password" id="password">
            </p>
            
            <input type="submit" value="Submit">
         </form>
      </center>



<?php include 'footer.php';?>
</body>
</html>