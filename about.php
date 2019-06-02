
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
         
		<img src="photos/rsz_head.jpg" style="height:100px;margin-left:550px;width:30%;">
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
    <div class="content">
	        <div class="sidebar">

                     <ul>
		                <li><a href=#p1>পটভূমি</a></li>
			            <li><a href=#p2>৭০ 'র নির্বাচন</a></li>
			            <li><a href=#p3>গণহত্যা ও জনযুদ্ধের সূত্রপাত</a></li>
			            <li><a href=#p4>স্বাধীনতা ঘোষণা</a></li>
			            <li><a href=#p5>অস্থায়ী সরকার গঠন</a></li>
			            <li><a href=#p6>মুক্তিযুদ্ধের ৯ মাস</a></li>
			            <li><a href=#p7>সেক্টর সমূহ</a></li>
			            <li><a href=#p8>ভারত-পাকিস্তান যুদ্ধ</a></li>
			            <li><a href=#p9>আন্তর্জাতিক স্বীকৃতি</a></li>
			            <li><a href=#p10>মুক্তিযুদ্ধ ও বিশ্বসমাজ</a></li>
                     </ul> 
             </div>
       		
	         <h2>শুরুর কথা</h2>
		             <article style="float:right margin-left:550px">বাংলাদেশের স্বাধীনতা যুদ্ধ ছিল ১৯৭১ সালে সংঘটিত তৎকালীন পশ্চিম পাকিস্তানের বিরুদ্ধে পূর্ব পাকিস্তানের সশস্ত্র সংগ্রাম, যার মাধ্যমে বাংলাদেশ একটি স্বাধীন দেশ হিসাবে পৃথিবীর মানচিত্রে আত্মপ্রকাশ করে। ১৯৭১ সালের ২৫ মার্চ রাতের অন্ধকারে পাকিস্তানি সামরিক বাহিনী পূর্ব পাকিস্তানে বাঙালি নিধনে ঝাঁপিয়ে পড়লে একটি জনযুদ্ধের আদলে মুক্তিযুদ্ধ তথা স্বাধীনতা যুদ্ধের সূচনা ঘটে।[২১] ২৫ মার্চের কালো রাতে পাকিস্তানি সামরিক বাহিনী ঢাকায় অজস্র সাধারণ নাগরিক, ছাত্র, শিক্ষক, বুদ্ধিজীবী, পুলিশ ও ই.পি.আর.-কে হত্যা করে এবং ১৯৭০ সালের সাধারণ নির্বাচনে নিরঙ্কুশ সংখ্যাগরিষ্ঠতাপ্রাপ্ত দল আওয়ামী লীগ প্রধান বাঙালিদের তৎকালীন জনপ্রিয় নেতা বঙ্গবন্ধু শেখ মুজিবুর রহমানকে গ্রেপ্তার করে। গ্রেফতারের পূর্বে ২৬ মার্চের প্রথম প্রহরে তিনি বাংলাদেশের স্বাধীনতা ঘোষণা করেন।[২২][২৩][২৪][২৫][২৬]

                                                  পরিকল্পিত গণহত্যার মুখে সারাদেশে শুরু হয়ে যায় প্রতিরোধযুদ্ধ; জীবন বাঁচাতে প্রায় ১ কোটি মানুষ পার্শ্ববর্তী দেশ ভারতে আশ্রয় গ্রহণ করে। পাকিস্তানি সামরিক বাহিনীর ইস্ট বেঙ্গল রেজিমেন্ট, ইস্ট পাকিস্তান রাইফেলস (ইপিআর), ইস্ট পাকিস্তান পুলিশ, সামরিক বাহিনীর বাঙালি সদস্য এবং সর্বোপরি বাংলাদেশের স্বাধীনতাকামী সাধারণ মানুষ দেশকে পাকিস্তানি সামরিক বাহিনীর কব্জা থেকে মুক্ত করতে কয়েক মাসের মধ্যে গড়ে তোলে মুক্তিবাহিনী। গেরিলা পদ্ধতিতে যুদ্ধ চালিয়ে মুক্তিবাহিনী সারাদেশে পাকিস্তানি হানাদার বাহিনীকে ব্যতিব্যস্ত করে তোলে। মুক্তিযুদ্ধ চলাকালীন সময়ে বাংলাদেশ ভারতের কাছ থেকে অর্থনৈতিক, সামরিক ও কূটনৈতিক সাহায্য লাভ করে। ডিসেম্বরের শুরুর দিকে যখন পাকিস্তানি সামরিক বাহিনীর পতন অনিবার্য হয়ে ওঠে, তখন তারা মুক্তিবাহিনীর কাছে পরাজয়ের লজ্জা এড়াবার জন্য এবং মুক্তিযুদ্ধকে আন্তর্জাতিক সংঘর্ষে পরিণত করার উদ্দেশ্যে ৩ ডিসেম্বর ভারতে বিমান হামলার মাধ্যমে ভারতের বিরুদ্ধে যুদ্ধে লিপ্ত হয়।

                                                   অত:পর ভারত বাংলাদেশের স্বাধীনতা যুদ্ধে সরাসরিভাবে জড়িয়ে পড়ে। মুক্তিবাহিনী ও ভারতীয় সামরিক বাহিনীর সম্মিলিত আক্রমণের মুখে ইতোমধ্যে পর্যদুস্ত ও হতোদ্যম পাকিস্তানি সামরিক বাহিনী আত্মসমর্পণের সিদ্ধান্ত গ্রহণ করে। ১৬ ডিসেম্বর ঢাকার রেসকোর্স ময়দানে পাকিস্তান ৯৩,০০০ হাজার সৈন্যসহ আনুষ্ঠানিকভাবে আত্মসমর্পণ করে। এরই মাধ্যমে নয় মাস ব্যাপী রক্তক্ষয়ী মুক্তিযুদ্ধের অবসান হয়; প্রতিষ্ঠিত হয় বাঙালি জাতির স্বাধীন রাষ্ট্র বাংলাদেশ.
			    	  </article>
	
     </div>        
