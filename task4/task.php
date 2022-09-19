<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.error {color: #FF0000;}
* {
  box-sizing: border-box;
}
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>  

<!-- PHP Advanced Tasks PHP Super Global Variables
 1. create a form and send email and password , in the action page 
 you will determine if the data is sent by get or post  -->

<h3> First Question</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  E-mail: <input  type="email" name="email" value="" id="email" data-ime-mode-disabled="" required>
  Passwod: <input   type="password" name="password" value="" id="password"  data-ime-mode-disabled=""required>

  <input type="submit"  class="btn btn-primary" value="Submit">


  <?php

echo "<h3>Your Input:</h3>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $email = htmlspecialchars($_REQUEST['email']);
    if (empty($email)) {
        echo "E-mail is empty";
    } else {
        echo $email;
    }
    echo"<br>";
    $password = htmlspecialchars($_REQUEST['password']);
    if (empty($password)) {
        echo "password is empty";
    } else {
        echo $password;
    }
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo"=============================================================";
?>
</form>




<!-- 3. make a Calculator that contain Basic Mathematical operations 
( + , - , * , / )  -->


<h3> Third Question "Calculator"</h3>

<form>
<input type="text" name="num1" placeholder="Number 1">

<select name="operator">
    <option>None</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
</select>
<input type="text" name="num2" placeholder="Number 2">
<br>
<button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>the answer is :</p>
<?php
if (isset($_GET['submit'])){
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch($operator ){
        case "None":
            echo "you  need to select a method !";
        break;
        case "Add":
            echo $result1 + $result2;
        break;
        case "Subtract":
            echo $result1 - $result2;
        break;
        case "Multiply":
            echo $result1 * $result2;
        break;
        case "Divide":
            echo $result1 / $result2;
        break;
    }

}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo"=============================================================";
?>





<!-- 5. determine the project name , and script name  -->

<h3> Five Question </h3>
<?php

$script = $_SERVER ["SCRIPT_NAME"];
$project =  Explode('/', $script);
$name = $project[count($project)-1];

echo "The Script Name is : " ,$script;
echo "<br>";
echo "The Project Name is : ", $name;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo"=============================================================";

?>


<!-- 6. Determine page requested time .  -->

<h3> Six Question </h3>

<?php


$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

echo "Page loaded in  $time seconds!\n";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo"=============================================================";
?>





<!--7 .  Number of visitors ?  -->
<h3> Seven Question </h3>
<?php
if (!isset($_COOKIE['count'])) { 
    echo "Welcome! This is the first time you have viewed this page."; 
    $cookie = 1;
    setcookie("count", $cookie);
  }
  else{
    $cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie); 
    echo "You have viewed this page ".$_COOKIE['count']." times."; 
    }

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo"=============================================================";
?>

<!-- 8. Creating Cookies include cookie_name , cookie_value , [ expiry_time ] 
, [ cookie_path ] , [ domain ] , [ secure ] , [ httponly ] . 
Then Retrieve all cookies value after that delete the cookies . 
make a password counter on refresh ? -->
<h3> Eight Question </h3>
<?php
$cookie_name = "user";
$cookie_value = "bayan";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}



echo '<br>';
echo '<br>';
echo '<br>';

setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/"); // 86400 = 1 day


echo "Cookie 'user' is deleted.";

?>


</body>
</html>