<?php include "includes/datab.php"; ?>
<?php 

if(count($_POST)){
	$user_email=$_POST['email'];
	$user_pass=$_POST['pass'];
	echo $user_email;
	echo $user_pass;

	$sql_query="select * from users where user_email=".'"'.$user_email.'"'."and user_password=".'"'.$user_pass.'"';

	$result = mysqli_query($conn,$sql_query);
	
	if($result){
	 echo "you are logged in"
	}
	else{
		echo "You dont have account yet";
		echo '<a href="https//d-classes.000webhostapp.com">. Register here.</a>'
	}
	
?>