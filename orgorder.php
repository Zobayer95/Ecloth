		

<?php 
 include 'config.php';
 include 'db.php';
	
session_start(); 
$subid=$_SESSION["login_id"];
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $updateQuery="UPDATE `orders` SET `delivery_status`='Delivered' where order_id='$id'";
   if(mysqli_query($con, $updateQuery)==1){
       echo "<script>alert('confirmation for order delivered Successfully');</script>";
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
				
				<li><a href="orgcreate.php"><span class="glyphicon glyphicon-modal-window"></span>Add Product</a></li>
				<li><a href="orgcat.php"><span class="glyphicon glyphicon-modal-window"></span>Add Categories</a></li>
				
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
<?php

   $sqlSelect = "select * from products as p,orders as o,user_info as u where o.user_id=u.user_id and o.product_id=p.product_id and p.subadmin='$subid'";
											$result = mysqli_query($con, $sqlSelect);
											
											echo "<table align='center' margin-left:300px border='border' style='width:15% color:green'>
											<tr><td>firstname</td><td>lastname</td><td>email</td><td>mobile</td><td>address1</td><td>address2</td><td>product_name</td><td>productprice</td><td>productdesc</td><td>product_image</td><td>p_status</td><td>deliverystatus</td><td>tran_id</td></tr>";
																										
											while($row = mysqli_fetch_array($result))	
											{	
											
							
						    echo "<tr>";
							echo "<td>".$row["first_name"]."</td>";
							echo "<td>".$row["last_name"]."</td>";
							echo "<td style='width:100px;'>".$row["email"]."</td>";
							echo "<td>".$row["mobile"]."</td>";
							echo "<td>".$row["address1"]."</td>";
							echo "<td>".$row["address2"]."</td>";
						    echo "<td>".$row["product_title"]."</td>";
							echo "<td>".$row["product_price"]."</td>";
							echo "<td>".$row["product_desc"]."</td>";
							echo "<td><img src='product_images/".$row["product_image"]."' width=150 height=120/></td>";
							echo "<td>".$row["p_status"]."</td>";
							echo "<td>".$row["delivery_status"]."<br></br>";
                                                        if($row["delivery_status"]=="Pending"){
                                                               echo "<a href=orgorder.php?id=".$row['order_id']." class='btn btn-danger'>Delivery</a></td>";
                                                            }
                                                            echo '</td>';
                                                            
						    echo "<td>".$row["trx_id"]."</td>";
						
						
						
         								echo"</tr>";			}
							
								echo"</table>";
								
								
								
								
								?> 
							
				<?php	require 'footer.php'; 	?>		