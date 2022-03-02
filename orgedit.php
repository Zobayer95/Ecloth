<?php
require 'config.php';
session_start();
$id = $_GET['id'];
$sql = 'SELECT * FROM products WHERE product_id=:id';
$statement = $con->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  && isset($_POST['price']) && isset ($_POST['desc']) && isset($_POST['pimage'])  && isset($_POST['keyword']) ) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $desc = $_POST['desc'];
  $keyword = $_POST['keyword'];
  $productimage = $_POST['pimage'];
  
  $sql = 'UPDATE products SET product_title=:name, product_price=:price,product_desc=:desc,product_image=:proimg,product_keywords=:keyword WHERE product_id=:id';
  $statement = $con->prepare($sql);
  if ($statement->execute([':name' => $name, ':price' => $price,':desc'=>$desc ,':proimg'=>$productimage,':keyword'=>$keyword,':id'=> $id])) {
    header("Location:orgs.php");
  }



}
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
								<li><a href="orgs.php"><span class="glyphicon glyphicon-edit"></span>Edit/Delete</a></li>
				
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
      <h2>Update products</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $person->product_title; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="text" value="<?= $person->product_price; ?>" name="price" id="price" class="form-control">
        </div>
		
		 <div class="form-group">
          <label for="desc">Description</label>
          <input value="<?= $person->product_desc; ?>" type="text" name="desc" id="desc" class="form-control">
        </div>
		
		
		 <div class="form-group">
          <label for="desc">Product image</label>
          <input value="<?= $person-> product_image; ?>" type="file" name="pimage"  class="form-control">
        </div>
        <div class="form-group">
          <label for="keyword">Keyword</label>
          <input type="text" value="<?= $person->product_keywords; ?>" name="keyword" id="keyword" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update product</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
