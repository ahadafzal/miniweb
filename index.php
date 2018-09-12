<?php
//mail syntax - mail(to,subject,message,headers,parameters);
$display=0;

if (sizeof($_POST)) {

	$headers="From: ".$_POST['email'];

	if(mail('ahadbutafzal@gmail.com','another query',wordwrap($_POST['actualQueries'],$headers))){
		$display=1;
	}
}

?>



<!DOCTYPE html5>
<html>
<head>
	<title>Demo classes</title>
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,600,700,900" rel="stylesheet"></head>
<body>
	<div class="top-bar">
		<div >
			<img src="img/classlogo.png" class="logo">
		</div>
		<div class='mail'>
			<img src="img/icons/mail.svg" class="icon">
			<a href="#" >info@classes-mail.com</a>
		</div>
		<div class='phone'>
			<img src="img/icons/phone.svg" class="icon">
			<a href="#"  >+91-9768119962</a>
		</div>
		<!-- <div class='address'>
			<img src="icons/address.svg" class="icon">
			<a href="#">Quarry Road, Mangatram, Bhandup West, Mumbai - 400078</a>
			
		</div> -->
	</div>

	<nav>
		
		<ul class="nav-links">
			<li><a href="#">Home</a></li>
			<li><a href="#">About us</a></li>
			<li><a href="#">Courses</a></li>
			<li><a href="#">FAQs</a></li>
			<li><a href="#">Contact us</a></li>
		</ul>
	</nav>

	
	<div class="section-about">
		<div class="section-about-img">
			<img style="border-radius: 0% 50% 50% 0%;height: 350px;width: auto;border: 4px solid white;" src="img/founder.jpg">
		</div>
		<div class="section-about-text">
			<p >Ravindra is the most recognised technical trainer in the area of computer science in India. He holds a Masters degree in Computer Science from Indian Institute of Science (IISc)<br><br>
				He has been training students in various technical topics and core computer science subjects since 2008. He is proud to say that almost half of the students now doing Masters at IISc and IITs in computer science have been trained by him in atleast one subject. He himself achieved a percentile of 99.64 in GATE 2007, and since then he guided thousands of students towards cracking the nation level entrance test, GATE.<br><br>
			</p>

			<a href="#">Read More</a>
			
		</div>
		
	</div>


	<!-- viggi -->
	<div class="courseslink">
<div class="container1">
	<img src="img/c2.png" alt="Avatar" class="image" style="width: 95%">
  <div class="middle">
    <div class="text"> <a class="read" href ="#">Read more</a></div>
  </div>
</div>

<div class="container">
		<img src="img/c3.png" alt="Avatar" class="image" style="width: 95%">
  <div class="middle">
    <div class="text"> <a class="read" href ="#">Read more</a></div>
  </div>
</div>

<div class="container">
		<img src="img/c4.png" alt="Avatar" class="image" style="width: 95%">
  <div class="middle">
    <div class="text"> <a class="read" href ="#">Read more</a></div>
  </div>
</div>

<div class="container">
		<img src="img/c1.png" alt="Avatar" class="image" style="width: 95%">
  <div class="middle">
    <div class="text"> <a class="read" href ="#">Read more</a></div>
  </div>
</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

	<!-- viggi -->












	<div class="students-reviews">
		 	 <p class="students-reviews-para">WHAT OUR STUDENTS SAY</p>

		 	 <div class="student1">
		 	 	<img src="img/icons/write.svg">
		 	 	<p>I  was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!</p>
		 	 	<div class="student-name">
		 	 		
		 	 		<p><img src="img/profile.jpg">~Afzal Khan</p>
		 	 		
		 	 	</div>
		 	 </div>

		 	 <div class="student">
		 	 	<img src="img/icons/write.svg">
		 	 	<p>I  was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!</p>
		 	 	<div class="student-name">
		 	 		
		 	 		<p><img src="img/profile.jpg">~Afzal Khan</p>
		 	 		
		 	 	</div>
		 	 </div>

		 	 <div class="student">
		 	 	<img src="img/icons/write.svg">
		 	 	<p>I  was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!</p>
		 	 	<div class="student-name">
		 	 		
		 	 		<p><img src="img/profile.jpg">~Afzal Khan</p>
		 	 		
		 	 	</div>
		 	 </div>

	</div>

	<section class="queries-section" id="queries-section">
		<p class="queres-section-para">DROP YOUR QUERIES DOWN</p>
		<?php if($display) 
		{echo 	'<p class="email-sent"  >Emai Sent!! We will get back to you so soon as possible.</p>';
} ?>
		<form method="post" action="#queries-section" class="query-form">
			<div class="row">
				<div class="query-attribute col" >
					<label for="name">Name</label>
				</div>
				<div class="query-value col" >
					<input type="text" name="name" id="name" placeholder="Your Name" required="">
				</div>
			</div>

			<div class="row">
				<div class="query-attribute col" >
					<label for="email">Email</label>
				</div>
				<div class="query-value col" >
					<input type="email" name="email" id="email" placeholder="Your Email" required="">
				</div>
			</div>

			<div class="row">
				<div class="query-attribute col" >
					<label for="find_me">How did you find us?</label>
				</div>
				<div class="query-value col" >
					<select name="find_me" id="find_me">
						<option value="search">Search Engine</option>
						<option value="friends">Friends</option>
						<option value="ads">Advertisement</option>
						<option value="other">Other</option>
					</select>
				</div>
			</div>



			<div class="row">
				<div class="query-attribute col" >
					<label for="email">Your Queries</label>
				</div>
				<div class="query-value col" >
					<textarea name="actualQueries" placeholder="List down your queries..." style="height: 80px;"></textarea>
				</div>
			</div>

			<div class="row">
				<div class="query-attribute col" >
					<label>&nbsp;</label>
				</div>
				<div class="query-value col" >
					<input type="submit" name="submit" value="Send" id="send-btn" href="#queries-section" >
				</div>
			</div>

			
			
		</form>
	</section>


	<div class="footer">
  <nav class="navigator">
			<a href="#" style="color:rgb(53, 121, 232) ; margin: 0 1em; font-size: 25px">About</a>
			<a href="#" style="color:rgb(53, 121, 232) ; margin: 0 1em;font-size: 25px">FAQ</a>
			<a href="#" style="color:rgb(53, 121, 232) ; margin: 0 1em; font-size: 25px">Register</a>
			<a href="#" style="color:rgb(53, 121, 232) ; margin: 0 1em; font-size: 25px">Recomended books</a>
	</nav>
<p style="color:rgb(53, 121, 232) ; margin: 0 1em; font-size: 25px">12345@gmail.com</p>
<p style="color:rgb(53, 121, 232) ; margin: 0 1em; font-size: 25px">Prerena Eduservices Private Limited © 2018</p>
</div>





</body>


</html>

