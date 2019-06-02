
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
<link href='css/slide.css' rel='stylesheet'>
<link href='css/photostyle.css' rel='stylesheet'>
   
      
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
	<li style="float:right"><a href="loginlayout.php" ><?php session_start(); if(isset($_SESSION['logged'])) echo $_SESSION['username']; else echo " লগইন";?></a></li>
	<li style="float:right"><a href="signup.php">সাইন আপ</a></li>
</ul>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="photos//victory1.jpg" style="width:100%;height:450px">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="photos//v2.jpg" style="width:100%;height:450px">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="photos//v1.jpg" style="width:100%;height:450px">
  <div class="text" "></div>
</div>

</div>
<br><br><br>
<div style="text-align:center"> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}


</script>


<div class="responsive">
    <div class="gallery">
	    <a href="photos/1.jpg" target="_blank">
		    <img src="photos/1.jpg" alt="1"/>
		</a>
		<div class="desc">description</div>
	</div>
</div>
<div class="responsive">
    <div class="gallery">
	    <a href="photos/2.jpg" target="_blank">
		    <img src="photos/2.jpg" alt="2"/>
		</a>
		<div class="desc">description</div>
	</div>
</div>
<div class="responsive">
    <div class="gallery">
	    <a href="photos/3.jpg" target="_blank">
		    <img src="photos/3.jpg" alt="3"/>
		</a>
		<div class="desc">description</div>
	</div>
</div>
<div class="responsive">
    <div class="gallery">
	    <a href="photos/4.jpg" target="_blank">
		    <img src="photos/4.jpg" alt="4"/>
		</a>
		<div class="desc">description</div>
	</div>
</div>
<div class="responsive">
    <div class="gallery">
	    <a href="photos/5.jpg" target="_blank">
		    <img src="photos/5.jpg" alt="5"/>
		</a>
		<div class="desc">description</div>
	</div>
</div>
<div class="responsive">
    <div class="gallery">
	    <a href="photos/6.jpg" target="_blank">
		    <img src="photos/6.jpg" alt="6"/>
		</a>
		<div class="desc">description</div>
	</div>
</div>
<div class="responsive">
    <div class="gallery">
	    <a href="photos/7.jpg" target="_blank">
		    <img src="photos/7.jpg" alt="7"/>
		</a>
		<div class="desc">description</div>
	</div>
</div>
</body>
</html>

<?php  include 'close.php';?>