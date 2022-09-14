<?php
/* 1.
$color = array('white', 'green', 'red', 'blue', 'black');
Write a script which will display the following string
"The memory of that scene for me is like a frame of film forever 
frozen at that moment: the red carpet, the green lawn, the white house,
 the leaden sky. The new president and his first lady. - Richard M. Nixon"
and the words 'red', 'green' and 'white' will come from $color.
*/

echo "Array";
echo '<br>';
echo "Qustion 1";
echo '<br>';
echo '<br>';
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at 
that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house,
 the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
 echo '<br>';
 echo '<br>';

echo "-------------------------------------------------";


/*
2.	$colors = array('white', 'green', 'red') 
Write a PHP script that will display the colors as unordered list :
Expected Output:  
•	green
•	red
•	white

*/

echo '<br>';
echo '<br>';
echo "Qustion 2";
echo '<br>';
echo '<br>';
$colors = array('white', 'green', 'red');  
	 
	sort($colors);  
	echo "<ul>";  
	foreach ($colors as $a)  
	{  
		echo "<li>$a</li>";  
	}  
	echo "</ul>";  


echo "-------------------------------------------------";


/*
3.	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", 
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
"Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
Expected Output:
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin 

*/

echo '<br>';
echo '<br>';
echo "Qustion 3";
echo '<br>';
echo '<br>';

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", 
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
"Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
asort($cities);
foreach ( $cities as $country => $capital ){
    echo" The capital of $country is $capital <br>";
}
echo '<br>';
echo '<br>';

echo "-------------------------------------------------";


/*
4.	$color = array (4 => 'white', 6 => 'green', 11=> 'red');

Write a PHP script to display the first element of the above array. 
Expected Output:  white

*/
echo '<br>';
echo '<br>';
echo "Qustion 4";
echo '<br>';
echo '<br>';

$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];
echo '<br>';
echo '<br>';
echo "-------------------------------------------------";


/*
5.	Write a PHP script that inserts a specific new item in an array in any position.
 
Sample Input:

Array 1 2 3 4 5   
Location: 4
New Item: $

Expected Output: 1 2 3 $ 4 5

*/
echo '<br>';
echo '<br>';
echo "Qustion 5";
echo '<br>';
echo '<br>';

$x = array('1 ',' 2 ',' 3 ',' 4 ',' 5'); 

$y = '$';
array_splice($x, 3,0,$y);
foreach($x as $z){
    echo "$z";
}



echo '<br>';
echo '<br>';
echo "-------------------------------------------------";

/*
6.	Write a PHP script to sort the following associative 
array depending on the key value [asc] : 

Sample Input: $fruits = array("d" => "lemon", "a" => "orange",
 "b" => "banana", "c" => "apple");
Expected Output:
c = apple
b = banana
d = lemon
a = orange

*/

echo '<br>';
echo '<br>';
echo "Qustion 6";
echo '<br>';
echo '<br>';

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $value) {
    echo "$key = $value <br>";
}


echo '<br>';
echo '<br>';
echo "-------------------------------------------------";


/*
7.	Write a PHP script to calculate and display the average temperature
 for the recorded reads, also the script should display the list of the five lowest 
 and the five highest temperatures 

Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

Expected Output:
Average Temperature is: 70.6 
List of seven lowest temperatures: 60, 62, 63, 63, 64, 
List of seven highest temperatures: 76, 78, 79, 81, 85,

*/


echo '<br>';
echo '<br>';
echo "Qustion 7";
echo '<br>';
echo '<br>';

$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp.""; 
 echo '<br>';
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo '<br>';
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}




echo '<br>';
echo '<br>';
echo "-------------------------------------------------";

/*
8.	Write a PHP program to merge the following two arrays. 

Sample Input: 

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

Expected Output:

Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
)

*/

echo '<br>';
echo '<br>';
echo "Qustion 8";
echo '<br>';
echo '<br>';

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1,$array2 );
print_r($result); 


echo '<br>';
echo '<br>';
echo "-------------------------------------------------";


/*
9.	Write a PHP function to change the following array's and convert
all the strings to upper case. 
Sample Input:
$colors = array("red","blue", "white","yellow");
Expected Output :
Array
(
    RED
    BLUE
    WHITE
    YELLOW

)

*/

