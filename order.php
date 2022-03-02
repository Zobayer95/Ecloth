<?php 
 include 'config.php';
 include 'db.php';
require 'header.php'; 
session_start(); 

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $updateQuery="UPDATE `orders` SET `delivery_status`='Delivered' where order_id='$id'";
   if(mysqli_query($con, $updateQuery)==1){
       echo "<script>alert('Order Accepted Successfully');</script>";
   }
    
}
   $sqlSelect = "select * from products as p,orders as o,user_info as u where o.user_id=u.user_id and o.product_id=p.product_id";
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
                                                        if($row["delivery_status"]=="pending"){
                                                               echo "<a href=order.php?id=".$row['order_id']." class='btn btn-danger'>Delivery</a></td>";
                                                            }
                                                            echo '</td>';
                                                            
						    echo "<td>".$row["trx_id"]."</td>";
						
						
						
         								echo"</tr>";			}
							
								echo"</table>";
								
								
								
								
								?> 
				<?php	require 'footer.php'; 	?>		