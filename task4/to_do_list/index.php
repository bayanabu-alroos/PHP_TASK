<?php


$errors = "";

//connect to the database 


$db = mysqli_connect('localhost' ,'root','','todo');

if (isset($_POST['submit'])){

    $task = $_POST['task'];

    if (empty($task)){
        $errors = "You must fill in the task";
    }
    else{
        mysqli_query($db,"INSERT INTO tasks (task) VALUES ('$task')");
        header ('location: index.php');
    }

    
}

///delete task

if (isset($_GET['del_task'])){
    $id = $_GET['del_task'];
    mysqli_query($db,"DELETE FROM tasks WHERE id = $id ");
    header ('location: index.php');
}

$tasks = mysqli_query($db, "SELECT * FROM tasks");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do list appliccation with php and mysql</title>
    <style>


body{
    font-size:20px;
}

.heading {
    width :80%;
    margin:40px auto;
    border :2px solid green;
    text-align:center;
}
form{
    width: 50%;
    margin : 30px auto ;
    border-radius:5px;
    padding: 10px;
    background: burlywood ;
    border : 1px solid #6B8E23;
}
p{
    color:red;
    margin:0px;
}
.task_input{
    width: 75%;
    height: 15px;
    padding:10px;
    border :  1px solid #6B8E23;
}
.task_btn{
    height: 39px;
    background-color: green;
    color: #fff;;
    border-radius:5px;
    padding :5px 20px;
}
table{
    width : 50%;
    margin: 30px auto;
    border-collapse:collaspse;
}
tr{
    border-bottom :1px solid #cbcbcb;
}
th{
    font-size :19px;
    color:#6B8E23;

}
th ,td{
    border:none;
    height:30px;
    padding :2px;
}
tr:hover{
    background:#E9E9E9;
}
.task{
    text-align :left;
}
.delete{
    text-align :center;
}
.delete a{
    color: white;
    background:#a52a2a;
    padding:1px 6px;
    border-radius:3px;
    text-decoration :none;
}



    </style>
</head>
<body>
    <!-- 4. Create a To Do List Page . -->
    <h3> Four Question </h3>

    <div class="heading">
        <h2>To Do list appliccation with php and mysql </h2>

    </div>
    <form method="POST" action="index.php" >
        <?php if (isset($errors)) { ?>

            <p ><?php  echo $errors;?></p>

        <?php }?>
        <input type="text" name="task" class="task_input">
        <button type="submit" class="task_btn" name="submit"> Add task </button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Task</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                while($row = mysqli_fetch_array($tasks)) { ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td class="task"><?php echo $row['task']; ?></td>
                <td class="delete">
                    <a href="index.php?del_task=<?php echo $row['id'];?>"> X </td>

            </tr>

            <?php  $i++;  } ?>
          
        </tbody>
    </table>


</body>
</html>