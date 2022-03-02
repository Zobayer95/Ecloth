<!--http://localhost:82/UnEmployed/mobileWV/m.CandidateRegistration.php-->
<!DOCTYPE html>




<?php //include 'm.Homepage_UnEmployed.php';
 
 include 'config.php';
 include 'db.php';
 session_start();
  

if(isset($_POST['addsub']))
{	
	$name = $_POST["name"];
	$mobile  = $_POST["mobile"];
	$adminid = $_POST["adminid"];
	$location = $_POST["location"];
	
	{
		$createTableQuery = "Create table if not exists subadmin(id int primary key auto_increment,name varchar(50) not null ,mobile varchar(12) not null,adminid varchar(70) not null , location varchar(200) not null)";
	    $createTableResult = mysqli_query($con , $createTableQuery);
		
		
		
		$sql = "Insert into subadmin VALUES(null,'$name','$mobile', '$adminid','$location')";
		$result = mysqli_query($con, $sql);
		
		if($result >= 1)
		{ 	
			//echo "<script>alert('Candidate $name registered successfully');  location.href='m.Home.php';</script>";
			//Set session variables				
			echo "<script>alert(' $name added successfully,Now you Can Login');  location.href='org.php';</script>";
			//header("location:m.CandidateRegistrationSuccess.php");
		}
	}
	
}	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cloth Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Cloth Store</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
				<li><a href="customer_registration.php?register=1"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> SignIn</a>
			
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="customer_registration.php?register=1" style="color:white; list-style:none;">Do Not Have Any Account</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
									
								</div>
			
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
					<li style="width:250px;left:8px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:10px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
			
			
			 	</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in ৳.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				
										<li><a href="org.php"><span class="glyphicon glyphicon-user"></span>Organization Singup</a></li>
										<li><a href="orglogin.php"><span class="glyphicon glyphicon-user"></span>Organization Login</a></li>
										
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2> <align="center">Organization Registration</h2>
    </div>
    
	  
	 
      <form method="post" action="org.php">
	  <div class="form-group">
        
	     </div>
        <div class="form-group">
		
          <label for="name">Organization Name</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="price">Mobile</label>
          <input type="text" name="mobile"  class="form-control">
        </div>
		 <div class="form-group">
          <label for="price">Organization Id</label>
          <input type="text" name="adminid"  class="form-control">
        </div>
		  <div class="form-group">
          <label for="name">Location</label>
          <input type="text" name="location"  class="form-control">
        </div>
      
		
        <div class="form-group">
          <button type="submit" name="addsub" class="btn btn-info">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>

