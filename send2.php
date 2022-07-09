<?php  


if (isset($_POST['name1']) && isset($_POST['email']) && isset($_POST['jr'])&& isset($_POST['fb'])) {
	include 'db_conn2.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name1 = validate($_POST['name1']);
	$email = validate($_POST['email']);
	$jr = validate($_POST['jr']);
	$fb = validate($_POST['fb']);
	
	if (empty($name1) || empty($email) || empty($jr) || empty($fb)) {
		header("Location: contact.html");
	}else {

		$sql = "INSERT INTO test2(name1,email,jr,fb) VALUES('$name1', '$email','$jr','$fb')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Thanks for your Feedback!";
		}else {
			echo "Your response has not been send PLEASE TRY AGAIN !";
		}
	}

}else {
	header("Location: contact.html");
}
?>