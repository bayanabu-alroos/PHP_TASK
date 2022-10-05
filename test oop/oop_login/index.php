<?php
	//start session
	session_start();
 
	//redirect if logged in
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Login using OOP Approach</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-6 col-md-offset-5">
		<h1 class="page-header text-center">Login using OOP </h1>

		    <div class="login-panel panel panel-success">
		        <div class="panel-heading">
		            <h3 class="panel-title">
						Login
		            </h3>
		        </div>
		    	<div class="panel-body">
		        	<form method="POST" action="login.php">
		            	<fieldset>
		                	<div class="form-group">
								<label  class="form-label">Email address</label>

		                    	<input class="form-control" placeholder="E-mail" type="email" name="email" autofocus required>
		                	</div>
		                	<div class="form-group">
							<label  class="form-label">Password</label>

		                    	<input class="form-control" placeholder="Password" type="password" name="password" required>
		                	</div>
		                	<button type="submit" name="login" class="btn btn-lg btn-success btn-block">
								
							Login
				
						</button>
		            	</fieldset>
		        	</form>
		    	</div>
		    </div>
		    <?php
		    	if(isset($_SESSION['message'])){
		    		?>
		    			<div class="alert alert-info text-center">
					        <?php echo $_SESSION['message']; ?>
					    </div>
		    		<?php
 
		    		unset($_SESSION['message']);
		    	}
		    ?>
		</div>
	</div>
</div>
</body>
</html>