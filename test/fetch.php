//fetch.php
<?php
    include('conn.php');
    if(isset($_POST['fetch'])){
        ?>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Address</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php
                $query=$conn->query("select * from members");
                while($row=$query->fetch_array()){
                    ?>
                    <tr>
                        <td><span id="first<?php echo $row['id']; ?>"><?php echo $row['firstname']; ?></span></td>
                        <td><span id="last<?php echo $row['id']; ?>"><?php echo $row['lastname']; ?></span></td>
                        <td><span id="address<?php echo $row['id']; ?>"><?php echo $row['address']; ?></span></td>
                        <td>
                            <a style="cursor:pointer;" class="btn btn-warning edit" data-id="<?php echo $row['id']; ?>"><i class="bi bi-pencil"></i> Edit</a> || 
                            <a style="cursor:pointer;" class="btn btn-danger delete" data-id="<?php echo $row['id']; ?>"><i class="bi bi-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <?php
                }
             
            ?>
            </tbody>
        </table>
        <?php
    }
?>