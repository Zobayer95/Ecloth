<?php
require 'config.php';
session_start();
$sql = 'SELECT * FROM categories';
$statement = $con->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'orgheader.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All categoeies</h2>
    </div>
    <div class="card-body">
      <table style="width:100px" class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Category Name</th>
		   <th>Action</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->cat_id; ?></td>
            <td><?= $person->cat_title; ?></td>
      
            <td>
             
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="catdelete.php?id=<?= $person->cat_id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
