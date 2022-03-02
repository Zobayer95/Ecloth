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
				<li><a href="home.php"><span class="glyphicon glyphicon-modal-window"></span>Home</a></li>
				
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
</body>
</html>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All products</h2>
    </div>
    <div class="card-body">
      <table width="200px" class="table table-bordered">
        <tr>
         
		  <th>Product Code</th>
          <th>Product Name</th>
		  <th>Product Price</th>
          <th>Product Description</th>
          <th>Product image</th>
		  
		   <th>Action</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
        
			<td><?= $person->product_keywords; ?></td>
            <td><?= $person->product_title; ?></td>
            <td><?= $person->product_price; ?></td>
			<td><?= $person->product_desc; ?></td>
      <td><img src="product_images/<?= $person->product_image; ?>" width="80" height="50"/></td>
            
            <td>
              <a href="orgedit.php?id=<?= $person->product_id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="deleteprod.php?id=<?= $person->product_id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>

</body>
</html>