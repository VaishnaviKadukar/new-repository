<?php
include("connection.php"); 
error_reporting(0);

$srno=$_GET['rn'];
$query="DELETE FROM table1 WHERE id ='$srno'";
$data=mysqli_query($conn,$query);

if($data){
       echo "record deleted";
}
else{
    echo  "record not deleted";
}
?>