<?php include 'myconfig.php'; ?>

<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */

body{
background-color:black;
color:white;
}
input[type=text], input[type=password] {
    width: 80%;
    padding: 12px 20px;
    margin: 30px 40px;
    
    border: 1px solid #ccc;
    box-sizing: border-box;
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

.container1 {
    padding-top: 50px;
	margin: 0 50px;
}


.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='css/style.css' rel='stylesheet'>
   
<body>

  <div id="header">
		<img src="photos/rsz_head.jpg" style="height:100px;padding-left:550px;width:30%;">
  </div>
<div class="navv">
<ul>
    <li><a href="home.php">হোম</a></li>
	<li><a href="about.php">গুরুত্বপূর্ণ ঘটনাসমূহ </a></li>
	<li><a href="news.php">তৎকালীন সংবাদ</a></li>
	<li><a href="interview.php">সাক্ষাৎকার</a></li>
	<li><a>মিডিয়া</a>
	    <ul>
		  <li><a href="photos.php">ছবি</a></li>
	      <li><a href="songs.php">দেশাত্নবোধক গান</a></li>
		  <li><a href="movies.php">চলচ্চিত্র</a></li>
		</ul>
	</li>
	<li><a href="blog.php">ব্লগ</a>
	<?php session_start();
	
		     if(isset($_SESSION['logged']))
			  $href="logout.php";
		      
		     else
				 $href="loginlayout.php";
		?>
	
	<li style="float:right"><a href="<?php echo $href; ?>" ><?php if(isset($_SESSION['logged'])) echo $_SESSION['username']; else echo " লগইন";?></a></li>

	<li style="float:right"><a href="signup.php">সাইন আপ</a></li>
</ul>
</div>
<div style="margin-top:350px; margin-left:200px"> 
     <h2>Signup Form</h2>
        <div class="container1">
           <form action="create_action.php" method="post" style="border:1px solid #ccc">
		    
			<div style="padding-top:50px; padding-left:40px">
  
              <label><b>Email</b></label>
	          <input type="text" placeholder="Enter Email" name="email" required>
			  </br>
              <label><b>Name</b></label>
			  <input type="text" placeholder="Enter fullname" name="fname" required>
			  </br>
			  <label><b>Username</b></label>
	          <input type="text" placeholder="Enter username" name="username" required>
			  </br>
	

              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
			  
			  </div>

    
              <input type="checkbox" checked="checked"> Remember me
               <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
			   
			</div>

             <div class="clearfix">
               <button type="button" class="cancelbtn">Cancel</button>
               <button type="submit" class="signupbtn">Sign Up</button>
             </div>
          </form>
		 </div>
</div>
</body>
</html>
<?php  include 'close.php'; ?>
