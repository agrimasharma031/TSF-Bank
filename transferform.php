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
$flag=false ;

//transaction
$sql = "SELECT Balance FROM customers WHERE Name= '$sender'" ;
$result = $conn->query($sql) ;


if ($result !== false && $result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $sql = "UPDATE `customers` SET Balance=(Balance-$amount) WHERE Name='$sender'";
        
        if ($conn->query($sql) === TRUE)
        {
            $flag=true ;
        }
        else
        {
            echo "Error in Updating Record :".$conn->error ;
        }
    }
}
else
{
    echo " Not Found !!" ;
}

if($flag==true)
{
    $sql = "UPDATE `customers` SET Balance=(Balance+$amount) WHERE Name='$receiver'";

    if ($conn->query($sql) === TRUE) 
    {
        $flag=true;   
    } 
    else 
    {
        echo "Error in updating record: " . $conn->error;
    }
}

if($flag==true)
{
    $sql = "SELECT * from customers where Name='$sender'";
        $result = $conn-> query($sql);
        while($row = $result->fetch_assoc())
        {
            
        }
    
    $sql = "SELECT * from customers where Name='$receiver'";
    $result = $conn-> query($sql);
        while($row = $result->fetch_assoc())
        {
            
        } 
        
    $sql = "INSERT INTO transactions VALUES('','$sender','$receiver','$amount')" ;

    if($conn->query($sql) === TRUE)
{
    $_SESSION["status"] = "Transaction Successful." ;
    header("location: transfer2.php") ;

}
else
{
    $_SESSION['status'] = "Transaction failed." ;
    header("location: transfer2.php") ;

}

    if ($con->query($sql) === TRUE) {
    } else 
    {
      echo "Error updating record: " . $con->error;
    }


}


//Close
mysqli_close($conn) ;



?>