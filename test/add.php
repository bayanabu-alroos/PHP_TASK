//add.php
<?php
    include('conn.php');
    if(isset($_POST['firstname'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $address=$_POST['address'];
 
        $conn->query("insert into members (firstname, lastname, address) values ('$firstname', '$lastname', '$address')");
    }
?>