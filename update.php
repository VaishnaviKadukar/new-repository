<?php

include("connection.php"); 
error_reporting(0);

$rn=$_GET['rn'];
$p=$_GET['p'];


?>
<html>
	<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<title>html form </title>
	</head>
	<body>
    <div style="height:250px;width:700px;margin: auto;margin-top: 150px;background-color:rgb(197, 192, 192);">
	<div style="height:50px;width:700px;background: linear-gradient(to right,rgb(48, 48, 134),rgb(100, 100, 199))">
	<p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color:white;font-size: 20px;margin-left: 10px;padding-top: 10px;">Add Announcements</p>
	</div>
		<form action="" method="GET">
        <p style="margin-top: 20px;margin-left: 10px;">Update Announcements here:</p>
		 <input type="hidden" style="width:50px;height:40px;margin-left:10px;" value="<?php  echo "$rn" ?>" name="rn"> 		
         <input type="text" style="width:680px;height:40px;margin-left:10px;" value="<?php  echo "$p" ?>" name="p"> 
       
		<center> <input type="submit"   name="submit" id="button" value="Update"  style="margin-top:30px;background-color:orange;color:white;height:40px;width:100px;" class="btn" ></center>
		</form>
</div>
	</body>
</html>

<?php

if($_GET['submit']){
    
    $p=$_GET['p'];
    $rn=$_GET['rn'];
	$query="UPDATE table1 SET  para1='$p' WHERE id='$rn'";

	$data=mysqli_query($conn,$query);

	if(	$data){

        ?>
        <script>alert("record updated");</script>
        <?php
	}
	else{
		echo "record not updated";
	}
}


?>