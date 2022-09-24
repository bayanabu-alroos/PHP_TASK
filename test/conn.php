//conn.php
<?php
$conn = new mysqli("localhost", "root", "", "students");
  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>