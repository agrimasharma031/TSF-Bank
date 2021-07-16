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
$sender = $_REQUEST['Sender'] ;
$receiver  = $_REQUEST['Receiver'] ;
$amount = $_REQUEST['Amount'] ;

//transaction
$sql = "SELECT * FROM customers WHERE Name=$sender" ;
$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$sql1 = mysqli_fetch_array($query) ;

$sql = "SELECT * FROM customers WHERE Name=$receiver" ;
$query = mysqli_query($conn,$sql) ;
$sql2 = mysqli_fetch_array($query) ;

$ins = "INSERT INTO transactions VALUES('','$sender','$receiver','$amount')" ;

if($conn->query($ins) === TRUE)
{
    $_SESSION["status"] = "Transaction Successful." ;
    header("location: transfer2.php") ;
}
else
{
    $_SESSION['status'] = "Transaction failed." ;
    header("location: transfer2.php") ;
}



//deduction
$newbalance = $sql1['Balance'] - $amount ;
mysqli_query($conn,$sql);
$sql = "UPDATE customers SET Balance=$newbalance where Name=$sender";

//addition
$newbalance = $sql2['Balance'] + $amount ;
mysqli_query($conn,$sql);
$sql = "UPDATE customers SET Balance=$newbalance where Name=$receiver";


//Close
mysqli_close($conn) ;



?>