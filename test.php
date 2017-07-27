<?php
	
	$username = pandaklin;
	$password = kevin123;

	$hashusername = password_hash($username, PASSWORD_DEFAULT);
	$hashpassword = password_hash($password, PASSWORD_DEFAULT);

	echo "username: ", $username, "<br>";
	echo "password: ", $password, "<br>";
	echo "hashed username: ", $hashusername, "<br>";
	echo "hashed password: ", $hashpassword, "<br>";

	$input_password = kevin123;
	$compare_hash = password_hash($input_password, PASSWORD_DEFAULT);

	echo "hash of input password: ", $compare_hash, "<br>";

	if(password_verify($password, $hashpassword)){
		echo 'password match with hashpassword<br>';
	}
	if(password_verify($password, $compare_hash)){
		echo 'password match with compare hash<br>';
	}
	
?>