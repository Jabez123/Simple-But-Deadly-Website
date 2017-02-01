<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="DIST/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="DIST/css/main.css">
</head>
<body>
<div class="container">
	<div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" action="#" method="post">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Username" name="username" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
    	</div>
    </div>
</div>

<?php 
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$c = oci_connect($username, $password, "localhost/XE");
		if (!$c) {		
			echo "<div class='col-lg-4'></div>";
			echo '<div class="col-lg-4"> <div class="alert alert-dismissible alert-danger">
  						Wrong Username or Password.';
  						$e = oci_error();
						trigger_error('Could not connect to database: '.$e['message'],E_USER_ERROR);
						
			echo '</div></div>';
		}
		else {
			header("Location: inventory.php");
			echo '<div class="alert alert-dismissible alert-success">
  					<button type="button" class="close" data-dismiss="alert">&times;</button>
  					<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
					</div>';
		}				//Oracle Connection

	}
 ?>
 <script type="text/javascript" src="DIST/js/bootstrap.js"></script>
 <script type="text/javascript" src="DIST/js/script.js"></script>
</body>
</html>