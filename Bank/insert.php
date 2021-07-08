<?php
session_start() ;

$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "bank" ;

//Connection
$conn = new mysqli($servername,$username,$password,$dbname) ;

//Check Connection
if($conn->connect_error)
{
    die("Connection failed : ".$conn->connect_error) ;
}

//Variables
$name = $_REQUEST['Name'] ;
$email  = $_REQUEST['Email'] ;
$balance = $_REQUEST['Balance'] ;


$ins = "INSERT INTO customers VALUES('','$name','$email','$balance')" ;

if($conn->query($ins) === TRUE)
{
    $_SESSION["status"] = "Your account has been created Successfully." ;
    header("location: new.php") ;
}
else
{
    $_SESSION['status'] = "Account creation failed." ;
    header("location: new.php") ;
}

//Close
mysqli_close($conn) ;

?>