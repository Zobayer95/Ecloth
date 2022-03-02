<?php
require 'config.php';
$sql = 'SELECT * FROM products';
$statement = $con->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All products</h2>
    </div>
    <div class="card-body">
      <table style="width:100px" class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Product Name</th>
		  <th>Product_Price</th>
          <th>Product_Description</th>
          <th>Product_image</th>
		  <th>Product_Keywords</th>
		   <th>Action</th>
        </tr>
		
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->product_id; ?></td>
            <td><?= $person->product_title; ?></td>
            <td><?= $person->product_price; ?></td>
			<td><?= $person->product_desc; ?></td>
                        <td><img src="product_images/<?= $person->product_image; ?>" width="150" height="120"/></td>
            <td><?= $person->product_keywords; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->product_id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->product_id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>