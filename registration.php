<?php
require_once("function.php");
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
<h1>registration</h1>
    <h2>Make an account here</h2>
    <form method="post" action='registrationcheck.php'>
        <label for="username">Username: </label>
        <input type="text" name="username" required>
        <br>

        <label for="password">Password: </label>
        <input type="password" name="password" required>
        <br>

        <input type="submit" name="registration_btn">
    </form>
</body>
</html>