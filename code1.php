
<html>
<head>
    <title>PHP code</title>
</head>
<body>
<div style="height:350px;width:1200px;margin: auto;float: left;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
<?php

$connection =mysqli_connect("localhost","root","","practice");
if($connection){
// echo "connecion established! <br>";
}
else
{
    die("connection failed. Reason: ".mysqli_connect_error());
}


$sql="SELECT para1 FROM table1";

$results=mysqli_query($connection,$sql);

if(mysqli_num_rows($results)>0){

    while($row=mysqli_fetch_array($results))
{
       
    $data=$row[0];
    ?>

<p style="margin-left:10px;margin-right:30px;margin-top:30px;"><img src="./images/icons8-link-15.png"> <?php echo $data; ?></p>  


    <?php
}
}
mysqli_close($connection);

?>
<div>
</body>
</html>