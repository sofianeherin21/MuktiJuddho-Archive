<!DOCTYPE html>
<html>

<head>
<title>Liberation War Archive</title>
<style>
   body{
      background-color:black;
	  }
</style>

<?php 
		include 'myconfig.php';		
		$sql = "SELECT postTitle , user.username, postCont from blog inner join user on blog.user_id=user.id";
		$result = mysqli_query($conn , $sql);
		
?>



</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='css/style.css' rel='stylesheet'>
<link href='css/post.css' rel='stylesheet'>
   
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
	<li><a>মিডিয়া</a>
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
	<div id = "all-post" >
		
		<?php while ($row = mysqli_fetch_array($result)) { ?>

		
		<div id = "single-post" >
			<div id = "post-title" >
			 <p> <?php echo $row['postTitle']; ?> </p>
			</div>
			
			<div id = "user" >
			<p> <?php echo $row['username']; ?>  </p>
			</div>
			
			
			<div id = "post-description" >
			<p> <?php echo $row['postCont']; ?>  </p>
			</br>
			<a> Read More</a>
			</div>
			
		</div>
		<?php } ?>
	</div>
</body>
</html>