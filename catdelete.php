<?php
require 'config.php';
$id = $_GET['id'];
$sql = 'DELETE FROM categories WHERE cat_id=:id';
$statement = $con->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: deletecat.php");
}