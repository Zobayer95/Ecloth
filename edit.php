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
 $productimage =  basename($_FILES["pimage"]["name"]);
    $target_dir = "product_images/";
	    move_uploaded_file($_FILES["pimage"]["tmp_name"],$productimage);
  $sql = 'UPDATE products SET product_title=:name, product_price=:price,product_desc=:desc,product_image=:proimg,product_keywords=:keyword WHERE product_id=:id';
  $statement = $con->prepare($sql);
  if ($statement->execute([':name' => $name, ':price' => $price,':desc'=>$desc ,':proimg'=>$productimage,':keyword'=>$keyword,':id'=> $id])) {
    header("Location:admin.php");
  }



}


 ?>
<?php require 'header.php'; ?>
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
