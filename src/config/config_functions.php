<?php

function dbConnection() {

	$hostname = 'localhost';
	$username = 'root';
	$password = 'password';
	$database = 'action_list';
	
	$connection = mysqli_connect($hostname, $username, $password, $database);
	
	if($connection == false) {
		echo 'Ошибка подключения к БД';
		exit;
	}

	return $connection;
}

$connection = dbConnection();

function emailIsValid($email) {
	
	$query = "SELECT email FROM users WHERE email = '$email'";
	$result = mysqli_query($connection, $query);
	$num_rows = mysqli_num_rows($result);

	if($num_rows > 0) {
		return true;
	} else {
		return false;
	}
}