<div class="content" style="margin-top:700px;">
        <h2>পটভূমি</h2>		
		<article  id="p1">বাংলাদেশের স্বাধীনতা যুদ্ধ ছিল ১৯৭১ সালে সংঘটিত তৎকালীন পশ্চিম পাকিস্তানের বিরুদ্ধে পূর্ব পাকিস্তানের সশস্ত্র সংগ্রাম, যার মাধ্যমে বাংলাদেশ একটি স্বাধীন দেশ হিসাবে পৃথিবীর মানচিত্রে আত্মপ্রকাশ করে। ১৯৭১ সালের ২৫ মার্চ রাতের অন্ধকারে পাকিস্তানি সামরিক বাহিনী পূর্ব পাকিস্তানে বাঙালি নিধনে ঝাঁপিয়ে পড়লে একটি জনযুদ্ধের আদলে মুক্তিযুদ্ধ তথা স্বাধীনতা যুদ্ধের সূচনা ঘটে।[২১] ২৫ মার্চের কালো রাতে পাকিস্তানি সামরিক বাহিনী ঢাকায় অজস্র সাধারণ নাগরিক, ছাত্র, শিক্ষক, বুদ্ধিজীবী, পুলিশ ও ই.পি.আর.-কে হত্যা করে এবং ১৯৭০ সালের সাধারণ নির্বাচনে নিরঙ্কুশ সংখ্যাগরিষ্ঠতাপ্রাপ্ত দল আওয়ামী লীগ প্রধান বাঙালিদের তৎকালীন জনপ্রিয় নেতা বঙ্গবন্ধু শেখ মুজিবুর রহমানকে গ্রেপ্তার করে। গ্রেফতারের পূর্বে ২৬ মার্চের প্রথম প্রহরে তিনি বাংলাদেশের স্বাধীনতা ঘোষণা করেন।[২২][২৩][২৪][২৫][২৬]

                                                  পরিকল্পিত গণহত্যার মুখে সারাদেশে শুরু হয়ে যায় প্রতিরোধযুদ্ধ; জীবন বাঁচাতে প্রায় ১ কোটি মানুষ পার্শ্ববর্তী দেশ ভারতে আশ্রয় গ্রহণ করে। পাকিস্তানি সামরিক বাহিনীর ইস্ট বেঙ্গল রেজিমেন্ট, ইস্ট পাকিস্তান রাইফেলস (ইপিআর), ইস্ট পাকিস্তান পুলিশ, সামরিক বাহিনীর বাঙালি সদস্য এবং সর্বোপরি বাংলাদেশের স্বাধীনতাকামী সাধারণ মানুষ দেশকে পাকিস্তানি সামরিক বাহিনীর কব্জা থেকে মুক্ত করতে কয়েক মাসের মধ্যে গড়ে তোলে মুক্তিবাহিনী। গেরিলা পদ্ধতিতে যুদ্ধ চালিয়ে মুক্তিবাহিনী সারাদেশে পাকিস্তানি হানাদার বাহিনীকে ব্যতিব্যস্ত করে তোলে। মুক্তিযুদ্ধ চলাকালীন সময়ে বাংলাদেশ ভারতের কাছ থেকে অর্থনৈতিক, সামরিক ও কূটনৈতিক সাহায্য লাভ করে। ডিসেম্বরের শুরুর দিকে যখন পাকিস্তানি সামরিক বাহিনীর পতন অনিবার্য হয়ে ওঠে, তখন তারা মুক্তিবাহিনীর কাছে পরাজয়ের লজ্জা এড়াবার জন্য এবং মুক্তিযুদ্ধকে আন্তর্জাতিক সংঘর্ষে পরিণত করার উদ্দেশ্যে ৩ ডিসেম্বর ভারতে বিমান হামলার মাধ্যমে ভারতের বিরুদ্ধে যুদ্ধে লিপ্ত হয়।

                                                   অত:পর ভারত বাংলাদেশের স্বাধীনতা যুদ্ধে সরাসরিভাবে জড়িয়ে পড়ে। মুক্তিবাহিনী ও ভারতীয় সামরিক বাহিনীর সম্মিলিত আক্রমণের মুখে ইতোমধ্যে পর্যদুস্ত ও হতোদ্যম পাকিস্তানি সামরিক বাহিনী আত্মসমর্পণের সিদ্ধান্ত গ্রহণ করে। ১৬ ডিসেম্বর ঢাকার রেসকোর্স ময়দানে পাকিস্তান ৯৩,০০০ হাজার সৈন্যসহ আনুষ্ঠানিকভাবে আত্মসমর্পণ করে। এরই মাধ্যমে নয় মাস ব্যাপী রক্তক্ষয়ী মুক্তিযুদ্ধের অবসান হয়; প্রতিষ্ঠিত হয় বাঙালি জাতির স্বাধীন রাষ্ট্র বাংলাদেশ।</article>
	

	</div>
