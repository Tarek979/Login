<?php

	if($_SERVER['REQUEST_METHOD'] === "POST"){

		$username = $_POST['Username'];
		$password = $_POST['Password'];

		if(!(empty($username) && empty($password))){
			if($username === "tareq" && $password === "1234"){
				echo "Loged in succesfully !";
			}else{
				echo "Username or password is incorrect !";
			}
		}else{
			echo "Enter username or password";
		}

	}else{
		echo "Unauthorised access!";
	}

?>