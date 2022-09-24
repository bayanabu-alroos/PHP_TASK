<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'user');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        $name =$_POST['name'];
        $faname =$_POST['fname'];
        $phone=$_POST['phone'];
        $birthday=$_POST['birthday'];
        $email = $_POST['email'];
        $pass =($_POST['password']);

        $query ="UPDATE user SET firstname ='$name',familyname='$faname', phone ='$phone', 
        birthday='$birthday',email='$email',password ='$pass' WHERE id='$id' ";

        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:admin_page.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>


