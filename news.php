
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

<div class="intro">
    <h2>তৎকালীন সংবাদঃ</h2>
	<div class="article">
	    <p>বাংলাদেশের স্বাধীনতা যুদ্ধ ছিল ১৯৭১ সালে সংঘটিত তৎকালীন পশ্চিম পাকিস্তানের বিরুদ্ধে পূর্ব পাকিস্তানের সশস্ত্র সংগ্রাম, যার মাধ্যমে বাংলাদেশ একটি 
স্বাধীন দেশ হিসাবে পৃথিবীর মানচিত্রে আত্মপ্রকাশ করে। ১৯৭১ সালের ২৫ মার্চ রাতের অন্ধকারে পাকিস্তানি সামরিক বাহিনী পূর্ব পাকিস্তানে বাঙালি নিধনে 
ঝাঁপিয়ে পড়লে একটি জনযুদ্ধের আদলে মুক্তিযুদ্ধ তথা স্বাধীনতা যুদ্ধের সূচনা ঘটে।<br><br>ভয়াল সেই অধ্যায়ের এবং ঐতিহাসিক সেই অর্জনের কাহিনী শুনব বিশিষ্টজনদের মুখে।</p>
 
</div>

<br></br>
<div class="line" style="background-color:white;height:5px">
</div>
</div>
<br><br>	
 <div class="row">
  <div class="column">
    <div class="card">
      <img src="photos/news1.jpg" alt="1" style="width:100%">
      <div class="container">
        <h2>৭১-এর যুদ্ধের ৯৩০০০ পাক বন্দিকে এক ‘অজ্ঞাত’ কারণে ফিরিয়ে দিয়েছিল ভারত</h2>
       
        <p>
		<?php 
		     if(isset($_SESSION['logged']))
			  $action="http://www.bbc.com/news/world-asia-16207201";
		      
		     else
				 $action="loginlayout.php";
		?>
		<form action="<?php echo $action; ?>" >
		<button class="button" >বিস্তারিত</button>
		</form></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="photos/news2.jpg" alt="2" style="width:100%">
      <div class="container">
        <h2>ইন্দিরার ঐতিহাসিক কূটনীতি</h2>
        <p class="title">মুক্তিযোদ্ধা</p>
        <p>মুক্তিযোদ্ধা হারিস যুদ্ধ চলাকালীন সময়ে যৌথ বাহিনীর নেতৃত্বে পাকিস্তান আর্মির বিরুদ্ধে পরিচালিত অপারেশন সম্পর্কে কথা বলেছেন।
		</p>
        <p>
		<?php 
		     if(isset($_SESSION['logged']))
			  $action="http://www.bbc.com/news/world-asia-16207201";
		     else
				 $action="loginlayout.php";
		?>
		<form action="<?php echo $action; ?>" >
		<button class="button" >বিস্তারিত</button>
		</form></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="photos/news3.jpg" alt="3" style="width:100%;height:202px">
      <div class="container">
        <h2>এবারের সংগ্রাম মুক্তির সংগ্রাম!</h2>
        <p class="title">২৬ মারচ,১৯৭১</p>
        <p>বোস মুক্তিযুদ্ধের উপর উনার লেখা "ডেড রেকনিং" বই এর কারণে সমালোচিত হন।তার দৃষ্টিভঙ্গিতে সেই সময়কার বর্ণনা দিয়েছেন।</p>
        <p>
		<?php 
		     if(isset($_SESSION['logged']))
			  $action="http://www.bbc.com/news/world-asia-16207201";
		     else
				 $action="loginlayout.php";
		?>
		<form action="<?php echo $action; ?>" >
		<button class="button" >বিস্তারিত</button>
		</form></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="photos/2.jpg" alt="4" style="width:100%">
      <div class="container">
        <h2>১৩ দফা দাবি</h2>
        <p class="title">অধ্যাপক,ঢাকা বিশ্ববিদ্যালয়</p>
        <p>যুদ্ধ চলাকালীন পাকিস্তান বাহিনীর বুদ্ধিজীবী হত্যাকান্ডের মাধ্যমে বাংলাদেশকে একটি পঙ্গু ...</p>
        <p><?php 
		     if(isset($_SESSION['logged']))
			  $action="http://www.bbc.com/news/world-asia-16207201";
		     else
				 $action="loginlayout.php";
		?>
		<form action="<?php echo $action; ?>" >
		<button class="button" >বিস্তারিত</button>
		</form></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="photos/3.jpg" alt="5" style="width:100%;height:202px">
      <div class="container">
        <h2>লেফটেন্যান্ট জেনারেল আব্দুল কাদির বালক</h2>
        <p class="title">সাবেক পররাষ্ট্রমন্ত্রী,পাকিস্তান</p>
        <p>"আমি একজন গর্বিত সৈণিক।কিন্তু ১৯৭১ এ পাকিস্তান বাহিনীর বর্বরতা মেনে নেওয়ার নয়।"</p>
        <p><?php 
		     if(isset($_SESSION['logged']))
			  $action="http://www.bbc.com/news/world-asia-16207201";
		     else
				 $action="loginlayout.php";
		?>
		<form action="<?php echo $action; ?>" >
		<button class="button" >বিস্তারিত</button>
		</form></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="photos/4.jpg" alt="6" style="width:100%;height:202px">
      <div class="container">
        <h2>পাক সেনাদের হামলায় নিহত আর শত জন</h2>
        <p class="title">২১ সেপ্টেম্বর ,১৯৭১</p>
        <p>যুদ্ধ চলাকালীন ১৯৭১ সালে ঢাকার গেরিলা মিশন নিয়ে কথা বলেছেন জনপ্রিয় অভিনেতা ও মুক্তিযোদ্ধা রাইসুল ইসলাম আসাদ</p>
        <p><?php 
		     if(isset($_SESSION['logged']))
			  $action="http://www.bbc.com/news/world-asia-16207201";
		     else
				 $action="loginlayout.php";
		?>
		<form action="<?php echo $action; ?>" >
		<button class="button" >বিস্তারিত</button>
		</form></p>
      </div>
    </div>
  </div>  
