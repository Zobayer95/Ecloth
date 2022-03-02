<?php

  $host="localhost"; 
  $husername="root"; 
  $hpassword=""; 
  $db_name="ecomm"; 

  mysql_connect("$host", "$husername", "$hpassword")or die("cannot connect"); 
  mysql_select_db("$db_name")or die("cannot select DB");

  if(isset($_POST['submit_order'])){

  	$user_id = $_POST['user_id'];
  	$product_id = $_POST['product_id'];
  	$qty = $_POST['qty'];

  	$query = mysql_query("INSERT INTO orders(user_id, product_id, qty, trx_id, p_status, delivery_status) VALUES('$user_id','$product_id','$qty','','pending','pending')");
  	if($query){
  		echo "<script>
        alert('Order Successful');
        window.location.href='profile.php';
        </script>";
    }else{
    	echo "no";
    } 
  	

  }

?>