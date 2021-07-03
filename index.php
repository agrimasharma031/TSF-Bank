<?php
if(isset($_POST('name')))
{
    $server = "localhost" ;
    $username = "root" ;
    $password = "" ;

    $con = mysqli_connect($server, $username, $password) ;

    if(!$con)
    {
        die("Connection failed due to" .mysqli_connect_error()) ;
    }
    //echo "Successful Connection" ;

    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $balance = $_POST['balance'] ;
    $sql = "INSERT INTO 'new'.`customers` (`Name`, `Email`, `Balance`, `Date and Time`) 
    VALUES ( '$name', '$email', '$balance', current_timestamp()); "
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to TSF Bank</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3 class="container">Welcome to TSF Basic Banking System</h3>
        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="number" name="balance" id="balance" placeholder="Your Balance">
            <button class="btn">View All Customers</button>
        </form>
    </div>

    <!--<script src="index.js"></script>-->
    <!--
        INSERT INTO `customers` (`Id`, `Name`, `Email`, `Balance`, `Date and Time`) VALUES ('1', 'Kushal Sharma', 'kushalsharma30@gmail.com', '6000', current_timestamp());
    -->

</body>
</html>