<?php  


if (isset($_POST['para1'])) {
	include 'db_conn1.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$para1 = validate($_POST['para1']);
	

	if (empty($para1)) {
		header("Location: add.html");
	}else {

		$sql = "INSERT INTO table1(para1) VALUES('$para1')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your response has been recorded THANK YOU !";
		}else {
			echo "Your response has not been send PLEASE TRY AGAIN !";
		}
	}

}else {
	header("Location: add.html");
}
?>