<div class="content" style="margin-top:200px;" id="p2">
        <h2>৭০'র নির্বাচন</h2>		
		<article>বাংলাদেশের স্বাধীনতা যুদ্ধ ছিল ১৯৭১ সালে সংঘটিত তৎকালীন পশ্চিম পাকিস্তানের বিরুদ্ধে পূর্ব পাকিস্তানের সশস্ত্র সংগ্রাম, যার মাধ্যমে বাংলাদেশ একটি স্বাধীন দেশ হিসাবে পৃথিবীর মানচিত্রে আত্মপ্রকাশ করে। ১৯৭১ সালের ২৫ মার্চ রাতের অন্ধকারে পাকিস্তানি সামরিক বাহিনী পূর্ব পাকিস্তানে বাঙালি নিধনে ঝাঁপিয়ে পড়লে একটি জনযুদ্ধের আদলে মুক্তিযুদ্ধ তথা স্বাধীনতা যুদ্ধের সূচনা ঘটে।[২১] ২৫ মার্চের কালো রাতে পাকিস্তানি সামরিক বাহিনী ঢাকায় অজস্র সাধারণ নাগরিক, ছাত্র, শিক্ষক, বুদ্ধিজীবী, পুলিশ ও ই.পি.আর.-কে হত্যা করে এবং ১৯৭০ সালের সাধারণ নির্বাচনে নিরঙ্কুশ সংখ্যাগরিষ্ঠতাপ্রাপ্ত দল আওয়ামী লীগ প্রধান বাঙালিদের তৎকালীন জনপ্রিয় নেতা বঙ্গবন্ধু শেখ মুজিবুর রহমানকে গ্রেপ্তার করে। গ্রেফতারের পূর্বে ২৬ মার্চের প্রথম প্রহরে তিনি বাংলাদেশের স্বাধীনতা ঘোষণা করেন।[২২][২৩][২৪][২৫][২৬]

                                                  পরিকল্পিত গণহত্যার মুখে সারাদেশে শুরু হয়ে যায় প্রতিরোধযুদ্ধ; জীবন বাঁচাতে প্রায় ১ কোটি মানুষ পার্শ্ববর্তী দেশ ভারতে আশ্রয় গ্রহণ করে। পাকিস্তানি সামরিক বাহিনীর ইস্ট বেঙ্গল রেজিমেন্ট, ইস্ট পাকিস্তান রাইফেলস (ইপিআর), ইস্ট পাকিস্তান পুলিশ, সামরিক বাহিনীর বাঙালি সদস্য এবং সর্বোপরি বাংলাদেশের স্বাধীনতাকামী সাধারণ মানুষ দেশকে পাকিস্তানি সামরিক বাহিনীর কব্জা থেকে মুক্ত করতে কয়েক মাসের মধ্যে গড়ে তোলে মুক্তিবাহিনী। গেরিলা পদ্ধতিতে যুদ্ধ চালিয়ে মুক্তিবাহিনী সারাদেশে পাকিস্তানি হানাদার বাহিনীকে ব্যতিব্যস্ত করে তোলে। মুক্তিযুদ্ধ চলাকালীন সময়ে বাংলাদেশ ভারতের কাছ থেকে অর্থনৈতিক, সামরিক ও কূটনৈতিক সাহায্য লাভ করে। ডিসেম্বরের শুরুর দিকে যখন পাকিস্তানি সামরিক বাহিনীর পতন অনিবার্য হয়ে ওঠে, তখন তারা মুক্তিবাহিনীর কাছে পরাজয়ের লজ্জা এড়াবার জন্য এবং মুক্তিযুদ্ধকে আন্তর্জাতিক সংঘর্ষে পরিণত করার উদ্দেশ্যে ৩ ডিসেম্বর ভারতে বিমান হামলার মাধ্যমে ভারতের বিরুদ্ধে যুদ্ধে লিপ্ত হয়।

                                                   অত:পর ভারত বাংলাদেশের স্বাধীনতা যুদ্ধে সরাসরিভাবে জড়িয়ে পড়ে। মুক্তিবাহিনী ও ভারতীয় সামরিক বাহিনীর সম্মিলিত আক্রমণের মুখে ইতোমধ্যে পর্যদুস্ত ও হতোদ্যম পাকিস্তানি সামরিক বাহিনী আত্মসমর্পণের সিদ্ধান্ত গ্রহণ করে। ১৬ ডিসেম্বর ঢাকার রেসকোর্স ময়দানে পাকিস্তান ৯৩,০০০ হাজার সৈন্যসহ আনুষ্ঠানিকভাবে আত্মসমর্পণ করে। এরই মাধ্যমে নয় মাস ব্যাপী রক্তক্ষয়ী মুক্তিযুদ্ধের অবসান হয়; প্রতিষ্ঠিত হয় বাঙালি জাতির স্বাধীন রাষ্ট্র বাংলাদেশ।</article>
	

	</div>
	<div class="content" style="margin-top:200px;" id="p3">
        <h2>গণহত্যা ও জনযুদ্ধের সূত্রপাত</h2>		
		<article>বাংলাদেশের স্বাধীনতা যুদ্ধ ছিল ১৯৭১ সালে সংঘটিত তৎকালীন পশ্চিম পাকিস্তানের বিরুদ্ধে পূর্ব পাকিস্তানের সশস্ত্র সংগ্রাম, যার মাধ্যমে বাংলাদেশ একটি স্বাধীন দেশ হিসাবে পৃথিবীর মানচিত্রে আত্মপ্রকাশ করে। ১৯৭১ সালের ২৫ মার্চ রাতের অন্ধকারে পাকিস্তানি সামরিক বাহিনী পূর্ব পাকিস্তানে বাঙালি নিধনে ঝাঁপিয়ে পড়লে একটি জনযুদ্ধের আদলে মুক্তিযুদ্ধ তথা স্বাধীনতা যুদ্ধের সূচনা ঘটে।[২১] ২৫ মার্চের কালো রাতে পাকিস্তানি সামরিক বাহিনী ঢাকায় অজস্র সাধারণ নাগরিক, ছাত্র, শিক্ষক, বুদ্ধিজীবী, পুলিশ ও ই.পি.আর.-কে হত্যা করে এবং ১৯৭০ সালের সাধারণ নির্বাচনে নিরঙ্কুশ সংখ্যাগরিষ্ঠতাপ্রাপ্ত দল আওয়ামী লীগ প্রধান বাঙালিদের তৎকালীন জনপ্রিয় নেতা বঙ্গবন্ধু শেখ মুজিবুর রহমানকে গ্রেপ্তার করে। গ্রেফতারের পূর্বে ২৬ মার্চের প্রথম প্রহরে তিনি বাংলাদেশের স্বাধীনতা ঘোষণা করেন।[২২][২৩][২৪][২৫][২৬]

                                                  পরিকল্পিত গণহত্যার মুখে সারাদেশে শুরু হয়ে যায় প্রতিরোধযুদ্ধ; জীবন বাঁচাতে প্রায় ১ কোটি মানুষ পার্শ্ববর্তী দেশ ভারতে আশ্রয় গ্রহণ করে। পাকিস্তানি সামরিক বাহিনীর ইস্ট বেঙ্গল রেজিমেন্ট, ইস্ট পাকিস্তান রাইফেলস (ইপিআর), ইস্ট পাকিস্তান পুলিশ, সামরিক বাহিনীর বাঙালি সদস্য এবং সর্বোপরি বাংলাদেশের স্বাধীনতাকামী সাধারণ মানুষ দেশকে পাকিস্তানি সামরিক বাহিনীর কব্জা থেকে মুক্ত করতে কয়েক মাসের মধ্যে গড়ে তোলে মুক্তিবাহিনী। গেরিলা পদ্ধতিতে যুদ্ধ চালিয়ে মুক্তিবাহিনী সারাদেশে পাকিস্তানি হানাদার বাহিনীকে ব্যতিব্যস্ত করে তোলে। মুক্তিযুদ্ধ চলাকালীন সময়ে বাংলাদেশ ভারতের কাছ থেকে অর্থনৈতিক, সামরিক ও কূটনৈতিক সাহায্য লাভ করে। ডিসেম্বরের শুরুর দিকে যখন পাকিস্তানি সামরিক বাহিনীর পতন অনিবার্য হয়ে ওঠে, তখন তারা মুক্তিবাহিনীর কাছে পরাজয়ের লজ্জা এড়াবার জন্য এবং মুক্তিযুদ্ধকে আন্তর্জাতিক সংঘর্ষে পরিণত করার উদ্দেশ্যে ৩ ডিসেম্বর ভারতে বিমান হামলার মাধ্যমে ভারতের বিরুদ্ধে যুদ্ধে লিপ্ত হয়।

                                                   অত:পর ভারত বাংলাদেশের স্বাধীনতা যুদ্ধে সরাসরিভাবে জড়িয়ে পড়ে। মুক্তিবাহিনী ও ভারতীয় সামরিক বাহিনীর সম্মিলিত আক্রমণের মুখে ইতোমধ্যে পর্যদুস্ত ও হতোদ্যম পাকিস্তানি সামরিক বাহিনী আত্মসমর্পণের সিদ্ধান্ত গ্রহণ করে। ১৬ ডিসেম্বর ঢাকার রেসকোর্স ময়দানে পাকিস্তান ৯৩,০০০ হাজার সৈন্যসহ আনুষ্ঠানিকভাবে আত্মসমর্পণ করে। এরই মাধ্যমে নয় মাস ব্যাপী রক্তক্ষয়ী মুক্তিযুদ্ধের অবসান হয়; প্রতিষ্ঠিত হয় বাঙালি জাতির স্বাধীন রাষ্ট্র বাংলাদেশ।</article>
	

	</div>