echo '<br>';
echo '<br>';
echo "Qustion 9";
echo '<br>';
echo '<br>';

function array_change_value_case($input, $ucase)
{
$case = $ucase;
$narray = array();
if (!is_array($input))
{
return $narray;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$narray[$key] = array_change_value_case($value, $case);
 continue;
}
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $narray;
}
$Color = array("red","blue", "white","yellow");
$myColor = array_change_value_case($Color,CASE_UPPER);
print_r($myColor);


echo '<br>';
echo '<br>';
echo "-------------------------------------------------";


/*
10.	Write a PHP function to change the following array's and convert all the strings
 to lower case. 

Sample Input:

$colors = array("RED","BLUE", "WHITE","YELLOW");

Expected Output :

Array
(
    red
    blue
    white
    yellow

)

*/
echo '<br>';
echo '<br>';
echo "Qustion 10";
echo '<br>';
echo '<br>';

function array_change($input, $ucase)
{
$case = $ucase;
$narray = array();
if (!is_array($input))
{
return $narray;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$narray[$key] = array_change($value, $case);
 continue;
}
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $narray;
}
$Color = array("RED","BLUE", "WHITE","YELLOW");
$myColor = array_change($Color,CASE_LOWER);
print_r($myColor);



echo '<br>';
echo '<br>';
echo "-------------------------------------------------";


/*
11.	 Write a PHP script which displays all the numbers between 200 and 250
 that are divisible by 4. 

Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248

*/


echo '<br>';
echo '<br>';
echo "Qustion 11";
echo '<br>';
echo '<br>';


echo implode(",",range(200,250,4))."\n";

echo '<br>';
echo '<br>';
echo "-------------------------------------------------";

/*
12.	Write a PHP script to get the shortest/longest string length from an array. 

Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer")

Expected Output : 

The shortest array length is 1. The longest array length is 4.


*/

echo '<br>';
echo '<br>';
echo "Qustion 12";
echo '<br>';
echo '<br>';
$words =  array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $words);
echo "The shortest array length is " .min($new_array).".
 The longest array length is" .max($new_array).'.';

echo '<br>';
echo '<br>';
echo "-------------------------------------------------";


/*
13.	Write a PHP script to generate unique random 10 numbers within a specific range. 

Sample Input: (11, 20)
Sample Output: 17 16 13 20 14 19 18 15 11 12
 
*/

echo '<br>';
echo '<br>';
echo "Qustion 13";
echo '<br>';
echo '<br>';

$num = range(11,20);
shuffle ($num);
for ($x =0 ; $x < 10 ; $x++){
    echo $num[$x].' ' ;
}

echo '<br>';
echo '<br>';
echo "-------------------------------------------------";

/*
14.	Write a PHP script that returns the lowest integer in the array  that is not 0. 

Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
Sample Output:  2

*/

echo '<br>';
echo '<br>';
echo "Qustion 14";
echo '<br>';
echo '<br>';

function min_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_not_zero(array(2, 0, 10, 12, 6))."\n");

echo '<br>';
echo '<br>';
echo "-------------------------------------------------";


/*
Loops

1.
Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line .
 There will be no dash ( - ) at the start and end position . 
 Expected Output : 1-2-3-4-5-6-7-8-9-10
*/

echo '<br>';
echo "Loops";
echo '<br>';
echo "Qustion 1";
echo '<br>';
echo '<br>';


for ($z = 1 ; $z <= 10 ; $z++){
    if ($z < 10){
        echo "$z-";
    }
    else{
        echo "$z"."\n";
    }
}

echo '<br>';
echo '<br>';
echo "-------------------------------------------------";





/*
2. Create a script using a for loop to add all the integers 
between 0 and 30 and display the total . 
Expected Output : total as a number
*/

echo '<br>';
echo '<br>';
echo "Qustion 2";
echo '<br>';
echo '<br>';

$sum = 0 ;
for ($a =1 ; $a <= 30 ; $a++){
    $sum +=$a;
}
echo " total as a  $sum";

echo '<br>';
echo '<br>';
echo "-------------------------------------------------";


