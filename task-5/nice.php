<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr>

<th>First Name</th>
<th>Last Name</th>
<th>Salary</th>
<th>Major</th>
<th>Degree</th>
<th>Phone</th> 
<th>Adress</th>
<th>Title job</th>
<th>Department</th>";

class TableRows extends RecursiveIteratorIterator {
  function construct($it) {
    parent::construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeess";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT  employees.First_Name,employees.Last_Name,employees.Salary,employees.Major,employees.Degree,employees.Phone,employees.Address,department.Name_Department, title_job.Name_Title_job  
  FROM ((employees
  INNER JOIN department ON employees.id_department = department.id)
  INNER JOIN title_job ON employees.id_Job = title_job.id);");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
