<?php	
	if($_GET['login'] == 'Admin' && $_GET['password'] == '1423'){
		$result["login"] = "Admin";
		$result["password"] = "1423";
	} else if($_GET['login'] == '123'){
		$result["login"] = "Admin";
		$result["password"] = "It's work tooo!!!";
	}
	echo json_encode($result);
?>
