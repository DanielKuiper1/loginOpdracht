<?php
require_once "function.php";

if(isset($_POST)) {
    $data = $_POST;
    checkdb($data);
}

function checkdb($data) {
    $conn = ConnectDb();

    $Username = $data['user'];
    $Password = $data['pass'];

    $sql = "SELECT * FROM `account` WHERE Username = '$Username'";
    $query = $conn->prepare($sql);
    $query->execute();

    $result = $query->fetch();
    Checkaccount($result, $Password);
}

function Checkaccount($result, $Password) {
    if ($result == False) {
        echo "Username of Password is niet correct<a href='login.php'>Click hier</a>";
    }
    else {
        CheckPassword($result, $Password);
    }
}

function CheckPassword($result, $Password) {
    if ($result['Password'] == $Password) {
        $_SESSION['account'] = True;
        $_SESSION['Username'] = $result['Username'];
        $_SESSION['Password'] = $Password;
        header('Location: index.php');
    }
    else {
        echo "Username of Password is niet correct<a href='login.php'>Click hier</a>";
    }
}


?>