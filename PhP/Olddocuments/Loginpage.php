<?php
include_once '..\includes\db_connect.php';
include_once '..\includes\functions.php';
secure_session();
if(login_check($mysqli))
{
$logged = 'in'; 
}
else
{
$logged = 'out';
}
?> 

<HTML>
	<head>
	<link rel="stylesheet" type="text/css" href="css/LoginPage.css">
	</head>

<title> Log In </title>
<body>
<div id="logo">

<div>
<div id= "Logout">
<form action="/includes/process_login.php" >
<input type='submit' name='logout' value='logout'/>
</form>
</div>


<div id = "SideBar">

<div id= "Navigation">
	<a href="CryptographyContent.html" >Cryptography </a>
	<a href="SNS.html" > System and Network Security </a>
	<a href="RelandFault.html" > Reliability and Fault Tolerance</a>

</div>
</div>

<div id = "TopBar">

<div id = "Profile">
<a href ="ProfilePage.php">Profile </a> 
</div>

<div id = "Quiz" class="quiz">
<p><a href="MainContentPage.html">Quiz</a></p>
</div>

<div id = "Content">
<p><a href="MainContentPage.html">Content</a></p>
</div>

</div>
<div id = "MainPage">
 
<?php
 if (isset($_GET['error']))
 {
	echo 'error'; 
 }
?>
<div id= "login">
<form action="/includes/process_login.php" method = "post" name="login_form">
<div id="UName">
UserName:   <input type="text" name="UserName" id="username"/>
</div>
<div id ="Password">
<p>Password: <input type="password" name="Password" id="password"/></p>
</div>
<input type = "submit" value = "LogIn" onclick="formhash(this.form, this.form.password);"/>
</form>
</div>

</div>

<?php
if (login_check($mysqli)) 
{
      echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
} 
else 
{
echo '<p>Currently logged ' . $logged . '.</p>';
echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
}
?>
</body> 
<HTML>