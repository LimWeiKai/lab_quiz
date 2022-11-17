<!DOCTYPE html>
<html>
<body>
 
<?php
$search = $_POST['search'];
$response = "";

function checkSearch($search){
	
	if (in_array ($search)) {
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

	if($response == false){
		session_start();
		echo "welcome, ", $pw;
	}
	else{
		echo "No";
	
	}


?>

<div>
<button><a href="form.php">Return Home</a></button>
</div>

</body>
</html>