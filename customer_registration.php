<?php
if (isset($_GET["register"])) {
	
	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Cloth Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Cloth Store</a>
			</div>
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
				</li>
			
			</ul>
		<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
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
	<div class="container-fluid">
	
				
						
					
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer SignUp Form</div>
					<div class="panel-body">
					
					<form id="signup_form" onsubmit="return false">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control">
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" name="mobile"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Full Address</label>
								<input type="text" id="address1" name="address1"class="form-control">
							</div>
						</div>
						
							<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" id="password" name="password"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Confirm Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control">
							</div>
						</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
	<?php
}



?>






















