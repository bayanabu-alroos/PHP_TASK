"<?php

// write a php script to convert the entered string to uppercase
echo strtoupper("hello world!");
echo '<br>';

// write a php script to convert the entered string to lowercase
echo strtolower("HELLO BAYAN.");
echo '<br>';

//write a php script to make the first letter of the string uppercase
echo ucwords("i like this.");
echo '<br>';

//write a php script to make the first letter of each word capitalized
echo ucfirst("i love money .");
echo '<br>';

/*
Write a PHP script to check whether the sentence contains a specific word . 
Sample Output : ' I am a full stack developer at orange coding academy ' 
Sample Word : ' Orange ' 
Expected Output : ' Word Found ! '
*/
$word = "orange";
$mystring = "I am a full stack developer at orange coding academy";
 
// Test if string contains the word 
if(strpos($mystring, $word) !== false){
    echo "Word Found!";
} else{
    echo "Word Not Found!";
}


/*
Write a PHP script to extract the file name from the URL . 
Sample Output : ' www.orange.com/index.php ' 
Expected Output : ' index.php '
*/

$url = 'http:// www.orange.com/index.phps';
// parsed path
$path = parse_url($url, PHP_URL_PATH);
// extracted basename
echo '<br>';
echo basename($path);
echo '<br>';

/*
5. Write a PHP script to extract the username from the following email address .
 Sample Output : ' info@orange.com ' 
 Expected Output : ' info '
*/


  // Define Email Address
  $email  = 'info@orange.com';
  // Get the username by slicing string
  $username = strstr($email, '@', true);
  // Display the username
  echo $username."\n";
  echo '<br>';

/*
6. Write a PHP script to get the last three characters from the string .
 Sample Output : ' info@orange.com ' 
 Expected Output : ' com '

 */

$str1 = 'info@orange.com';
echo substr($str1, -3)."\n";

/*
7. Write a PHP script to generate simple random passwords [ do not use rand function ] from given string
 Sample Output : ' 1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz ' 
 Expected Output : 254ABCc or h242sfeDAFEe32 - > random number
*/

echo '<br>';
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}  
echo '<br>';
echo password_generate(7)."\n";


  echo '<br>';


  /*solution 2*/
  $n=15;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}
echo getName($n);

/*
8. Write a PHP script to replace the first word of the sentence with another word . Sample Output : ' That new trainee is so genius . '
 Sample Word : ' Our ' 
 Expected Result : the new trainee is so genius .
*/
echo '<br>';
$str = 'Our';
echo preg_replace('/Our/', 'the new trainee is so genius .', $str, 1)."\n"; 

/*
9. Write a PHP script to find the first character that is different between two strings . 
String1 ' dragonball ' 
String2 : ' dragonboll ' 
Expected Result : First difference between two strings at position 7 : " a " vs " o "
*/

$string1 = 'dragonball';
$string2 = 'dragonboll';
$pos = strspn($string1 ^ $string2, "\0");

printf(
    'First difference at position %d: "%s" vs "%s"',
    $pos, $string1[$pos], $string2[$pos]
);
printf("\n");

/*
10. Write a PHP script to put a string in an array , use the ( var_dump ) to view the array . 
Sample Output : " Twinkle , twinkle , little star . " 
Expected Result : array ( 4 ) { [ 0 ] = > string ( 30 ) " Twinkle , 
    " [ 1 ] = > string ( 26 ) " twinkle ,
     " [ 2 ] = > string ( 27 ) twinkle " [ 3 ] = > string ( 26 ) " little star . " }


*/

/*
echo '<br>';

    // define a string
    $myarray = array("Apples", "Oranges", "Pears");
    $size = count($myarray);
    $output = print_r($myarray, true);
    print $output;

    */

/*
    11. Write a PHP script to print the next letter of the inputted letter . 
    Sample Character : ' a ' 
    Expected Output : ' b ' 
    Sample Character : ' z ' 
    Expected Output : ' a '

*/
echo '<br>';
$cha = 'a';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";


/*12. Write a PHP script to insert a string at the specified position in a given string . 
Original String : ' The brown fox '
Insert ' quick ' between ' The ' and ' brown ' . 
Expected Output : ' The quick brown fox ' 
18. Write a PHP script to get the first word of a sentence . 
Original String : ' The quick brown fox ' 
Expected Output : ' The ' 
*/
echo '<br>';
$original_string = ' The brown fox '  ;
$string_to_insert =' quick ';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";

echo '<br>';
$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0]."\n";
echo '<br>';


/*
13. Write a PHP script to remove zeroes from the given number . 
Original String : ' 0000657022.24 ' 
Expected Output : ' 65722.24 '
*/

$x = '0000657022.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
echo '<br>';

/*
14. Write a PHP script to remove part of a string . 
Original String : ' The quick brown fox jumps over the lazy dog ' 
Remove ' fox ' from the above string . 
Expected Output : ' The quick brown jumps over the lazy dog '
*/

$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";

/*
15. Write a PHP script to remove trailing dashes from a string . 
Original String : ' The quick brown fox jumps over the lazy dog --- ' 
Expected Output : ' The quick brown fox jumps over the lazy dog '
*/

echo '<br>';
$my_str = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($my_str, '-')."\n";

/*
16. Write a PHP script to remove Special characters from the following string . 
Sample Output : " \ " \ 1 + 2 / 3 * 2 : 2-3 / 4 * 3 ' 
Expected Output : ' 1 2 3 2 2 3 43 '
*/
echo '<br>';
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";


/*
17. Write a PHP script to select first 5 words from the following string. 
Sample String : 'The quick brown fox jumps over the lazy dog'
Expected Output : 'The quick brown fox jumps'
*/
echo '<br>';
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";


/*
18. Write a PHP script to remove comma(s) from the following numeric string.
Sample String : '2,543.12'
Expected Output : 2543.12
*/
echo '<br>';
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }

  /*
 19. Write a PHP script to print letters from 'a' to 'z'. 
Expected Result : abcdefghijklmnopqrstuvwxyz
  */

  echo '<br>';
  foreach (range('a', 'z') as $alphabet) {
    echo $alphabet." ";
}

echo '<br>';
foreach (range('A', 'Z') as $alphabet) {
  echo $alphabet." ";
}