<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Wooden Nickel Login</title>

	<style type="text/css">


    #container {
        font-size: larger;
        width:50%;
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to the Wooden Nickel Login Page!  Whoop Whoop!</h1>


    <?php
    echo form_open('main/login_validation');

    echo validation_errors();

    echo "<p>Email: ";
    echo form_input('email');
    echo"</p>";

    echo "<p>Password: ";
    echo form_password('password');
    echo"</p>";

    echo "<p>";
    echo form_submit('login_submit', 'Login');
    echo"</p>";

    echo form_close();
    ?>





</div>

</body>
</html>