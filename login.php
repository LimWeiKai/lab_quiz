<!DOCTYPE html>
<html>
<body>
 
<?php
$uid = $_POST['userid'];
$pw = $_POST['password'];
 
function checkAccount($username, $password){
	if ($username == "ben" && $password == "ben23") {
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

checkAccount($uid, $pw);

	if($response == true){
		session_start();
		echo "welcome, ", $uid;
	}
	else{
		echo "loser";
	
	}


?>

<div>
<button><a href="logout.php">Logout</a></button>
</div>

</body>
</html>