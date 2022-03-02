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

    $target_dir = "product_images/";
$productimage =  basename($_FILES["pimage"]["name"]);
  

	  
  $sql = 'INSERT INTO products(product_id,product_cat,product_title,product_price,product_desc,product_image,product_keywords) VALUES(null,:category, :name, :price,:desc,:pimage,:keyword)';
  $statement = $con->prepare($sql);
  
  if ($statement->execute([':name' => $name, ':price' => $price, ':desc'=> $desc, ':keyword'=>$keyword,':category'=> $catid,':pimage'=> $productimage])) {
    $message = 'data inserted successfully';
    move_uploaded_file($_FILES["pimage"]["tmp_name"],$productimage);
  }



}


 ?>

<?php require 'header.php'; ?>
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