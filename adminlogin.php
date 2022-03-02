<?php
	include 'config.php';
    include 'db.php';
	session_start();
	
   if(isset($_POST['subaddLogin'])) 
   {
      // collect parameters of email and password sent from the login screen
	  @$myemail = $_POST["name"];
	  @$mypassword = $_POST["addid"]; 
	  
	  $sql = "SELECT * FROM admin WHERE name = 'fahad' and adminid = '12345'";
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
			header("location:admin.php");
		}

		else
			//echo "<h1 style='color:red;' align='center'>Wrong E-mail and/or Password, login denied</h1>";
			echo "<script>alert('Wrong admin E-mail and/or Password, login denied'); location.href='adminlogin.php'; </script>";
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
<style>
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div style="margin-left:500px"class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Login</h2>
    </div>
    <div class="card-body">
	   <form method="post" action="adminlogin.php">
	   
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
