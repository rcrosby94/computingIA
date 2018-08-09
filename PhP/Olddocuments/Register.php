<!--
Author: Ryan Crosby 
Project: Diverse Computing 
-->
<!DOCTYPE HTML>
<head>
<link rel="stylesheet" type="text/css" href="css/dissertation.css">
<title> REgister </title>
<meta charset="UTF-8">
</head>

<body>
<div id="logo">
</div>

<div>
<div id="LogOut">
<form action="/includes/process_login.php" >
<input type='submit' name='logout' value='logout'/>
</div>
</form>
<div id = "SideBar">
<ul id= "Navigation">
    <li id="CT"> <a href="CryptographyContent.html" >Cryptography</a></li>
	<li id="SNS"> <a href="SNS.html" > System and Network Security </a></li>
	<li id="RF"> <a href="RelandFault.html" > Reliability and Fault Tolerance</a> </li>
</ul>
</div>
<div id = "TopBar">
<div id = "Profile">
<a href ="ProfilePage.php">Profile </a> 
</div>

<div id = "Quiz" class="quiz">
<p><a href="BlankQuiz.php">Quiz</a></p>
</div>

<div id = "Content">
<p><a href="MainContent.html">Content</a></p>
</div>
</div>


<div id = "MainPage">
  <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
		<!-- Original Source: http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL --> 
        <h1>Register with us</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one uppercase letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
		 
        <form action= "/includes/register.inc.php" method="post" name="registration_form">
            Username: <input type='text' name='username' id='username' /><br>
            Email: <input type="text" name="email" id="email" /><br>
            Password: <input type="password" name="password" id="password"/><br>
            Confirm password: <input type="password" name="confirmpwd" id="confirmpwd" /><br>
            <input type="submit" value="Register" onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd/> 
        </form>
		<!-- Source end -->
        <p>Do you already have an account? Go to the <a href="Loginpage.php">login page</a>.</p>
</form>
</div>
</body> 
</HTML>