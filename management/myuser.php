<?php
session_start();
include 'config.php';

$auth_id = $_SESSION["id"];
$select_query = "SELECT * FROM myuser WHERE `auth_id`=$auth_id ";
$select_conn = mysqli_query($dbconnect, $select_query);
?>


<!DOCTYPE html>
<html>
    
<head>
	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<style type="text/css">
		.logout.center-block.m-4 {
    width: 200px;
    margin: 0 auto !important;
    text-align: center;
    margin-top: 20px !important;
}
	</style>
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="fff"">
			<div class=" bg-dark  p-2 text-white">
			<div class="container">
				<h3 style="display: inline-block;"><a href="userdashbord.php">Home</a> </h3>
				<p class="text-center">My user Information</p>
			</div> 
			</div>
			<div class="container">
				<div class="row">
					<div class="col-6">
						 <a class="float-right m-4" href="newuser.php"><button class="btn btn-primary">Add User</button></a>   

						  <table class="table table-bordered">
						    <thead>
						      <tr>
						        <th>Serial</th>
						        <th>Name</th>
						        <th>Mobile</th>
						      </tr>
						    </thead>
						    <?php 
						    		$rowcount=mysqli_num_rows($select_conn);
									if($rowcount > 0){
										while ($array_fac = mysqli_fetch_array($select_conn)){
											?>
						    <tbody>

						    	
						      <tr>
						        <td><?php echo $array_fac['id']; ?></td>
						        <td><?php echo $array_fac['user_name']; ?></td>
						        <td><?php echo $array_fac['user_mobile']; ?></td>
						      </tr>
						    </tbody>
						    <?php
						  	}
						  }
						  ?>
						  </table>
						  
					</div>
				</div>
			</div>

		

	</div>
</body>
</html>
