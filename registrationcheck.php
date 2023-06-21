<?php
require_once "function.php";


if (isset($_POST)) {
    convertDataregistration();
}


function convertDataregistration() {
    $data = $_POST;
    sentdb($data);
}

function sentdb($data) {
    $conn = ConnectDb();

    $username = $data["username"];
    $password = $data["password"];

    $query = $conn->prepare("INSERT INTO `account` (`username`, `password`) VALUES ('$username', '$password')");
    $query->execute();

    printNewaccount($data);
}

function printNewaccount($data) {
    echo "je nieuwe account is aangemaakt";
}


?>