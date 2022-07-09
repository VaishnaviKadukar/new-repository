<?php  


if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])&& isset($_POST['rollno']) && isset($_POST['class'])&& isset($_POST['shift'])&& isset($_POST['course1'])&& isset($_POST['cname1'])&& isset($_POST['course2'])&& isset($_POST['cname2'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$fname = validate($_POST['fname']);
	$lname = validate($_POST['lname']);
	$email = validate($_POST['email']);
	$rollno = validate($_POST['rollno']);
	$class = validate($_POST['class']);
	$shift = validate($_POST['shift']);
	$course1= validate($_POST['course1']);
	$cname1 = validate($_POST['cname1']);
	$course2= validate($_POST['course2']);
	$cname2 = validate($_POST['cname2']);



	if (empty($fname) || empty($lname) || empty($email) || empty($rollno) || empty($class) || empty($shift)|| empty($course1)|| empty($cname1)|| empty($course2)|| empty($cname2)) {
		header("Location: form.html");
	}else {

		$sql = "INSERT INTO test(fname,lname,email,rollno,class,shift,course1,cname1,course2,cname2) VALUES('$fname', '$lname','$email','$rollno','$class','$shift','$course1','$cname1','$course2','$cname2')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your response has been recorded THANK YOU !";
		}else {
			echo "Your response has not been send PLEASE TRY AGAIN !";
		}
	}

}else {
	header("Location: form.html");
}
?>