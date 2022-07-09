<html>
    <head>
   
        <title> Announcement</title>
</head>
    <body>
        <table border=1px cellspacing=10 cellpadding=10>
        
         <tr>
         <!-- <th>Sr.no</th>   -->
          <th>Announcement</th>  
</tr>


<?php
include("connection.php"); 
error_reporting(0);
$query="SELECT * FROM table1";
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


if($total !=0)
{
     while($result=mysqli_fetch_assoc($data)){
     echo "
        <tr>
       
        <td>". $result['para1'] ."</td>
        </tr>

     ";
     }
}

else{
    echo "no records found";
}
?>

</table>
</body>
</html>