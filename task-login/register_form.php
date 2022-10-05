<?php

@include 'config.php';



    
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
   $famname =mysqli_real_escape_string($conn,$_POST['famname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone=$_POST['phone'];
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];
   $birthday=$_POST['birthday'];

   
  
   


   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user(firstname,familyname,phone,birthday,email,password,user_type) 
         VALUES('$fname','$famname','$phone','$birthday','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

}



function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
  }  


?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
         .error {color: red;}
      </style>
   </head>
<body style="background: rgb(244, 191, 191);">





<?php
// define variables and set to empty values
         $fnameErr = "";
         $mnameErr = "";
         $lnameErr = "";
         $famnameErr = "";
         $emailErr="";
         $phoneErr="";
         $passwordErr="";
         $fname = $mname = $lname = $famname  = " ";
         
 //Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
    //String Validation  
        if (empty($_POST["fname"])) {  
             $fnameErr = "please enter first name";  
        } else {  
            $fname = input_data($_POST["fname"]);  
                // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {  
                    $fnameErr = "Only alphabets and white space are allowed";  
                }  
        }  

            //String Validation  
            if (empty($_POST["email"])) {  
                $emailErr = "please enter email";  
           } else {  
               $email = input_data($_POST["email"]);  
                   // check if name only contains letters and whitespace  
                   if (!preg_match("/^[a-zA-Z ]*$/",$email)) {  
                    $emailErr = "Only alphabets and white space are allowed";  
                   }  
           }  
   

 

   if (empty($_POST["famname"])) {  
    $famnameErr = "please enter  family name ";  
} else {  
   $famname = input_data($_POST["famname"]);  
       // check if name only contains letters and whitespace  
       if (!preg_match("/^[a-zA-Z ]*$/",$famname)) {  
           $famnameErr = "Only alphabets and white space are allowed";  
       }  
}  

          
        //password Validation   
        if (empty($_POST["password"])) {  
                $passwordErr = "Password should be 8 digits ";  
        } else {  
                $password = input_data($_POST["password"]);  
                // check that the password is well-formed  
                if (!filter_var($password, FILTER_VALIDATE_EMAIL)) {  
                    $passwordlErr = "Invalid password format, should be less than 14 digit";  
                }  
         }  
        
        //Number Validation  
        if (empty($_POST["phone"])) {  
                $phoneErr = "Should be 14 digits ";  
        } else {  
                $phone = input_data($_POST["phone"]);  
                // check if mobile no is well-formed  
                if (!preg_match ("/^[0-9]*$/", $phone) ) {  
                $phoneErr = "Only numeric value is allowed.";  
                }  
            // //check mobile no length should not be less and greator than 10  
            // if (strlen ($phone) != 10) {  
            //     $phoneErr = "Should be 14 digits ";  
            //     }  
        }  }
?>



<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      
      <input type="text" name="fname" placeholder="enter your first name">

      <span style="float:left;" class="error"> <?php echo $fnameErr; ?> </span>  

      <input type="text" name="famname" placeholder="enter your family name">
      <span  style="float:left;"class = "error"><?php echo  $famnameErr;?></span>


      <input type="email" name="email"  placeholder="enter your email">
      <span class="error" style="float:left;"> <?php echo  $emailErr; ?> </span> 
      <input type="tel" id="phone" name="phone" placeholder="enter your phone" >
      <span style="float:left;" class="error"><?php echo $phoneErr; ?> </span> 

      <input type="password" name="password"  placeholder="enter your password">
      <span class="error" style="float:left;"> <?php echo $passwordErr; ?> </span> 
      <input type="password" name="cpassword"  placeholder="confirm your password">
      <span class="error" style="float:left;"> <?php echo $passwordErr; ?> </span> 
      <input type="date" id="birthday" name="birthday">
      
      <input type="submit" name="submit" value="Sign up" class="form-btn">
      <p>Already have an account? <a href="login_form.php">login</a></p>
   </form>

</div>



      
</body>
</html>