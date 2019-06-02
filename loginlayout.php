
<?php include 'myconfig.php'; ?>
<!DOCTYPE html>
<html>

<head>
<title>Liberation War Archive</title>
<style>

body{
background-color:black;
color:white;
}
form {
    border: 3px solid #f1f1f1;
	height:500px;
}

input[type=text], input[type=password] {
    width: 70%%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 50px;
    border: none;
    cursor: pointer;
    width: 50%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}


.container1 {
    padding-top: 50px;
	margin-right:450px;
	margin-left:450px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='css/style.css' rel='stylesheet'>
<link href='css/slide.css' rel='stylesheet'>
   


<body>
<div id="header">
         
		<img src="photos/rsz_head.jpg" style="height:100px;margin-left:50px;width:30%;">
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
<div style="margin-top:120px">

<div style="margin-top:300px; padding:20px">
<h2 style="text-align:center">Login Form</h2>

<div class="container1">

  <form action="login.php" method="post">
  
    <div style="padding-top:100px;">
       <label style="text-align:left; padding-left:50px;"><b>Username</b></label>
       <input type="text" placeholder="Enter Username" name="uname" required>
	
	   </br>

       <label style="text-align:left; padding-left:50px"><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="psw" required>
        </br>
	</div>
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me


  <div class="container" >
    <button type="button" class="cancelbtn" style="float:right">Cancel</button>
    
  </div>
</form>  
</div>
</div>
</div>
</body>
</html>
<?php  include 'close.php';?>