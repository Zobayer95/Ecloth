<?php
require 'config.php';
$sql = 'SELECT * FROM subadmin';
$statement = $con->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Remove subadmins</h2>
    </div>
    <div class="card-body">
      <table style="width:100px" class="table table-bordered">
        <tr>
          <th>Name</th>
          <th>mobile</th>
		    <th>Admin_id</th>
		   <th>Location</th>
		   <th>Action</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->name; ?></td>
            <td><?= $person->mobile; ?></td>
             <td><?= $person->adminid; ?></td>
            <td><?= $person->location; ?></td>
      
            <td>
             
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="subdelete.php?id=<?= $person->id ?>" class='btn btn-danger'>Remove</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