<div class="content" style="margin-top:200px;" id="p4">
        <h2>স্বাধীনতা ঘোষণা</h2>		
		<article>বাংলাদেশের স্বাধীনতা যুদ্ধ ছিল ১৯৭১ সালে সংঘটিত তৎকালীন পশ্চিম পাকিস্তানের বিরুদ্ধে পূর্ব পাকিস্তানের সশস্ত্র সংগ্রাম, যার মাধ্যমে বাংলাদেশ একটি স্বাধীন দেশ হিসাবে পৃথিবীর মানচিত্রে আত্মপ্রকাশ করে। ১৯৭১ সালের ২৫ মার্চ রাতের অন্ধকারে পাকিস্তানি সামরিক বাহিনী পূর্ব পাকিস্তানে বাঙালি নিধনে ঝাঁপিয়ে পড়লে একটি জনযুদ্ধের আদলে মুক্তিযুদ্ধ তথা স্বাধীনতা যুদ্ধের সূচনা ঘটে।[২১] ২৫ মার্চের কালো রাতে পাকিস্তানি সামরিক বাহিনী ঢাকায় অজস্র সাধারণ নাগরিক, ছাত্র, শিক্ষক, বুদ্ধিজীবী, পুলিশ ও ই.পি.আর.-কে হত্যা করে এবং ১৯৭০ সালের সাধারণ নির্বাচনে নিরঙ্কুশ সংখ্যাগরিষ্ঠতাপ্রাপ্ত দল আওয়ামী লীগ প্রধান বাঙালিদের তৎকালীন জনপ্রিয় নেতা বঙ্গবন্ধু শেখ মুজিবুর রহমানকে গ্রেপ্তার করে। গ্রেফতারের পূর্বে ২৬ মার্চের প্রথম প্রহরে তিনি বাংলাদেশের স্বাধীনতা ঘোষণা করেন।[২২][২৩][২৪][২৫][২৬]

                                                  পরিকল্পিত গণহত্যার মুখে সারাদেশে শুরু হয়ে যায় প্রতিরোধযুদ্ধ; জীবন বাঁচাতে প্রায় ১ কোটি মানুষ পার্শ্ববর্তী দেশ ভারতে আশ্রয় গ্রহণ করে। পাকিস্তানি সামরিক বাহিনীর ইস্ট বেঙ্গল রেজিমেন্ট, ইস্ট পাকিস্তান রাইফেলস (ইপিআর), ইস্ট পাকিস্তান পুলিশ, সামরিক বাহিনীর বাঙালি সদস্য এবং সর্বোপরি বাংলাদেশের স্বাধীনতাকামী সাধারণ মানুষ দেশকে পাকিস্তানি সামরিক বাহিনীর কব্জা থেকে মুক্ত করতে কয়েক মাসের মধ্যে গড়ে তোলে মুক্তিবাহিনী। গেরিলা পদ্ধতিতে যুদ্ধ চালিয়ে মুক্তিবাহিনী সারাদেশে পাকিস্তানি হানাদার বাহিনীকে ব্যতিব্যস্ত করে তোলে। মুক্তিযুদ্ধ চলাকালীন সময়ে বাংলাদেশ ভারতের কাছ থেকে অর্থনৈতিক, সামরিক ও কূটনৈতিক সাহায্য লাভ করে। ডিসেম্বরের শুরুর দিকে যখন পাকিস্তানি সামরিক বাহিনীর পতন অনিবার্য হয়ে ওঠে, তখন তারা মুক্তিবাহিনীর কাছে পরাজয়ের লজ্জা এড়াবার জন্য এবং মুক্তিযুদ্ধকে আন্তর্জাতিক সংঘর্ষে পরিণত করার উদ্দেশ্যে ৩ ডিসেম্বর ভারতে বিমান হামলার মাধ্যমে ভারতের বিরুদ্ধে যুদ্ধে লিপ্ত হয়।

                                                   অত:পর ভারত বাংলাদেশের স্বাধীনতা যুদ্ধে সরাসরিভাবে জড়িয়ে পড়ে। মুক্তিবাহিনী ও ভারতীয় সামরিক বাহিনীর সম্মিলিত আক্রমণের মুখে ইতোমধ্যে পর্যদুস্ত ও হতোদ্যম পাকিস্তানি সামরিক বাহিনী আত্মসমর্পণের সিদ্ধান্ত গ্রহণ করে। ১৬ ডিসেম্বর ঢাকার রেসকোর্স ময়দানে পাকিস্তান ৯৩,০০০ হাজার সৈন্যসহ আনুষ্ঠানিকভাবে আত্মসমর্পণ করে। এরই মাধ্যমে নয় মাস ব্যাপী রক্তক্ষয়ী মুক্তিযুদ্ধের অবসান হয়; প্রতিষ্ঠিত হয় বাঙালি জাতির স্বাধীন রাষ্ট্র বাংলাদেশ।</article>
	

	</div>
