<?php
require 'config.php';
session_start();
$subid=$_SESSION["login_id"];
$subname=$_SESSION["login_name"];

$sql = "SELECT * FROM products where subadmin='$subname'";

$statement = $con->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
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
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Cloth Store</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="orgs.php"><span class="glyphicon glyphicon-edit"></span>Edit/Delete</a></li>
				
			
				
				<li style="width:250px;left:8px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:10px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
				<li><a href="orgcreate.php"><span class="glyphicon glyphicon-move"></span>Add Product</a></li>
				<li><a href="orgcat.php"><span class="glyphicon glyphicon-move"></span>Add Categories</a></li>
				<li><a href="orgorder.php"><span class="glyphicon glyphicon-modal-window"></span>View Order</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["login_name"]; ?></a>
					<ul class="dropdown-menu">
						
						<li><a href="orglogout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
				

				
				
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8">	
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="scroll">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>
</body>
</html>
















