/*
3. Create a script to generate the following pattern , using the nested for loop . 
Expected Output : 
A A A A A 
A A A B B 
A A C C C 
A D D D D 
E E E E E  
*/
echo '<br>';
echo '<br>';
echo "Qustion 3";
echo '<br>';
echo '<br>';

for ($x = 0; $x <= 5; $x++) {
    if ($x == 5) {
      break;
    }
    echo "A ";
  }
  echo "<br>";
  for ($x = 0; $x <= 3; $x++) {
    if ($x == 3) {
      break;
    }
    echo "A ";
  }
  for ($x = 0; $x <= 2; $x++) {
    if ($x == 2) {
      continue;
    }
    echo "B ";
  }
  echo "<br>";
  for ($x = 0; $x <= 2; $x++) {
    if ($x == 2) {
      break;
    }
    echo "A ";
  }
  for ($x = 0; $x <= 3; $x++) {
    if ($x == 3) {
      continue;
    }
    echo "C ";
  }
  echo "<br>";
  
  for ($x = 0; $x <= 1; $x++) {
    if ($x == 1) {
      break;
    }
    echo "A ";
  }
  for ($x = 0; $x <= 4; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "D ";
  }
  echo "<br> ";
  for ($x = 0; $x <= 5; $x++) {
    if ($x == 5) {
      break;
    }
    echo " E  ";
  }

echo '<br>';
echo '<br>';
echo "-------------------------------------------------";


/*
4. Create a script to generate the following pattern , using the nested for loop .
 Expected Output :
  1 1 1 1 1 
  1 1 1 2 2 
  1 1 3 3 3 
  1 4 4 4 4
  5 5 5 5 5
*/

echo '<br>';
echo '<br>';
echo "Qustion 4";
echo '<br>';
echo '<br>';

for ($x = 0; $x <= 5; $x++) {
    if ($x == 5) {
      break;
    }
    echo "1 ";
  }
  echo "<br>";
  for ($x = 0; $x <= 3; $x++) {
    if ($x == 3) {
      break;
    }
    echo "1 ";
  }
  for ($x = 0; $x <= 2; $x++) {
    if ($x == 2) {
      continue;
    }
    echo "2 ";
  }
  echo "<br>";
  for ($x = 0; $x <= 2; $x++) {
    if ($x == 2) {
      break;
    }
    echo "1 ";
  }
  for ($x = 0; $x <= 3; $x++) {
    if ($x == 3) {
      continue;
    }
    echo "3 ";
  }
  echo "<br>";
  
  for ($x = 0; $x <= 1; $x++) {
    if ($x == 1) {
      break;
    }
    echo "1 ";
  }
  for ($x = 0; $x <= 4; $x++) {
    if ($x == 4) {
      continue;
    }
    echo " 4";
  }
  echo "<br>";
  for ($x = 0; $x <= 5; $x++) {
    if ($x == 5) {
      break;
    }
    echo "5 ";
  }

echo '<br>';
echo '<br>';
echo "-------------------------------------------------";


/*
5. Create a script to generate the following pattern , using the nested for loop . 
Expected Output :
 1 0 0 0 0 
 0 2 0 0 0
 0 0 3 0 0 
 0 0 0 4 0 
 0 0 0 0 5
*/

echo '<br>';
echo '<br>';
echo "Qustion 5";
echo '<br>';
echo '<br>';

for ($x = 0; $x <= 1; $x++) {
    if ($x == 1) {
        break;
    }
    echo "1 ";
  }
for ($x = 0; $x <= 4; $x++) {
    if ($x == 4) {
        break;
    }
    echo "0 ";
  }

  echo "<br>";
  for ($x = 0; $x <= 1; $x++) {
    if ($x == 1) {
      break;
    }
    echo "0 ";
  }
  for ($x = 0; $x <= 1; $x++) {
    if ($x == 1) {
      break;
    }
    echo "2 ";
  }
  for ($x = 0; $x <= 3; $x++) {
    if ($x == 3) {
      continue;
    }
    echo "0 ";
  }
  echo "<br>";
  for ($x = 0; $x <= 2; $x++) {
    if ($x == 2) {
      break;
    }
    echo "0 ";
  }
  for ($x = 0; $x <= 1; $x++) {
    if ($x == 1) {
      break;
    }
    echo "3 ";
  }
  for ($x = 0; $x <= 2; $x++) {
    if ($x == 2) {
      continue;
    }
    echo "0 ";
  }
  echo "<br>";
  for ($x = 0; $x <= 3; $x++) {
    if ($x == 3) {
      break;
    }
    echo "0 ";
  }
  for ($x = 0; $x <= 1; $x++) {
    if ($x == 1) {
      break;
    }
    echo "4 ";
  }
  for ($x = 0; $x <= 1; $x++) {
    if ($x == 1) {
      continue;
    }
    echo "0 ";
  }
  echo '<br>';
  for ($x = 0; $x <= 4; $x++) {
    if ($x == 4) {
      break;
    }
    echo "0 ";
  }
  for ($x = 0; $x <= 1; $x++) {
    if ($x == 1) {
      break;
    }
    echo "5 ";
  }


 

