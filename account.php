<?php


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cloth Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
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
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="row-md-2"></div>
			<div class="row-md-8" id="cart_msg">
				
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="col">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">My Account</div>
					<div class="panel-body">
						<div class="col">
							<div class="row-md-2 row-xs-2"><b>First Name</b></div>
							<div class="row-md-2 row-xs-2"><b>Last Name</b></div>
							<div class="row-md-2 row-xs-2"><b>Email</b></div>
							<div class="row-md-2 row-xs-2"><b>Mobile</b></div>
							<div class="row-md-2 row-xs-2"><b>Address</b></div>
					
						
						</div>
						<div id="acnt_show"></div>
						
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>
</body>	
</html>
















		