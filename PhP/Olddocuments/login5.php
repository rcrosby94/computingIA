<?php
include 'connect.php';
include 'functions.php';
echo("I am here");
	
	//This is the part of the code that causes a login.
	
	if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password is invalid";
	echo $error;
	}
	else 
	{
	$username =$_POST['username']; 
	$password = $_POST['password']; 
	
	/* Attempt to connect to MySQL database */
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
	// Check connection
	if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	//These statements protect from mysql Injection 
	//Removes speechmarks 
	$username = stripslashes['username']; 
	$password = stripslashes['password'];
	//Removes special characters 
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	$db = mysql_select_db("ComputingIA", $connection);
	
	
	// SQL query to fetch information of registerd users and finds user match.
	$query = mysql_query("select * from users where password='$password' AND username='$username'", $connection);
	$rows = mysql_num_rows($query);

		if ($rows == 1) {
	$_SESSION['login_user']=$username;header("location: content.html"); // Initializing Session
	 // Redirecting To Other Page
	} else {
	$error = "Username or Password is invalid";
	}
	
	mysql_close($connection); // Closing Connection
	}
	

	
	
?>