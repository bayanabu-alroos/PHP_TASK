<?php
//Functions

/*1. Write a PHP script to check if the inserted number is a prime number 
Sample Input : 3
 Expected Output : 3 is a prime number  
 */

echo '<br>';
echo "Qustion 1";
echo '<br>';
function primeNumber($n){
    if ($n == 1)
    return 0;
    for ($i = 2; $i <= $n/2; $i++){
        if ($n % $i == 0)
            return 0;
    }
    return 1;
}

$n = 3;
$n = 25;
$flag = primeNumber($n);
if ($flag == 1)
    echo $n," is a prime number ";
else
    echo $n," is not a prime number ";

echo '<br>';
echo '<br>';



/*
2. Write a PHP script to reverse a string. 
Sample Input : remove 
Expected Output evomer

*/

echo '<br>';
echo "Qustion 2";
echo '<br>';

function reverse($str){
    return strrev($str);
}

echo reverse("remove");

echo '<br>';
echo '<br>';

/*
3. Write a PHP script to check if the all string characters are lower cases 
 Sample Input : remove 
 Expected Output : Your String is Ok 
*/

echo '<br>';
echo "Qustion 3";
echo '<br>';


function string_lower($str1)
   {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') &&
          ord($str1[$sc]) <= ord('Z')) {
            return "Your String is not Ok" ;
         }
         }
         return "Your String is Ok" ;
    }
    var_dump (string_lower("remove"));
    echo '<br>';
    var_dump (string_lower("Hello"));
    

    echo '<br>';
    echo '<br>';

/*
4. Write a PHP function to swap to variables ? 
Sample Input : x = 12 y = 10 
Expected Output : y = 12 x = 10
*/
echo '<br>';
echo "Qustion 4";
echo '<br>';
echo '<br>';
function swap(){
    $x = 12;
    $y = 10;
    $temp = $x;
    $x = $y; 
    $y = $temp; 
    echo "x =".$x."  y=".$y;
}
swap();


echo '<br>';
echo '<br>';

/*
 6. Write a PHP function to check if a number is an Armstrong number or na 
 " Armstrong number is a number that is equal to the sum of cubes of its digits 
 
 Sample Input : 407 Expected 
 Output : 407 is Armstrong Number

*/

echo '<br>';
echo "Qustion 6";
echo '<br>';
echo '<br>';

function armstrongCheck($number){
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    }
    if ($number == $sum)
        return 1;
 
    return 0;   
}
$number = 407;
 armstrongCheck($number);
if ($flag == 1){
    echo  $number," is Armstrong Number";
}   
else{
    echo  " is not Armstrong Number";
}
    


echo '<br>';
echo '<br>';
/* 
7. Write a PHP function that checks whether a passed string is a palindrom 
Sample Input . Eva , can I see bees in a cave ? 
Expected Output : Yes it is a palindrome 

*/


echo '<br>';
echo "Qustion 7";
echo '<br>';
echo '<br>';

function check_palindrome($string) 
{
    
  if ($string == strrev($string)){
    return "Yes it is a palindrome";
  } 
  else{
    return " No it is not a palindrome " ;
  }
	  
}
echo check_palindrome('Eva , can I see bees in a cave ?')."\n";

echo '<br>';
echo '<br>';
/*
8. Write a PHP function to remove duplicates from an array
$ array1 = array ( 2 , 4 , 7 , 4 , 8 , 4 ) ; 
Expected Output : $ array1 = array ( 2 , 4 , 7 , 8 ) ;
*/
echo '<br>';
echo '<br>';
echo "Qustion 8";
echo '<br>';
echo '<br>';

function romove_duplicat(){
    $array1 = [2 , 4 , 7 , 4 , 8 , 4 ] ;
    print_r (array_unique($array1));
}
romove_duplicat();
echo '<br>';
echo '<br>';

// Logical Statements and Operators

/*
1. Write a PHP script to see if the specified year is a leap year or not 
Sample Input : 2013 
Sample Output This year is not a leap year 
*/