<div class="content" style="margin-top:200px;" id="p5">
        <h2>অস্থায়ী সরকার গঠন</h2>		
		<article>বাংলাদেশের স্বাধীনতা যুদ্ধ ছিল ১৯৭১ সালে সংঘটিত তৎকালীন পশ্চিম পাকিস্তানের বিরুদ্ধে পূর্ব পাকিস্তানের সশস্ত্র সংগ্রাম, যার মাধ্যমে বাংলাদেশ একটি স্বাধীন দেশ হিসাবে পৃথিবীর মানচিত্রে আত্মপ্রকাশ করে। ১৯৭১ সালের ২৫ মার্চ রাতের অন্ধকারে পাকিস্তানি সামরিক বাহিনী পূর্ব পাকিস্তানে বাঙালি নিধনে ঝাঁপিয়ে পড়লে একটি জনযুদ্ধের আদলে মুক্তিযুদ্ধ তথা স্বাধীনতা যুদ্ধের সূচনা ঘটে।[২১] ২৫ মার্চের কালো রাতে পাকিস্তানি সামরিক বাহিনী ঢাকায় অজস্র সাধারণ নাগরিক, ছাত্র, শিক্ষক, বুদ্ধিজীবী, পুলিশ ও ই.পি.আর.-কে হত্যা করে এবং ১৯৭০ সালের সাধারণ নির্বাচনে নিরঙ্কুশ সংখ্যাগরিষ্ঠতাপ্রাপ্ত দল আওয়ামী লীগ প্রধান বাঙালিদের তৎকালীন জনপ্রিয় নেতা বঙ্গবন্ধু শেখ মুজিবুর রহমানকে গ্রেপ্তার করে। গ্রেফতারের পূর্বে ২৬ মার্চের প্রথম প্রহরে তিনি বাংলাদেশের স্বাধীনতা ঘোষণা করেন।[২২][২৩][২৪][২৫][২৬]

                                                  পরিকল্পিত গণহত্যার মুখে সারাদেশে শুরু হয়ে যায় প্রতিরোধযুদ্ধ; জীবন বাঁচাতে প্রায় ১ কোটি মানুষ পার্শ্ববর্তী দেশ ভারতে আশ্রয় গ্রহণ করে। পাকিস্তানি সামরিক বাহিনীর ইস্ট বেঙ্গল রেজিমেন্ট, ইস্ট পাকিস্তান রাইফেলস (ইপিআর), ইস্ট পাকিস্তান পুলিশ, সামরিক বাহিনীর বাঙালি সদস্য এবং সর্বোপরি বাংলাদেশের স্বাধীনতাকামী সাধারণ মানুষ দেশকে পাকিস্তানি সামরিক বাহিনীর কব্জা থেকে মুক্ত করতে কয়েক মাসের মধ্যে গড়ে তোলে মুক্তিবাহিনী। গেরিলা পদ্ধতিতে যুদ্ধ চালিয়ে মুক্তিবাহিনী সারাদেশে পাকিস্তানি হানাদার বাহিনীকে ব্যতিব্যস্ত করে তোলে। মুক্তিযুদ্ধ চলাকালীন সময়ে বাংলাদেশ ভারতের কাছ থেকে অর্থনৈতিক, সামরিক ও কূটনৈতিক সাহায্য লাভ করে। ডিসেম্বরের শুরুর দিকে যখন পাকিস্তানি সামরিক বাহিনীর পতন অনিবার্য হয়ে ওঠে, তখন তারা মুক্তিবাহিনীর কাছে পরাজয়ের লজ্জা এড়াবার জন্য এবং মুক্তিযুদ্ধকে আন্তর্জাতিক সংঘর্ষে পরিণত করার উদ্দেশ্যে ৩ ডিসেম্বর ভারতে বিমান হামলার মাধ্যমে ভারতের বিরুদ্ধে যুদ্ধে লিপ্ত হয়।

                                                   অত:পর ভারত বাংলাদেশের স্বাধীনতা যুদ্ধে সরাসরিভাবে জড়িয়ে পড়ে। মুক্তিবাহিনী ও ভারতীয় সামরিক বাহিনীর সম্মিলিত আক্রমণের মুখে ইতোমধ্যে পর্যদুস্ত ও হতোদ্যম পাকিস্তানি সামরিক বাহিনী আত্মসমর্পণের সিদ্ধান্ত গ্রহণ করে। ১৬ ডিসেম্বর ঢাকার রেসকোর্স ময়দানে পাকিস্তান ৯৩,০০০ হাজার সৈন্যসহ আনুষ্ঠানিকভাবে আত্মসমর্পণ করে। এরই মাধ্যমে নয় মাস ব্যাপী রক্তক্ষয়ী মুক্তিযুদ্ধের অবসান হয়; প্রতিষ্ঠিত হয় বাঙালি জাতির স্বাধীন রাষ্ট্র বাংলাদেশ।</article>
	

	</div>

	<div class="content" style="margin-top:200px;" id="p6">
        <h2>মুক্তিযুদ্ধের ৯ মাস</h2>		
		<article>বাংলাদেশের স্বাধীনতা যুদ্ধ ছিল ১৯৭১ সালে সংঘটিত তৎকালীন পশ্চিম পাকিস্তানের বিরুদ্ধে পূর্ব পাকিস্তানের সশস্ত্র সংগ্রাম, যার মাধ্যমে বাংলাদেশ একটি স্বাধীন দেশ হিসাবে পৃথিবীর মানচিত্রে আত্মপ্রকাশ করে। ১৯৭১ সালের ২৫ মার্চ রাতের অন্ধকারে পাকিস্তানি সামরিক বাহিনী পূর্ব পাকিস্তানে বাঙালি নিধনে ঝাঁপিয়ে পড়লে একটি জনযুদ্ধের আদলে মুক্তিযুদ্ধ তথা স্বাধীনতা যুদ্ধের সূচনা ঘটে।[২১] ২৫ মার্চের কালো রাতে পাকিস্তানি সামরিক বাহিনী ঢাকায় অজস্র সাধারণ নাগরিক, ছাত্র, শিক্ষক, বুদ্ধিজীবী, পুলিশ ও ই.পি.আর.-কে হত্যা করে এবং ১৯৭০ সালের সাধারণ নির্বাচনে নিরঙ্কুশ সংখ্যাগরিষ্ঠতাপ্রাপ্ত দল আওয়ামী লীগ প্রধান বাঙালিদের তৎকালীন জনপ্রিয় নেতা বঙ্গবন্ধু শেখ মুজিবুর রহমানকে গ্রেপ্তার করে। গ্রেফতারের পূর্বে ২৬ মার্চের প্রথম প্রহরে তিনি বাংলাদেশের স্বাধীনতা ঘোষণা করেন।[২২][২৩][২৪][২৫][২৬]

                                                  পরিকল্পিত গণহত্যার মুখে সারাদেশে শুরু হয়ে যায় প্রতিরোধযুদ্ধ; জীবন বাঁচাতে প্রায় ১ কোটি মানুষ পার্শ্ববর্তী দেশ ভারতে আশ্রয় গ্রহণ করে। পাকিস্তানি সামরিক বাহিনীর ইস্ট বেঙ্গল রেজিমেন্ট, ইস্ট পাকিস্তান রাইফেলস (ইপিআর), ইস্ট পাকিস্তান পুলিশ, সামরিক বাহিনীর বাঙালি সদস্য এবং সর্বোপরি বাংলাদেশের স্বাধীনতাকামী সাধারণ মানুষ দেশকে পাকিস্তানি সামরিক বাহিনীর কব্জা থেকে মুক্ত করতে কয়েক মাসের মধ্যে গড়ে তোলে মুক্তিবাহিনী। গেরিলা পদ্ধতিতে যুদ্ধ চালিয়ে মুক্তিবাহিনী সারাদেশে পাকিস্তানি হানাদার বাহিনীকে ব্যতিব্যস্ত করে তোলে। মুক্তিযুদ্ধ চলাকালীন সময়ে বাংলাদেশ ভারতের কাছ থেকে অর্থনৈতিক, সামরিক ও কূটনৈতিক সাহায্য লাভ করে। ডিসেম্বরের শুরুর দিকে যখন পাকিস্তানি সামরিক বাহিনীর পতন অনিবার্য হয়ে ওঠে, তখন তারা মুক্তিবাহিনীর কাছে পরাজয়ের লজ্জা এড়াবার জন্য এবং মুক্তিযুদ্ধকে আন্তর্জাতিক সংঘর্ষে পরিণত করার উদ্দেশ্যে ৩ ডিসেম্বর ভারতে বিমান হামলার মাধ্যমে ভারতের বিরুদ্ধে যুদ্ধে লিপ্ত হয়।

                                                   অত:পর ভারত বাংলাদেশের স্বাধীনতা যুদ্ধে সরাসরিভাবে জড়িয়ে পড়ে। মুক্তিবাহিনী ও ভারতীয় সামরিক বাহিনীর সম্মিলিত আক্রমণের মুখে ইতোমধ্যে পর্যদুস্ত ও হতোদ্যম পাকিস্তানি সামরিক বাহিনী আত্মসমর্পণের সিদ্ধান্ত গ্রহণ করে। ১৬ ডিসেম্বর ঢাকার রেসকোর্স ময়দানে পাকিস্তান ৯৩,০০০ হাজার সৈন্যসহ আনুষ্ঠানিকভাবে আত্মসমর্পণ করে। এরই মাধ্যমে নয় মাস ব্যাপী রক্তক্ষয়ী মুক্তিযুদ্ধের অবসান হয়; প্রতিষ্ঠিত হয় বাঙালি জাতির স্বাধীন রাষ্ট্র বাংলাদেশ।</article>
	

	</div>

	<div class="content" style="margin-top:200px;" id="p7">
        <h2>সেক্টর সমূহ</h2>		
		<article>বাংলাদেশের স্বাধীনতা যুদ্ধ ছিল ১৯৭১ সালে সংঘটিত তৎকালীন পশ্চিম পাকিস্তানের বিরুদ্ধে পূর্ব পাকিস্তানের সশস্ত্র সংগ্রাম, যার মাধ্যমে বাংলাদেশ একটি স্বাধীন দেশ হিসাবে পৃথিবীর মানচিত্রে আত্মপ্রকাশ করে। ১৯৭১ সালের ২৫ মার্চ রাতের অন্ধকারে পাকিস্তানি সামরিক বাহিনী পূর্ব পাকিস্তানে বাঙালি নিধনে ঝাঁপিয়ে পড়লে একটি জনযুদ্ধের আদলে মুক্তিযুদ্ধ তথা স্বাধীনতা যুদ্ধের সূচনা ঘটে।[২১] ২৫ মার্চের কালো রাতে পাকিস্তানি সামরিক বাহিনী ঢাকায় অজস্র সাধারণ নাগরিক, ছাত্র, শিক্ষক, বুদ্ধিজীবী, পুলিশ ও ই.পি.আর.-কে হত্যা করে এবং ১৯৭০ সালের সাধারণ নির্বাচনে নিরঙ্কুশ সংখ্যাগরিষ্ঠতাপ্রাপ্ত দল আওয়ামী লীগ প্রধান বাঙালিদের তৎকালীন জনপ্রিয় নেতা বঙ্গবন্ধু শেখ মুজিবুর রহমানকে গ্রেপ্তার করে। গ্রেফতারের পূর্বে ২৬ মার্চের প্রথম প্রহরে তিনি বাংলাদেশের স্বাধীনতা ঘোষণা করেন।[২২][২৩][২৪][২৫][২৬]

                                                  পরিকল্পিত গণহত্যার মুখে সারাদেশে শুরু হয়ে যায় প্রতিরোধযুদ্ধ; জীবন বাঁচাতে প্রায় ১ কোটি মানুষ পার্শ্ববর্তী দেশ ভারতে আশ্রয় গ্রহণ করে। পাকিস্তানি সামরিক বাহিনীর ইস্ট বেঙ্গল রেজিমেন্ট, ইস্ট পাকিস্তান রাইফেলস (ইপিআর), ইস্ট পাকিস্তান পুলিশ, সামরিক বাহিনীর বাঙালি সদস্য এবং সর্বোপরি বাংলাদেশের স্বাধীনতাকামী সাধারণ মানুষ দেশকে পাকিস্তানি সামরিক বাহিনীর কব্জা থেকে মুক্ত করতে কয়েক মাসের মধ্যে গড়ে তোলে মুক্তিবাহিনী। গেরিলা পদ্ধতিতে যুদ্ধ চালিয়ে মুক্তিবাহিনী সারাদেশে পাকিস্তানি হানাদার বাহিনীকে ব্যতিব্যস্ত করে তোলে। মুক্তিযুদ্ধ চলাকালীন সময়ে বাংলাদেশ ভারতের কাছ থেকে অর্থনৈতিক, সামরিক ও কূটনৈতিক সাহায্য লাভ করে। ডিসেম্বরের শুরুর দিকে যখন পাকিস্তানি সামরিক বাহিনীর পতন অনিবার্য হয়ে ওঠে, তখন তারা মুক্তিবাহিনীর কাছে পরাজয়ের লজ্জা এড়াবার জন্য এবং মুক্তিযুদ্ধকে আন্তর্জাতিক সংঘর্ষে পরিণত করার উদ্দেশ্যে ৩ ডিসেম্বর ভারতে বিমান হামলার মাধ্যমে ভারতের বিরুদ্ধে যুদ্ধে লিপ্ত হয়।

                                                   অত:পর ভারত বাংলাদেশের স্বাধীনতা যুদ্ধে সরাসরিভাবে জড়িয়ে পড়ে। মুক্তিবাহিনী ও ভারতীয় সামরিক বাহিনীর সম্মিলিত আক্রমণের মুখে ইতোমধ্যে পর্যদুস্ত ও হতোদ্যম পাকিস্তানি সামরিক বাহিনী আত্মসমর্পণের সিদ্ধান্ত গ্রহণ করে। ১৬ ডিসেম্বর ঢাকার রেসকোর্স ময়দানে পাকিস্তান ৯৩,০০০ হাজার সৈন্যসহ আনুষ্ঠানিকভাবে আত্মসমর্পণ করে। এরই মাধ্যমে নয় মাস ব্যাপী রক্তক্ষয়ী মুক্তিযুদ্ধের অবসান হয়; প্রতিষ্ঠিত হয় বাঙালি জাতির স্বাধীন রাষ্ট্র বাংলাদেশ।</article>
	

	</div>

	<div class="content" style="margin-top:200px;" id="p8">
        <h2>ভারর-পাকিস্তান যুদ্ধ</h2>		
		<article >বাংলাদেশের স্বাধীনতা যুদ্ধ ছিল ১৯৭১ সালে সংঘটিত তৎকালীন পশ্চিম পাকিস্তানের বিরুদ্ধে পূর্ব পাকিস্তানের সশস্ত্র সংগ্রাম, যার মাধ্যমে বাংলাদেশ একটি স্বাধীন দেশ হিসাবে পৃথিবীর মানচিত্রে আত্মপ্রকাশ করে। ১৯৭১ সালের ২৫ মার্চ রাতের অন্ধকারে পাকিস্তানি সামরিক বাহিনী পূর্ব পাকিস্তানে বাঙালি নিধনে ঝাঁপিয়ে পড়লে একটি জনযুদ্ধের আদলে মুক্তিযুদ্ধ তথা স্বাধীনতা যুদ্ধের সূচনা ঘটে।[২১] ২৫ মার্চের কালো রাতে পাকিস্তানি সামরিক বাহিনী ঢাকায় অজস্র সাধারণ নাগরিক, ছাত্র, শিক্ষক, বুদ্ধিজীবী, পুলিশ ও ই.পি.আর.-কে হত্যা করে এবং ১৯৭০ সালের সাধারণ নির্বাচনে নিরঙ্কুশ সংখ্যাগরিষ্ঠতাপ্রাপ্ত দল আওয়ামী লীগ প্রধান বাঙালিদের তৎকালীন জনপ্রিয় নেতা বঙ্গবন্ধু শেখ মুজিবুর রহমানকে গ্রেপ্তার করে। গ্রেফতারের পূর্বে ২৬ মার্চের প্রথম প্রহরে তিনি বাংলাদেশের স্বাধীনতা ঘোষণা করেন।[২২][২৩][২৪][২৫][২৬]

                                                  পরিকল্পিত গণহত্যার মুখে সারাদেশে শুরু হয়ে যায় প্রতিরোধযুদ্ধ; জীবন বাঁচাতে প্রায় ১ কোটি মানুষ পার্শ্ববর্তী দেশ ভারতে আশ্রয় গ্রহণ করে। পাকিস্তানি সামরিক বাহিনীর ইস্ট বেঙ্গল রেজিমেন্ট, ইস্ট পাকিস্তান রাইফেলস (ইপিআর), ইস্ট পাকিস্তান পুলিশ, সামরিক বাহিনীর বাঙালি সদস্য এবং সর্বোপরি বাংলাদেশের স্বাধীনতাকামী সাধারণ মানুষ দেশকে পাকিস্তানি সামরিক বাহিনীর কব্জা থেকে মুক্ত করতে কয়েক মাসের মধ্যে গড়ে তোলে মুক্তিবাহিনী। গেরিলা পদ্ধতিতে যুদ্ধ চালিয়ে মুক্তিবাহিনী সারাদেশে পাকিস্তানি হানাদার বাহিনীকে ব্যতিব্যস্ত করে তোলে। মুক্তিযুদ্ধ চলাকালীন সময়ে বাংলাদেশ ভারতের কাছ থেকে অর্থনৈতিক, সামরিক ও কূটনৈতিক সাহায্য লাভ করে। ডিসেম্বরের শুরুর দিকে যখন পাকিস্তানি সামরিক বাহিনীর পতন অনিবার্য হয়ে ওঠে, তখন তারা মুক্তিবাহিনীর কাছে পরাজয়ের লজ্জা এড়াবার জন্য এবং মুক্তিযুদ্ধকে আন্তর্জাতিক সংঘর্ষে পরিণত করার উদ্দেশ্যে ৩ ডিসেম্বর ভারতে বিমান হামলার মাধ্যমে ভারতের বিরুদ্ধে যুদ্ধে লিপ্ত হয়।

                                                   অত:পর ভারত বাংলাদেশের স্বাধীনতা যুদ্ধে সরাসরিভাবে জড়িয়ে পড়ে। মুক্তিবাহিনী ও ভারতীয় সামরিক বাহিনীর সম্মিলিত আক্রমণের মুখে ইতোমধ্যে পর্যদুস্ত ও হতোদ্যম পাকিস্তানি সামরিক বাহিনী আত্মসমর্পণের সিদ্ধান্ত গ্রহণ করে। ১৬ ডিসেম্বর ঢাকার রেসকোর্স ময়দানে পাকিস্তান ৯৩,০০০ হাজার সৈন্যসহ আনুষ্ঠানিকভাবে আত্মসমর্পণ করে। এরই মাধ্যমে নয় মাস ব্যাপী রক্তক্ষয়ী মুক্তিযুদ্ধের অবসান হয়; প্রতিষ্ঠিত হয় বাঙালি জাতির স্বাধীন রাষ্ট্র বাংলাদেশ।</article>
	

	</div>

	<div class="content" style="margin-top:200px;" id="p9">
        <h2>আন্তর্জাতিক স্বীকৃতি</h2>		
		<article>বাংলাদেশের স্বাধীনতা যুদ্ধ ছিল ১৯৭১ সালে সংঘটিত তৎকালীন পশ্চিম পাকিস্তানের বিরুদ্ধে পূর্ব পাকিস্তানের সশস্ত্র সংগ্রাম, যার মাধ্যমে বাংলাদেশ একটি স্বাধীন দেশ হিসাবে পৃথিবীর মানচিত্রে আত্মপ্রকাশ করে। ১৯৭১ সালের ২৫ মার্চ রাতের অন্ধকারে পাকিস্তানি সামরিক বাহিনী পূর্ব পাকিস্তানে বাঙালি নিধনে ঝাঁপিয়ে পড়লে একটি জনযুদ্ধের আদলে মুক্তিযুদ্ধ তথা স্বাধীনতা যুদ্ধের সূচনা ঘটে।[২১] ২৫ মার্চের কালো রাতে পাকিস্তানি সামরিক বাহিনী ঢাকায় অজস্র সাধারণ নাগরিক, ছাত্র, শিক্ষক, বুদ্ধিজীবী, পুলিশ ও ই.পি.আর.-কে হত্যা করে এবং ১৯৭০ সালের সাধারণ নির্বাচনে নিরঙ্কুশ সংখ্যাগরিষ্ঠতাপ্রাপ্ত দল আওয়ামী লীগ প্রধান বাঙালিদের তৎকালীন জনপ্রিয় নেতা বঙ্গবন্ধু শেখ মুজিবুর রহমানকে গ্রেপ্তার করে। গ্রেফতারের পূর্বে ২৬ মার্চের প্রথম প্রহরে তিনি বাংলাদেশের স্বাধীনতা ঘোষণা করেন।[২২][২৩][২৪][২৫][২৬]

                                                  পরিকল্পিত গণহত্যার মুখে সারাদেশে শুরু হয়ে যায় প্রতিরোধযুদ্ধ; জীবন বাঁচাতে প্রায় ১ কোটি মানুষ পার্শ্ববর্তী দেশ ভারতে আশ্রয় গ্রহণ করে। পাকিস্তানি সামরিক বাহিনীর ইস্ট বেঙ্গল রেজিমেন্ট, ইস্ট পাকিস্তান রাইফেলস (ইপিআর), ইস্ট পাকিস্তান পুলিশ, সামরিক বাহিনীর বাঙালি সদস্য এবং সর্বোপরি বাংলাদেশের স্বাধীনতাকামী সাধারণ মানুষ দেশকে পাকিস্তানি সামরিক বাহিনীর কব্জা থেকে মুক্ত করতে কয়েক মাসের মধ্যে গড়ে তোলে মুক্তিবাহিনী। গেরিলা পদ্ধতিতে যুদ্ধ চালিয়ে মুক্তিবাহিনী সারাদেশে পাকিস্তানি হানাদার বাহিনীকে ব্যতিব্যস্ত করে তোলে। মুক্তিযুদ্ধ চলাকালীন সময়ে বাংলাদেশ ভারতের কাছ থেকে অর্থনৈতিক, সামরিক ও কূটনৈতিক সাহায্য লাভ করে। ডিসেম্বরের শুরুর দিকে যখন পাকিস্তানি সামরিক বাহিনীর পতন অনিবার্য হয়ে ওঠে, তখন তারা মুক্তিবাহিনীর কাছে পরাজয়ের লজ্জা এড়াবার জন্য এবং মুক্তিযুদ্ধকে আন্তর্জাতিক সংঘর্ষে পরিণত করার উদ্দেশ্যে ৩ ডিসেম্বর ভারতে বিমান হামলার মাধ্যমে ভারতের বিরুদ্ধে যুদ্ধে লিপ্ত হয়।

                                                   অত:পর ভারত বাংলাদেশের স্বাধীনতা যুদ্ধে সরাসরিভাবে জড়িয়ে পড়ে। মুক্তিবাহিনী ও ভারতীয় সামরিক বাহিনীর সম্মিলিত আক্রমণের মুখে ইতোমধ্যে পর্যদুস্ত ও হতোদ্যম পাকিস্তানি সামরিক বাহিনী আত্মসমর্পণের সিদ্ধান্ত গ্রহণ করে। ১৬ ডিসেম্বর ঢাকার রেসকোর্স ময়দানে পাকিস্তান ৯৩,০০০ হাজার সৈন্যসহ আনুষ্ঠানিকভাবে আত্মসমর্পণ করে। এরই মাধ্যমে নয় মাস ব্যাপী রক্তক্ষয়ী মুক্তিযুদ্ধের অবসান হয়; প্রতিষ্ঠিত হয় বাঙালি জাতির স্বাধীন রাষ্ট্র বাংলাদেশ।</article>
	
    
	</div>
    <div class="content" style="margin-top:200px;" id="p10">
        <h2>মুক্তিযুদ্ধ ও বিশ্বসমাজ</h2>		
		<article>বাংলাদেশের স্বাধীনতা যুদ্ধ ছিল ১৯৭১ সালে সংঘটিত তৎকালীন পশ্চিম পাকিস্তানের বিরুদ্ধে পূর্ব পাকিস্তানের সশস্ত্র সংগ্রাম, যার মাধ্যমে বাংলাদেশ একটি স্বাধীন দেশ হিসাবে পৃথিবীর মানচিত্রে আত্মপ্রকাশ করে। ১৯৭১ সালের ২৫ মার্চ রাতের অন্ধকারে পাকিস্তানি সামরিক বাহিনী পূর্ব পাকিস্তানে বাঙালি নিধনে ঝাঁপিয়ে পড়লে একটি জনযুদ্ধের আদলে মুক্তিযুদ্ধ তথা স্বাধীনতা যুদ্ধের সূচনা ঘটে।[২১] ২৫ মার্চের কালো রাতে পাকিস্তানি সামরিক বাহিনী ঢাকায় অজস্র সাধারণ নাগরিক, ছাত্র, শিক্ষক, বুদ্ধিজীবী, পুলিশ ও ই.পি.আর.-কে হত্যা করে এবং ১৯৭০ সালের সাধারণ নির্বাচনে নিরঙ্কুশ সংখ্যাগরিষ্ঠতাপ্রাপ্ত দল আওয়ামী লীগ প্রধান বাঙালিদের তৎকালীন জনপ্রিয় নেতা বঙ্গবন্ধু শেখ মুজিবুর রহমানকে গ্রেপ্তার করে। গ্রেফতারের পূর্বে ২৬ মার্চের প্রথম প্রহরে তিনি বাংলাদেশের স্বাধীনতা ঘোষণা করেন।[২২][২৩][২৪][২৫][২৬]

                                                  পরিকল্পিত গণহত্যার মুখে সারাদেশে শুরু হয়ে যায় প্রতিরোধযুদ্ধ; জীবন বাঁচাতে প্রায় ১ কোটি মানুষ পার্শ্ববর্তী দেশ ভারতে আশ্রয় গ্রহণ করে। পাকিস্তানি সামরিক বাহিনীর ইস্ট বেঙ্গল রেজিমেন্ট, ইস্ট পাকিস্তান রাইফেলস (ইপিআর), ইস্ট পাকিস্তান পুলিশ, সামরিক বাহিনীর বাঙালি সদস্য এবং সর্বোপরি বাংলাদেশের স্বাধীনতাকামী সাধারণ মানুষ দেশকে পাকিস্তানি সামরিক বাহিনীর কব্জা থেকে মুক্ত করতে কয়েক মাসের মধ্যে গড়ে তোলে মুক্তিবাহিনী। গেরিলা পদ্ধতিতে যুদ্ধ চালিয়ে মুক্তিবাহিনী সারাদেশে পাকিস্তানি হানাদার বাহিনীকে ব্যতিব্যস্ত করে তোলে। মুক্তিযুদ্ধ চলাকালীন সময়ে বাংলাদেশ ভারতের কাছ থেকে অর্থনৈতিক, সামরিক ও কূটনৈতিক সাহায্য লাভ করে। ডিসেম্বরের শুরুর দিকে যখন পাকিস্তানি সামরিক বাহিনীর পতন অনিবার্য হয়ে ওঠে, তখন তারা মুক্তিবাহিনীর কাছে পরাজয়ের লজ্জা এড়াবার জন্য এবং মুক্তিযুদ্ধকে আন্তর্জাতিক সংঘর্ষে পরিণত করার উদ্দেশ্যে ৩ ডিসেম্বর ভারতে বিমান হামলার মাধ্যমে ভারতের বিরুদ্ধে যুদ্ধে লিপ্ত হয়।

                                                   অত:পর ভারত বাংলাদেশের স্বাধীনতা যুদ্ধে সরাসরিভাবে জড়িয়ে পড়ে। মুক্তিবাহিনী ও ভারতীয় সামরিক বাহিনীর সম্মিলিত আক্রমণের মুখে ইতোমধ্যে পর্যদুস্ত ও হতোদ্যম পাকিস্তানি সামরিক বাহিনী আত্মসমর্পণের সিদ্ধান্ত গ্রহণ করে। ১৬ ডিসেম্বর ঢাকার রেসকোর্স ময়দানে পাকিস্তান ৯৩,০০০ হাজার সৈন্যসহ আনুষ্ঠানিকভাবে আত্মসমর্পণ করে। এরই মাধ্যমে নয় মাস ব্যাপী রক্তক্ষয়ী মুক্তিযুদ্ধের অবসান হয়; প্রতিষ্ঠিত হয় বাঙালি জাতির স্বাধীন রাষ্ট্র বাংলাদেশ।</article>
	

	</div>

</body>

</html>
<?php  include 'close.php';?>