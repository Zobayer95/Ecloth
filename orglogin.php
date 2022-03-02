<?php
	include 'config.php';
    include 'db.php';
	session_start();
	
   if(isset($_POST['subaddLogin'])) 
   {
      // collect parameters of email and password sent from the login screen
	  @$myemail = $_POST["name"];
	  @$mypassword = $_POST["addid"]; 
	  
	  $sql = "SELECT * FROM subadmin WHERE name = '$myemail' and adminid = '$mypassword'";
      $result = mysqli_query($con,$sql);	 

      $count = mysqli_num_rows($result);
      
      // If both $myemail and $mypassword matched, login is successful
		
      if($count == 1) 
	  {
		while($row = mysqli_fetch_assoc($result))
		{						
			$dbEmail = $row["name"];
			$dbPassword = $row["adminid"];
			}
		
		if( ($myemail==$dbEmail) && ($mypassword==$dbPassword) )
		{
			$_SESSION["login_name"] = $myemail;
			$_SESSION["login_id"] = $mypassword;
echo 
			header("location:home.php");
		}

		else
			//echo "<h1 style='color:red;' align='center'>Wrong E-mail and/or Password, login denied</h1>";
			echo "<script>alert('Wrong admin E-mail and/or Password, login denied'); location.href='orglogin.php'; </script>";
      }
   }
	  
	  	
  /*if(isset($_POST['facultyLogin'])) 
   {
      // collect parameters of email and password sent from the login screen
	  $myemail = $_POST["fmail"];
	  $mypassword = $_POST["fpswd"]; 
	  
	  $sql = "SELECT * FROM fac_reg WHERE fac_email = '$myemail' and fac_password = '$mypassword'";
      $result = mysqli_query($db,$sql);	 

      $count = mysqli_num_rows($result);
      
      // If both $myemail and $mypassword matched, login is successful
		
      if($count == 1) 
	  {
		while($row = mysqli_fetch_assoc($result))
		{						
			$dbEmail = $row["cand_email"];
			$dbPassword = $row["cand_password"];
			$username=$row["cand_name"];
		}
		
		if( ($myemail==$dbEmail) && ($mypassword==$dbPassword) )
		{
			$_SESSION["login_mail"] = $myemail;
			$_SESSION["login_name"] = $username;

			header("location:Dashboard.php");
		}

		else
			//echo "<h1 style='color:red;' align='center'>Wrong E-mail and/or Password, login denied</h1>";
			echo "<script>alert('Wrong admin E-mail and/or Password, login denied'); location.href='m.CandidateLogin.php'; </script>";
      }
	  
	  //else	  		
			//echo "<h1 style='color:red' align='center'>Enter correct E-mail and/or Password</h1>";
			//echo "<script>alert('Enter correct admin E-mail and/or Password')</script>";
	  
	  //else	  		
			//echo "<h1 style='color:red' align='center'>Enter correct E-mail and/or Password</h1>";
			//echo "<script>alert('Enter correct admin E-mail and/or Password')</script>";
   }
	//$retval = array();
	
	//$header=apache_request_headers()["Token"];
	/*if(isset($_POST["candidateLogin"]))
	{*/	

	//if(false)		$header==null || $header!="Adminunemployed2017")
	/*{
		$retval[] = 'Access Denied';
		echo json_encode($retval);
	}
	
	else
	{	
		$Email=$_REQUEST['mail'];         
		$Password = $_REQUEST['pswd']; 
		
		$sql="SELECT * FROM cand_registration WHERE cand_email='$Email' AND cand_password='$Password'";
		$result=mysqli_query($db,$sql);
		
		if($result->num_rows > 0)
		{ 	
			$retval[] = "success";
			header("location:m.MyJobSeekerProfile.php");
			
			while($row = $result->fetch_assoc())
			{							
				$_SESSION["login_mail"] = $Email;
				$retval[] = $row;						
			} 
		}
		
		else
		{ 
			$retval[] = 'fail';
		}
		
		echo json_encode($retval); 
	}
	}*/
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
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Cloth Store</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
				<li><a href="customer_registration.php?register=1"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> SignIn</a>
			
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="customer_registration.php?register=1" style="color:white; list-style:none;">Do Not Have Any Account</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
									
								</div>
			
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
					<li style="width:250px;left:8px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:10px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
			
			
			 	</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in ৳.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				
										<li><a href="org.php"><span class="glyphicon glyphicon-user"></span>Organization Singup</a></li>
										<li><a href="orglogin.php"><span class="glyphicon glyphicon-user"></span>Organization Login</a></li>
										
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
<div style="margin-left:200px"class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Login</h2>
    </div>
    <div class="card-body">
	   <form method="post" action="orglogin.php">
	   
	   <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name"  class="form-control">
        </div>
        <div class="form-group">
          <label for="price">Id</label>
          <input type="password" name="addid"  class="form-control">
        </div>
		
		 <div class="form-group">
          <button type="submit" name="subaddLogin" class="btn btn-info">Login</button>
        </div>
      </form>
	   </div> </div> </div>
	   </html>