echo '<br>';
echo '<br>';
echo "Logical Statements and Operators";
echo '<br>';
echo "Qustion 1 ";
echo '<br>';
echo '<br>';

function leap_year(){
    $year = 2013 ;
    if ((0 == $year % 4) & (0 != $year % 100) |(0 == $year % 400) ){
        echo "$year is a Leap Year.";
    }
    else{
        echo "$year is not a Leap Year.";  
    }
}
leap_year();

echo '<br>';
echo '<br>';

/*
2. Write a PHP script to check the season depending on the inserted temperature
if the temperature is below 20 , we are in winter otherwise the season summer .
 Sample Input : 27 
 Sample Output : it is summertime ! "
*/

echo '<br>';
echo '<br>';
echo "Qustion 2";
echo '<br>';
echo '<br>';

function season($temperatureb){
    
    if ($temperatureb < 20 ){
        echo "it is winter time  ! ";
    }
    else{
        echo "it is summertime ! ";
    }
}
season(27);

echo '<br>';
season("18");

echo '<br>';
echo '<br>';
echo '<br>';

/*
3. Write a PHP script to calculate the sum of the two integers .
 If the two values are the same , then calculate the triple of their sum .
Sample Input : [ firstinteger = > 2 , secondinteger - > 21 
Sample Output : ( 2 + 2 ) * 3 = 12 

*/

echo '<br>';
echo '<br>';
echo "Qustion 3";
echo '<br>';
echo '<br>';




function test($first, $second) 
{
    return $first == $second ? ($first+ $second)*3 : $first + $second;
}
echo test(2, 2); 
echo '<br>';
echo test(3, 2);


echo '<br>';
echo '<br>';

/*
4. Write PHP to check if the sum of the two given numbers equals 30 , 
if the condition is true the return their sum otherwise return false 
Sample Input I firstinteger 10 , secondinteger 10 
Sample Output : " false "
*/

echo '<br>';
echo '<br>';
echo "Qustion 4";
echo '<br>';
echo '<br>';

function sum($num1 , $num2){
    return ($num1 + $num2 == 30);
}
var_dump(sum (10,10));
echo '<br>';
var_dump(sum (20,10));

echo '<br>';
echo '<br>';

/*
 5. Write in PHP script to check if the given positive number is a
  multiple of 3
  Sample Input : number = 20 
  Sample Output : " false "
  */

echo '<br>';
echo '<br>';
echo "Qustion 5";
echo '<br>';
echo '<br>';

function multi($num){
    return $num % 3 == 0;
}

var_dump(multi (20));
echo '<br>';
var_dump(multi (18));


echo '<br>';
echo '<br>';

/* 
6. Write a PHP script to check if the integer value is in the range of 
[ 20-50 ] inclusive . 
Sample Input : number = 50 
Sample Output : ' true ' 

*/

echo '<br>';
echo '<br>';
echo "Qustion 6";
echo '<br>';
echo '<br>';
 
function between($z){
    return ($z >= 20 and $z <= 50) ;
}
var_dump(between(30));
echo '<br>';
var_dump(between(50));
echo '<br>';
var_dump(between(10));
echo '<br>';

echo '<br>';
echo '<br>';

/*
7. Write PHP script to find the largest number between the three integers 
Sample Input : [ 1,5,9] 
Sample Output : 9 
*/

echo '<br>';
echo '<br>';
echo "Qustion 7";
echo '<br>';


function largest ($n1 ,$n2 , $n3){
    $max = $n1 ;
    if ($n1 >= $n2 and $n1 >= $n3){
        $max =$n1;
    }
    if ($n2 >= $n1 and $n2 >= $n3){
        $max = $n2;
    }
    if ($n3 >= $n1 and $n3 >= $n2){
        $max = $n3;
    }
    echo "$max";
}
largest (1,5,9);
echo '<br>';
largest (20, 50, 25);
echo '<br>';
echo '<br>';


