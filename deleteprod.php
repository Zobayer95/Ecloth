<?php
require 'config.php';
$id = $_GET['id'];
$sql = 'DELETE FROM products WHERE product_id=:id';
$statement = $con->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: subadmins.php");
}