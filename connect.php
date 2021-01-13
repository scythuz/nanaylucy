<?php  
       $fname = $_POST['fname'];
	   $lname = $_POST['lname'];
	   $email = $_POST['email'];
	   $number = $_POST['number'];
	   $msg = $_POST['msg'];
	   
	   $conn = new mysqli('localhost','root','','feedback');
	   if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
		}else{
			$stmt = $conn->prepare("insert into feedback(fname, lname, email, number, msg) values(?, ?, ?, ?, ?)");
			$stmt->bind_param("sssis", $fname, $lname, $email, $number, $msg);
			$stmt ->execute();
			$_SESSION['success'] = "Message sent successfully";
			header('location: feedbacksent.html');
			$stmt->close();
			$conn->close();
		}
		
	   
?>   