</div>
<div class="intro" style="margin-top:30px">
<div class="line" style="background-color:white;height:5px">
</div>
</div>
<div class="intro" style="margin-top:60px">
<div style="float:left;height:0;padding-bottom:32.0%;margin:0 25px;border:2px solid white"><iframe src="https://www.youtube.com/embed/-a3ptlo-seI?ecver=2" width="560" height="360" frameborder="0" style="left:0;float:left" allowfullscreen></iframe></div>
    
	<p style="font-size:40px">ভারতের তৎকালীন প্রধানমন্ত্রী ইন্দিরা গান্ধী</p>
	<p>বাংলাদেশের মুক্তিযুদ্ধে ভারতের সেসময়কার প্রধানমন্ত্রী ইন্দিরা গান্ধীর রয়েছে অসামান্য অবদান। তিনি শুধু এক কোটি বাংলাদেশীকে আশ্রয় ও খাওয়া-পরার ব্যবস্থাই করেননি, মুক্তিযোদ্ধাদের জন্য প্রশিক্ষণেরও ব্যবস্থা করেন। আর বাংলাদেশের জন্য আন্তর্জাতিক বিশ্বের সমর্থন আদায়ের চেষ্টা চালিয়েছেন। এমনকি মার্কিন রক্তচক্ষুর বিপরীতে এক অনন্য অবস্থানও নেন তিনি।</p>

</div>

<div class="intro" style="margin-top:90px">
<div class="line" style="background-color:white;height:5px">
<h2 style="padding-top:40px">আরও কিছু সংবাদ ভিডিও </h2>
</div> 
 
<div class="intro" style="top:5px;float:left">
<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/Qu_3AiVykQ4?ecver=2" width="340" height="280" frameborder="0" style="position:absolute;left:0" allowfullscreen></iframe></div>
<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/bXczLnmz3tM" width="340" height="280" frameborder="0" style="position:absolute;left:500px" allowfullscreen></iframe></div>
<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/rKXyMQHHc6o" width="340" height="280" frameborder="0" style="position:absolute;left:1000px" allowfullscreen></iframe></div>
</div> 


 
</body>
</html>

<?php  include 'close.php';?>