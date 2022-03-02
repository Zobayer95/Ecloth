<?php

require 'config.php';
session_start();
$message = '';
if (isset ($_POST['name'])  && isset($_POST['price'])   && isset ($_POST['desc'])  && isset($_POST['keyword']) ) {

  $name = $_POST['name'];
  $price = $_POST['price'];
  $desc = $_POST['desc'];
  $catid=$_POST['cateid'];
  $keyword = $_POST['keyword'];
  $subname=$_SESSION["login_name"];
  $brandid=$_POST['brandid'];
    $target_dir = "product_images/";
$productimage =  basename($_FILES["pimage"]["name"]);
  

	  
  $sql = 'INSERT INTO products(product_id,product_cat,product_title, product_brand,product_price,product_desc,product_image,product_keywords,subadmin) VALUES(null,:category, :name,:brand, :price,:desc,:pimage,:keyword,:subname)';
  $statement = $con->prepare($sql);
  
  if ($statement->execute([':name' => $name, ':price' => $price, ':desc'=> $desc, ':keyword'=>$keyword,':category'=> $catid,':brand'=>$brandid,':pimage'=> $productimage,':subname'=> $subname])) {
    $message = 'data inserted successfully';
    move_uploaded_file($_FILES["pimage"]["tmp_name"],$productimage);
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
				
				<li><a href="orgs.php"><span class="glyphicon glyphicon-modal-window"></span>Edit/Delete</a></li>
				<li><a href="orgcat.php"><span class="glyphicon glyphicon-modal-window"></span>Add Categories</a></li>
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
      <h2>Add Product</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
		
        <form method="post" action="" enctype="multipart/form-data">
	
	  <div class="form-group">
          <label for="name">Choose category</label>
          <select  name="cateid"  class="form-control">
		  <option value="">Select category </option>
		 
	
	    <?php
	include 'db.php';
        $sqlSelect = "Select * from categories";
			$result = mysqli_query($con, $sqlSelect);
						while($row = mysqli_fetch_array($result))	
											{	
		
 ?>
    <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_title']; ?></option>
    <?php
}
?>
</select>
</div>
	  <div class="form-group">
	  <form method="post" action="" enctype="multipart/form-data">
          <label for="name">Choose Brand</label>
          <select  name="brandid"  class="form-control">
		  <option value="">Select Brand </option>
		</div>  
		  
  
	    <?php
	include 'db.php';
        $sqlSelect = "Select * from brands";
			$result = mysqli_query($con, $sqlSelect);
						while($row = mysqli_fetch_array($result))	
											{	
		
 ?>
    <option value="<?php echo $row['brand_id']; ?>"><?php echo $row['brand_title']; ?></option>
    <?php
}
?>

</div>





	  </select>
	     </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="text" name="price" id="price" class="form-control">
        </div>
		 <div class="form-group">
          <label for="price">Product Image</label>
          <input type="file" name="pimage"  class="form-control">
        </div>
		  <div class="form-group">
          <label for="name">Description</label>
          <input type="text" name="desc" id="desc" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Keyword</label>
          <input type="text" name="keyword" id="keyword" class="form-control">
        </div>
		
        <div class="form-group">
          <button type="submit" class="btn btn-info">Add product</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>