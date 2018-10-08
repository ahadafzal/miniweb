<?php include "includes/datab.php" ?>
<?php

if(count($_GET)){
	$key=$_GET['key'];
	echo $key;
	$sql_query="update users set verify_status=1 where email_key=".'"'.$key.'"';

	if(mysqli_query($conn,$sql_query)){
		echo 'Email verified. <a href="index.php">Click here</a> to login.';	
	}
	else{
		echo 'database eror';
	}

}
else{
	echo 'please <a href="index.php">Click here</a> to  register. ';
}



?>