<?php 
include('dbcon.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Fetch data from database using pdo in php</title>
  </head>
  <body>
    <?php 
        include('navbar.php');
        ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
             
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>First_Name</th>
                                    <th>Last_Name</th>
                                    <th>Salary</th>
                                    <th>Major</th>
                                    <th>Degree</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>department</th>
                                    <th>title_job</th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT  employees.First_Name,employees.Last_Name,employees.Salary,
                                    employees.Major,employees.Degree,employees.Phone,
                                    employees.Address,department.Name_Department, title_job.Name_Title_job  
                                    FROM ((employees
                                    INNER JOIN department ON employees.id_department = department.id)
                                    INNER JOIN title_job ON employees.id_Job = title_job.id)";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();

                                    $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                                    $result = $statement->fetchAll();
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row->First_Name; ?></td>
                                                <td><?= $row->Last_Name; ?></td>
                                                <td><?= $row->Salary; ?></td>
                                                <td><?= $row->Major; ?></td>
                                                <td><?= $row->Degree; ?></td>
                                                <td><?= $row->Phone; ?></td>
                                                <td><?= $row->Address; ?></td>
                                                <td><?= $row->Name_Department; ?></td>
                                                <td><?= $row->Name_Title_job ; ?></td>
                                                
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="5">No Record Found</td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                
            </div>
        </div>
    </div>

<br><br><br><br>


<?php 
include('footer.php');
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

