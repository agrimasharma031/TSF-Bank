<?php

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

$mail = "SELECT Name FROM customers " ;
$result = $conn->query($mail) ;

?>
