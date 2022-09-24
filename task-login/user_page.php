<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body >
   


<div class="container">
   <div class="row">
      <div >
         <?php
            if (isset($_SESSION['message'])) :  
         ?>
         <h5 class="alert alert-sucess"><?= $_SESSION['message'];?></h5>
         <?php
            unset($_SESSION['message']);
            endif;
         ?>
         <div class="card">
            <div class="card-header">
               <div class="content mt-5 mb-5">
                  <h3 >Hello, <span>User</span></h3>
                  <h1 >welcome <span></span></h1>
                  <p >This is an user page</p>
                  <a href="login_form.php" class="btn" style="background: green;">login</a>
                  <a href="register_form.php" class="btn" style="background: orange;">register</a>
                  <a href="logout.php" class="btn"style="background: red;">logout</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>