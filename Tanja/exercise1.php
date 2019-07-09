<?php
	$viewer = getenv("HTTP_USER_AGENT");
	$browser = "an unidentified Browser";	

	if(preg_match("/Chrome/i", "$viewer"))
	{ $browser = "Google Chrome"; }
	elseif (preg_match("/Mozilla/i", "$viewer"))
	{ $browser = "Mozilla"; }

	$plattform = "an unidentified OS";
	if(preg_match("/Windows/i", "$viewer"))
	{ $pattform = "Windows."; }
	elseif (preg_match("/Linux/i", "$viewer"))
	{ $plattform = "Linux."; }
	elseif (preg_match("/Mac/i", "viewer"))
	{ $plattform = "Mac."; }

	echo "You are using $browser on $plattform. <br><br>"; 


	if( isset($_POST['submit'])) {
		$firstName = $_POST["firstname"];
		$surName = $_POST["surname"];			

		if(empty($firstName)) {
			echo "Please enter a first name! <br>";
		}
		elseif (empty($surName)) {
			echo "Please enter a surname! <br>";
		}	
		else { 
			echo "<br> Welcome " . $firstName . " " . $surName . "!";
		}		
	}

	if (isset($_POST["firstname"])){
		$firstName = $_POST["firstname"];
	} else {
		$firstName = "";
	}


	if (isset($_POST["surname"])){
		$surName = $_POST["surname"];
	} else {
		$surName = "";
	}

	function division($a,$b){
		$result = $a / $b;
		echo "The result is $result";
	}

	division(30,10);





	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Exercise 1</title>
	
</head>
<body>
	<div>
	<br>
	<br>
	<form action="exercise1.php" method="POST">
		First Name: <input type="text" name="firstname" value='<?= $firstName ?>'><br>
		<br>
		Surname: <input type="text" name="surname" value='<?= $surName ?>'>

		<input type="submit" name="submit">
	</form>

	<div></div>

	
	</div>


</body>
</html>
