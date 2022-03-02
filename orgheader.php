<?php

$subname= $_SESSION["login_name"];
?>
<!doctype html>
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
  <a style="margin-top:-30px;color:blue" class="navbar-brand" href="home.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a style="color:green" class="nav-link" href="orgs.php">Edit/Delete<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a style="color:green" class="nav-link" href="orgcreate.php">Add Products</a>
      </li>
	  &emsp;	
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	  <li class="nav-item active">
	 <div class="dropdown" style="margin-top:8px">
    <text style="color:green" class="dropbtn">Categories
      <i class="fa fa-caret-down"></i>
    </text>
    <div class="dropdown-content">
      <a href="orgcat.php">Add Categories</a>

    </div>
		</div>
	&emsp;	&emsp;	&emsp;	&emsp;	&emsp;	
	 <li class="nav-item">
        <a style="color:green"class="nav-link" href="orgorder.php">View orders</a>
      </li>
	 
	  <a style="margin-left:700px;margin-top:25px" href="orglogout.php" class='btn btn-danger'>logout</a>
 <h6 style="margin-left:-90px"> welcome <?php echo $subname;  ?></h6>
  </div> 
    </li>  
      
    </ul>
  </div>
</nav>
