<?php
require_once "function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login and registration</h1>
    <h2>login here</h2>
    <form method='POST' action='logincheck.php'>
    <label for='user'>Username</label>
    <input type='text' name='user' required>
    <br>

    <label for='pass'>Password</label>
    <input type='Password' name='pass' required>
    <br>

    <input type='submit' name='submit_btn' value='Login'>
</form>

<a href="Registration.php">Registration</a>
</body>
</html>