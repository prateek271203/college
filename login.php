<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lnmcbm";

$e_mail = $_POST['email'];
$pass = $_POST['pass'];
echo $e_mail . "<br>";
echo $pass . "<br>";

$conn = new mysqli($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully";
}


?>