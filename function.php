<?php
//author: Daniel Kuiper
session_start();


function ConnectDb(){
    $servername = "localhost";
    $Username = "root";
    $Password = "";
    $dbname = "inlog";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $Username, $Password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conn;
     } 
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
     }
}


function checklogin() {
    if (isset($_SESSION['account'])) {
        indexloggedin();
    }
    else {
        echo "Je bent niet ingelogd. <br><br>";
        echo "<a href='login.php'>Login</a>";
    }
}

function logout_btn() {
    echo "<a href='logout.php'>Logout</a>";
}

function indexloggedin() {
    echo "Je bent ingelogd met de volgende gegevens:<br>";
    echo "Username: " . $_SESSION['Username'] . "<br>";
    echo "Password: " . $_SESSION['Password'] . "<br>";
    logout_btn();
}

?>