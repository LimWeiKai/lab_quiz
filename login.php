<!DOCTYPE html>
<html>
<body>
 
<?php
$pw = $_POST['password'];

function checkPassword($password){

	$array = explode("\n", file_get_contents('10-million-password-list-top-1000.txt') );
	
	if ((in_array $password, array)) {
		global $response;
		$response = true;
		return true;
	}
	else {
		global $response;
		$response = false;
		return false;
	}
}

checkPassword($pw);

	if($response == true){
		session_start();
		echo "welcome, ", $pw;
	}
	else{
		echo "No";
	
	}


?>

<div>
<button><a href="form.php">Logout</a></button>
</div>

</body>
</html>