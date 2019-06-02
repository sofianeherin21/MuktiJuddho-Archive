
<?php include 'myconfig.php'; ?>

<!DOCTYPE html>
<html>

<head>
<title>Liberation War Archive</title>
<style>
   body{
      background-color:black;
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
<div class="intro" style="margin-top:90px">
       <div class="line" style="height:5px">
            <h2 style="padding-top:40px">আরও কিছু সংবাদ ভিডিও </h2>
       </div> 
	   
	   <div class="intro" style="top:5px;float:left">
       <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/K3JWfrcQ750" width="340" height="280" frameborder="0" style="position:absolute;left:0" allowfullscreen></iframe></div>
       <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/hdmrm3-nNzI" width="340" height="280" frameborder="0" style="position:absolute;left:500px" allowfullscreen></iframe></div>
       <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/ktHd9DVUwUY" width="340" height="280" frameborder="0" style="position:absolute;left:1000px" allowfullscreen></iframe></div>
       </div>
 
 
      <div class="intro" style="margin-top:500px;float:left">
        <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/K3JWfrcQ750" width="340" height="280" frameborder="0" style="position:absolute;left:0" allowfullscreen></iframe></div>
        <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/u5zkgaOuQ8A" width="340" height="280" frameborder="0" style="position:absolute;left:500px" allowfullscreen></iframe></div>
        <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/ktHd9DVUwUY" width="340" height="280" frameborder="0" style="position:absolute;left:1000px" allowfullscreen></iframe></div>
      <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/K3JWfrcQ750" width="340" height="280" frameborder="0" style="position:absolute;left:0" allowfullscreen></iframe></div>
      </div> 
</div>	  
</body>
</html>

<?php  include 'close.php';?>