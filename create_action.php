 <?php
	include 'myconfig.php';


	$fullname = $_POST['fname'];
	$email = $_POST['email'];
	$username = $_POST['username'];

    $password = $_POST['psw'];
	$_SESSION['logged'] = false;

	$sql = "INSERT INTO user (name,email,username,password ) VALUES ('$fullname','$email','$username','$password')";

	if ($conn->query($sql) === TRUE) {
		
		 $_SESSION['logged'] = true;
         $_SESSION['username'] = $username;
		
		$last_id = $conn->insert_id;
		echo "New record created successfully. Last inserted ID is: " . $last_id;
	
	} else {
		 $_SESSION['logged'] = false;
		echo  header( "Location: layout3.html" ); 
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
   
	include 'close.php';
?>