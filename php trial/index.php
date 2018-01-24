
<?php
$match = 'hloni123';


if (isset($_POST['password'])) {
	$password = $_POST['password'];
	if(!empty($password)) {

		if ($password==$match) {

			echo 'successfuly loggedin';
		}else{
			echo "Incorrect password";
		}
	}else{
		echo "PLEASE ENTER PASSWORD";
	}
}



?>




<form action="index.php" method="POST">
Password: <input type="password" name="password" placeholder="password">
<input type="submit" name="submit" value="SUBMIT">
	

</form>




