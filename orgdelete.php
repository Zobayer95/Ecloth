<?php
require 'config.php';
$id = $_GET['id'];
$sql = 'DELETE FROM subadmin WHERE id=:id';
$statement = $con->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: removesubadd.php");
}