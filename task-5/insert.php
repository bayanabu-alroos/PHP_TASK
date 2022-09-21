<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeess";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO employees (First_Name, Last_Name, Salary,Major,Degree,Phone,Address,id_department ,id_Job )
  VALUES ('Bayan', 'Abu_alroos', '900', 'Economic','Bachelors',079642516,'Amman',2,3 )";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

