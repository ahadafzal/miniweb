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
	<meta name="viewport" content="width=device-width,initial-scale=1.0" >
<!-- s -->
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,600,700,900" rel="stylesheet">
	


</head>

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
		
		<ul class="nav-links js-signin-modal-trigger">
			<li><a href="#">Home</a></li>
			<li><a href="#">About us</a></li>
			<li><a href="#">Courses</a></li>
			<li><a href="#">FAQs</a></li>
			<li><a href="#">Contact us</a></li>
			<li><a class=" cd-main-nav__item--signin" href="#0" data-signin="login">Sign in</a></li>
			<li><a class=" cd-main-nav__item--signup" href="#0" data-signin="signup">Sign up</a></li>

		</ul>
	</nav>

	
	<div class="section-about">
		<div class="section-about-img">
			<img  src="img/founder.jpg">
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


	<footer>
		<div class="foot-container">
		<div class="row">
			<div class="col-1 ">
				<h3>About</h3>
				<p>subjects since 2008. He is proud to say that almost half of the students now doing Masters at IISc and IITs in computer science have been trained by him in atleast one subject</p>
				
			</div>
			<div class="col-1">
				<h3>GET IN TOUCH</h3>
				<p style="margin-bottom: 30px;">Some lines here. !!</p>
					<div style="display: block;">
						<img src="img/icons/mail.svg" class="icon">
						<a href="#" style="text-decoration: none;font-size: 100%;color:#c9c9c9;padding-top: 20px;letter-spacing: 1.5px;word-spacing: 4px;" >info@classes-mail.com</a>
					</div>
					<br>
					<div style="display: block;">
						<img src="img/icons/phone.svg" class="icon">
						<a href="#" style="text-decoration: none;font-size: 100%;color:#c9c9c9;padding-top: 20px;letter-spacing: 1.5px;word-spacing: 4px;" >+91-9768119962</a>
					</div>
					
					
			</div>
			<div class="col-1">
				<h3>SUBSCRIBE</h3>
				<p style="margin-bottom: 30px;">For Latest Notification Subscribe Now</p>
				<form action="#" method="post">	
					<input type="email" name="Enter Your Email" placeholder="Enter Your Email" required="">
				<input type="submit" value="Subscribe Now">
			</form>
			</div>
		</div>
		<div class="row">
			<div style="width:100%;text-align: center;margin-top: 20px;color:#4f6457;">
				<p>© 1998 - 2018 Perena Classes. All rights ® reserved <br> Design by Developed by Afzi & Viggi</p>
			</div>
		</div>




	</div>
	</footer>


<!-- Modal for signup-->




	<div class="cd-signin-modal js-signin-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-signin-modal__container"> <!-- this is the container wrapper -->
			<ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger">
				<li><a href="#0" data-signin="login" data-type="login">Sign in</a></li>
				<li><a href="#0" data-signin="signup" data-type="signup">New account</a></li>
			</ul>

			<div class="cd-signin-modal__block js-signin-modal-block" data-type="login"> <!-- log in form -->
				<form class="cd-signin-modal__form">
					<p class="cd-signin-modal__fieldset">
						<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signin-email">E-mail</label>
						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-signin-modal__error">Error message here!</span>
					</p>

					<p class="cd-signin-modal__fieldset">
						<label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signin-password">Password</label>
						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-password" type="text"  placeholder="Password">
						<a href="#0" class="cd-signin-modal__hide-password js-hide-password">Hide</a>
						<span class="cd-signin-modal__error">Error message here!</span>
					</p>

					<p class="cd-signin-modal__fieldset">
						<input type="checkbox" id="remember-me" checked class="cd-signin-modal__input ">
						<label for="remember-me">Remember me</label>
					</p>

					<p class="cd-signin-modal__fieldset">
						<input class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit" value="Login">
					</p>
				</form>
				
				<p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="reset">Forgot your password?</a></p>
			</div> <!-- cd-signin-modal__block -->

			<div class="cd-signin-modal__block js-signin-modal-block" data-type="signup"> <!-- sign up form -->
				<form class="cd-signin-modal__form">
					<p class="cd-signin-modal__fieldset">
						<label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signup-username">Username</label>
						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-signin-modal__error">Error message here!</span>
					</p>

					<p class="cd-signin-modal__fieldset">
						<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signup-email">E-mail</label>
						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-signin-modal__error">Error message here!</span>
					</p>

					<p class="cd-signin-modal__fieldset">
						<label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signup-password">Password</label>
						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-password" type="text"  placeholder="Password">
						<a href="#0" class="cd-signin-modal__hide-password js-hide-password">Hide</a>
						<span class="cd-signin-modal__error">Error message here!</span>
					</p>

					<p class="cd-signin-modal__fieldset">
						<input type="checkbox" id="accept-terms" class="cd-signin-modal__input ">
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>

					<p class="cd-signin-modal__fieldset">
						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Create account">
					</p>
				</form>
			</div> <!-- cd-signin-modal__block -->

			<div class="cd-signin-modal__block js-signin-modal-block" data-type="reset"> <!-- reset password form -->
				<p class="cd-signin-modal__message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-signin-modal__form">
					<p class="cd-signin-modal__fieldset">
						<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="reset-email">E-mail</label>
						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-signin-modal__error">Error message here!</span>
					</p>

					<p class="cd-signin-modal__fieldset">
						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="login">Back to log-in</a></p>
			</div> <!-- cd-signin-modal__block -->
			<a href="#0" class="cd-signin-modal__close js-close">Close</a>
		</div> <!-- cd-signin-modal__container -->
	</div> <!-- cd-signin-modal -->






<script src="js/modal.js"></script>
</body>


</html>

