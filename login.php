
<?php
	session_start();
	include 'myconfig.php';
	

	$username = $_POST['uname'];
	
    $password = $_POST['psw'];
	$login=0;
	$_SESSION['logged'] = false;
	

	$sql = "SELECT password FROM user where username='$username'";
	$result = $conn->query($sql);


	if ($result->num_rows>0) {

	$row = mysqli_fetch_array($result);
    
     if($row['password']==$password)
	 {   
 
         $login=1;
         $_SESSION['logged'] = true;
         $_SESSION['username'] = $username;
		 header( "Location: home.php" ); 
		 
        
	 }
	 else 
	 {  $_SESSION['logged'] = false;
		echo  header( "Location: login.php" );  
		$login=0;
	 }
		
		
		
		
	
	}
	else {
		echo  header( "Location: loginlayout.php" );
	} 
	
	

	 include 'close.php';
?>