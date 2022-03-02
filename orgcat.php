
<?php //include 'm.Homepage_UnEmployed.php';
 
 include 'config.php';
 include 'db.php';
 session_start();
   // 

if(isset($_POST['addcat']))
{	
	$catname = $_POST["catename"];
	
	
	{
		$createTableQuery = "Create table if not exists categories(cat_id int primary key auto_increment,cat_title varchar(150) not null)";
	    $createTableResult = mysqli_query($con , $createTableQuery);
		
		
		
		$sql = "Insert into categories VALUES(null,'$catname')";
		$result = mysqli_query($con, $sql);
		
		if($result >= 1)
		{ 	
			//echo "<script>alert('Candidate $name registered successfully');  location.href='m.Home.php';</script>";
			//Set session variables				
			
			echo "<script>alert(' $catname added successfully');  location.href='orgcat.php';</script>";
			//header("location:m.CandidateRegistrationSuccess.php");
		}
	}
	
}?>


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
				<li><a href="orgs.php"><span class="glyphicon glyphicon-edit"></span>Edit/Delete</a></li>
				
				<li><a href="orgcreate.php"><span class="glyphicon glyphicon-move"></span>Add Product</a></li>
			
				<li><a href="orgorder.php"><span class="glyphicon glyphicon-modal-window"></span>View Order</a></li>
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
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
	
	
      <form action="orgaddcat.php" method="post">
	  <div class="form-group">
          <label for="price">Enter Category Name</label>
          <input type="text" name="catename"  class="form-control">
        </div>
	
	<div class="form-group">
          <button type="submit" name="addcat" class="btn btn-info">Add category</button>
        </div>
	
	</form>
	
	
	
	
	</div>
	</div>
	</div>
	<?php require 'footer.php'; ?>