echo '<br>';
echo '<br>';
echo "-------------------------------------------------";


/*
6. Write a program to calculate and print the factorial of a number using a for loop .
 The factorial of a number is the product of all integers up to and including that number
Sample Input : 5 
Expected Output : 120
*/

echo '<br>';
echo '<br>';
echo "Qustion 6";
echo '<br>';
echo '<br>';

$n = 5;
$z = 1 ;
for ($a=1 ;$a<=$n-1 ;$a++){
    $z*=($a+1);
}
echo $z;


echo '<br>';
echo '<br>';
echo "-------------------------------------------------";

/*
7. Write a program to calculate and print the Fibonacci sequence using a for loop .
Fibonacci is a series of numbers where a number is the sum of previous two numbers .
Starting with 0 and 1 , the sequence goes 0 , 1 , 1 , 2 , 3 , 5 , 8 , 13 , 21 , and so on . 
  Expected Output : 0 , 1 , 1 , 2 , 3 , 5 , 8 , 13 , 21 , ... 
*/

echo '<br>';
echo '<br>';
echo "Qustion 7";
echo '<br>';
echo '<br>';


$f1 = 0;
$f2 = 1;
$num = 10;
echo $f1 ,",",$f2 ,",";
for ($i = 0 ; $i <=$num ; $i++ ){
    $f3 =$f1 +$f2;
    $f1 =$f2;
    $f2 =$f3;
    echo $f3 , ",";
}
echo "....";

echo '<br>';
echo '<br>';
echo "-------------------------------------------------";

/*
 8. Write a program which will count the " c " characters in the text 
 " Orange Coding Academy " . 
 Sample Input : Orange Coding Academy 
 Expected Output : 2 
*/

echo '<br>';
echo '<br>';
echo "Qustion 8";
echo '<br>';
echo '<br>';

