<?php

include($_SERVER['DOCUMENT_ROOT']  . '/config/config_functions.php');

if(isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, password_hash($_POST['password']));

	if(emailIsValid($email)) {
		echo 'User is valid';
	} else {
		echo 'User is not valid';
	}
}