/*
 8. Write PHP script to calculate the monthly electricity bill according
  to these rules 
  a . For first 50 units - 2.50 JOD / Unit 
  b . For next 100 units - 5.00 JOD / Unit 
  c . For next 100 units - 6.20 JOD / Unit 
  d . For units above 250 units-7.50 JOD / Unit 
*/

echo '<br>';
echo '<br>';
echo "Qustion 8";
echo '<br>';

function electricity ($unit){
    $first_50_units  = 2.5;
    $next_100_units  = 5;
    $second_100_units  = 6.2;
    $above_250_units = 7.5;

    if ($unit <= 50 ){
        $bill = $unit * $first_50_units;
    }
    else if ( $unit > 50 and $unit <=100){
        $temp = 50 * $first_50_units;
        $remaining_unit = $unit - 50;
        $bill = $temp + ($remaining_unit*$next_100_units);
    }
    else if ( $unit > 100 and $unit <=200){
        $temp = (50 * $first_50_units) + (100 *$next_100_units);
        $remaining_unit = $unit - 150;
        $bill = $temp + ($remaining_unit*$second_100_units);
    }
    else{
        $temp = (50 * $first_50_units) + (100 *$next_100_units) +(100 *$second_100_units);
        $remaining_unit = $unit - 250;
        $bill = $temp + ($remaining_unit*$above_250_units);
    }
    echo "$bill JOD";
}
electricity (40);
echo '<br>';
electricity (150);
echo '<br>';
echo '<br>';


/*
10. Write php script to check if a person is eligible to vote ,
 minimum age required for voting is 18 
 Sample Input : 15 
 Sample Output : ' is no eligible to vote "
*/

echo '<br>';
echo '<br>';
echo "Qustion 10";
echo '<br>';
function check_vote() 
{
    $age = 19;
    if ($age >= 18) {
        echo "is eligible to vote";
    } else {
        echo  "  is no eligible to vote  ";
    }
}
check_vote(); 

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

/*
11. Write php script to check whether a number is positive ,
 negative or zero 
 Sample input: - 60 
 Sample Output : " Negative
*/

echo '<br>';
echo '<br>';
echo "Qustion 11";
echo '<br>';
echo '<br>';
function checkNumber ($t){
    if ($t > 0){
        $mess ="positive ";
    }
    if ($t == 0){
        $mess ="zero";
    }
    if ($t < 0){
        $mess ="negative ";
    }
    echo $mess;
}
checkNumber (5);
echo '<br>';
checkNumber (-10);
echo '<br>';
checkNumber (0);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


/*
12. Write a PHP to find the grade for the student , 
after calculating the average of his score in all subject
Sample inputs : [60,86,95,63,55,74,79,62,50 ]
Sample Output: D
*/
echo '<br>';
echo '<br>';
echo "Qustion 12";
echo '<br>';
echo '<br>';

function sumArray() {
    $myArray=[60,86,95,63,55,74,79,62,50 ];
    $average = array_sum($myArray)/count($myArray);

    if ($average >= 90){
        $grade = "A";
    }
    else if ($average >= 80 && $average < 90){
        $grade = "B";
    }
    else if ($average >= 70 && $average < 80){
        $grade = "C";
    }

    else if ($average >= 60 && $average < 70){
        $grade = "D";
    }
    else{
        $grade = "F";
    }
    


echo "The Grade         = '" . $grade . "'\n";



}
sumArray();



echo '<br>';
echo '<br>';

?>


<!-- 
<!DOCTYPE html>

<head>
	<title>Simple Calculator Program in PHP - Tutorials Class</title>
</head>

<?php

/*
9.Write php script to make a calculator , the calculator should contain
 the four main operation
 e. Addition 
 f. Subtraction 
 g . Multiplication 
 h . Division
*/
/*
echo '<br>';
echo '<br>';
echo "Qustion 9";
echo '<br>';

$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}

?>

<body>
    <div id="page-wrap">

	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
    </div>
</body>
</html>

 -->
