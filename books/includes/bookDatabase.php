<?php
$servername = "127.0.0.1";
$username = "mysql_user";
$password = "mysql_user";
$dbname = "bookstore";

$bookconn = mysqli_connect($servername, $username, $password, $dbname );
// Check connection
if (!$bookconn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