$paragraph="Orange coding Academy";
$search_char="c" ;
$count="0";
for($x="0"; $x< strlen($paragraph); $x++)
  { 
    if(substr($paragraph,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count;


echo '<br>';
echo '<br>';
echo "-------------------------------------------------";




/*
10. Write a PHP program that repeats integers from 1 to 50. For multiples of three , 
print " Fizz " instead of the number , and for multiples of five print " Buzz " . 
For numbers that are multiples of both three and five , print " FizzBuzz " . 
Expected Ou5tput : 1 2 Fizz 4 Buzz Fizz 7 8 Fizz ....... 
*/

echo '<br>';
echo '<br>';
echo "Qustion 10";
echo '<br>';
echo '<br>';

for ($t = 1 ; $t <= 50 ; $t++){
    if ($t % 3 == 0  & $t % 5 ==0){
        echo "  FizzBuzz  ";
    }
    else if ($t % 3 == 0  ){
        echo "  Fizz  ";
    }
    else if ( $t % 5 == 0){
        echo "  Buzz  ";
    }
    else{
        echo $t ,"  ";
    }

}

echo '<br>';
echo '<br>';
echo "-------------------------------------------------";



/*
11. Write a PHP program to generate and display the first n lines of a Floyd triangle 
According to Wikipedia Floyd's triangle is a right - angled triangular array of natural 
numbers , used in computer science education . It is named after Robert Floyd . 
It is defined by filling the rows of the triangle with consecutive numbers , 
starting with a 1 in the top left corner : 
Sample output :
 1 
 2 3  
 4 5 6
 7 8 9 10 
 11 12 13 14 15 
*/

echo '<br>';
echo '<br>';
echo "Qustion 11";
echo '<br>';
echo '<br>';

for ($x = 1; $x <= 1; $x++) {
    echo $x;
    echo '<br>';
  }
for ($x = 2; $x <= 3; $x++) {
    echo $x , " ";
  }
  echo '<br>';
for ($x = 4; $x <= 6; $x++) {
    echo $x , " ";
  }
  echo '<br>';
for ($x = 7; $x <= 10; $x++) {
      echo $x , " ";
    }
    echo '<br>';
    for ($x = 11; $x <= 15; $x++) {
          echo $x , " ";
        }
  

echo '<br>';
echo '<br>';
echo "-------------------------------------------------";


/*
12. Write a PHP program to print the following pattern .
 Expected Output :
    A   
   A B  
  A B C  
 A B C D 
A B C D E 
 A B C D
  A B C
   A B
    A
*/


echo '<br>';
echo '<br>';
echo "Qustion 12";
echo '<br>';
echo '<br>';

for ($x = 0; $x <= 5; $x++) {
    if ($x == 5) {
        break;
    }
    echo "&nbsp;";
  }
  echo " A";
  echo '<br>';
for ($x = 0; $x <= 4; $x++) {
    if ($x == 4) {
        break;
    }
    echo "&nbsp;";
  }
  echo "A ","B";
  echo '<br>';
for ($x = 0; $x <= 3; $x++) {
    if ($x == 3) {
        break;
    }
    echo "&nbsp;";
  }
  echo "A ","B " ,"C";
  echo '<br>';
for ($x = 0; $x <= 2; $x++) {
    if ($x == 2) {
        break;
    }
    echo "&nbsp;";
  }
  echo "A ","B " ,"C " ,"D";
  echo '<br>';

  echo "A ","B " ,"C " ,"D ","E";
  echo '<br>';
for ($x = 0; $x <= 2; $x++) {
    if ($x == 2) {
        break;
    }
    echo "&nbsp;";
  }
  echo "A ","B " ,"C " ,"D";
  echo '<br>';
for ($x = 0; $x <= 3; $x++) {
    if ($x == 3) {
        break;
    }
    echo "&nbsp;";
  }
  echo "A ","B " ,"C";
  echo '<br>';

for ($x = 0; $x <= 4; $x++) {
    if ($x == 4) {
        break;
    }
    echo "&nbsp;";
  }
  echo "A ","B";
  echo '<br>';  

for ($x = 0; $x <= 5; $x++) {
    if ($x == 5) {
        break;
    }
    echo "&nbsp;";
  }
  echo " A";

  

  
echo '<br>';
echo '<br>';
echo "-------------------------------------------------";
echo '<br>';

$n = 65; /*Initializing ASCII value of (A) */
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo chr($n)." ";
    }
    $n = $n + 1;
    echo "<br/>";
}

/*
9. Write a PHP script that creates the following table using for loops .
 Add cellpadding = " 3px " and cell spacing = " 0px " to the table tag . 
 1 * 1 = 1   2 * 1 = 2   3 * 1 = 3   4 * 1 = 4   5 * 1 = 5     
 1 * 2 = 2   2 * 2 = 4   3 * 2 = 6   4 * 2 = 8   5 * 2 = 10     
 1 * 3 = 3   2 * 3 = 6   3 * 3 = 9   4 * 3 = 12  5 * 3 = 15   
 1 * 4 = 4   2 * 4 = 8   3 * 4 = 12  4 * 4 = 16  5 * 4 = 20   
 1 * 5 = 5   2 * 5 = 10  3 * 5 = 15  4 * 5 = 20  5 * 5 = 25   
 6 * 1 = 6   6 * 2 = 12  6 * 3 = 18  6 * 4 = 24  6 * 5 = 30
*/


echo '<br>';
echo '<br>';
echo "Qustion 9";

echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($j=1 ; $j <= 6 ; $j++){
    echo "<tr>";
    for ($i =1 ; $i<=5 ; $i++){
        echo "<td> $j * $i  =  ".$i*$j."</td>";
    }
    
    echo "</tr>";

    echo '<br>';
    echo '<br>';
}
