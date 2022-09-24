//edit.php
<?php
    include('conn.php');
    if(isset($_POST['efirstname'])){
        $firstname=$_POST['efirstname'];
        $lastname=$_POST['elastname'];
        $address=$_POST['eaddress'];
        $id=$_POST['id'];
 
        $conn->query("update members set firstname='$firstname', lastname='$lastname', address='$address' where id='$id'");
 
        $response[] = array("firstname"=>$firstname,"lastname" => $lastname,"address" => $address,"member_id" => $id);
        echo json_encode($response);
    }
?>