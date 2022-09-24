<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "user";

// Create connection
try {
    $conn = mysqli_connect($servername, $username, $password,$database);
    // echo "<h4 ><br>Connection succsess to ( $database ) database<h4><br><br>";

} catch (\Throwable $th) {

    die ("<h4><br>Connection failed to ($database) database</h5><br>");
}
?>
