
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
			
			echo "<script>alert(' $catname added successfully');  location.href='addcat.php';</script>";
			//header("location:m.CandidateRegistrationSuccess.php");
		}
	}
	
}?>


<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
	
	
      <form action="addcat.php" method="post">
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