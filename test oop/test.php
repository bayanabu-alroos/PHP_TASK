<?php
// PHP program to explain function
// overloading in PHP

// Creating a class of type shape
class shape {
	
	// __call is magic function which accepts
	// function name and arguments
	function __call($name_of_function, $arguments) {
			
		// It will match the function name
		if($name_of_function == 'area') {
			
			switch (count($arguments)) {
					
				// If there is only one argument
				// area of circle
				case 1:
					return 3.14 * $arguments[0];
						
				// IF two arguments then area is rectangle;
				case 2:
					return $arguments[0]*$arguments[1];
			}
		}
	}
}
	
// Declaring a shape type object
$s = new Shape;
	
// Function call
echo($s->area(2));
echo "<br>";
	
// calling area method for rectangle
echo ($s->area(4, 2));

echo "<br>";
echo "<br>";

echo"**************************";
?>




<?php
class GFG {
     
     
    public function __call($name, $arguments) {
         
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }
 
     
    public static function __callStatic($name, $arguments) {
         
        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n";
    }
}
 
// Create new object
$obj = new GFG;
 
$obj->runTest('in object context');
 
GFG::runTest('in static context');
 


echo "<br>";
echo "<br>";

echo"**************************";


?>


<?php
// // PHP program to implement
// // function overriding

// // This is parent class
// class P {
	
// 	// Function geeks of parent class
// 	function geeks() {
// 		echo "Parent";
// 	}
// }
// echo "<br>";


// // This is child class
// class C extends P {
	
// 	// Overriding geeks method
// 	function geeks() {
//         echo "<br>";
//     echo "<br>";
// 		echo "Child";
// 	}
// }

// // Reference type of parent
// $p = new P;

// // Reference type of child
// $c= new C;

// // print Parent
// $p->geeks();

// // Print child
// $c->geeks();
?>




//////////////////////////////////

