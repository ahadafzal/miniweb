<?php include "includes/datab.php" ?>
<?php


require "PHPMailer/PHPMailerAutoload.php";

if(count($_POST)){
	
	$user_firstname=$_POST['first_name'];
	$user_lastname=$_POST['last_name'];
	$user_name =$_POST['user_name'];
	$user_email =$_POST['user_email'];
	$user_pass =$_POST['user_pass'];

	$email_key = md5($user_name.$user_email.$user_pass);


	$sql_query = "insert into users values('$user_name','$user_pass','$user_firstname','$user_lastname','$user_email','student',0,'$email_key')";
	$verifiction_link='www.d-classes.000webhostapp.com/email_activation.php?key='.$email_key;
	 
	if(mysqli_query($conn,$sql_query)){
	$mail = new PHPMailer();
	$mail->isSMTP(); 
	$mail->Host = 'smtp.gmail.com';
	$mail->Username = 'democlasses03@gmail.com';

	$mail->Password = 'hackedbyafzal';                        
	$mail->SMTPSecure = 'tls';
	$mail->setFrom('axhan11@gmail.com', 'Demo classes');
	$mail->SMTPAuth=true;               
	$mail->Port = 587; 
	$mail->addAddress($user_email, $user_firstname.$user_lastname);
	$mail->Subject = 'Verify your email...';
	$mail->Body    = '<div style="width:60%;margin-right: auto;margin-left: auto;"><h1 style="width:100%;border-bottom: 3px solid #6EBBFC;">Demo Classes</h1><h3>Verify Your Email Address</h3><h2>Please <a href="'.$verifiction_link.'">Click here</a> to verify.</h2><hr style="color: yellow;"><p>© 2018 Demo Classes. All rights reserved.</p></div>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

 if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Email verifiction sent successfully. Please log in to your email to verify.';
}






		
	}
	else{
		echo "database erroe try again !!";
	}

}



?>