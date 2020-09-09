<?php 
	require 'connect.php';
	$dbhost = "localhost";
	$dbuser = "root" ;
	$dbpass = "";
	$dbname = "vitejaz";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$msg = "";
	if (isset($_POST['submit']))
	{
		$item_name = $_POST['itemName'];
        $item_price = $_POST['itemPrice'];
        $item_desc = $_POST['itemDesc'];
        $item_model = $_POST['itemModel'];
        $item_color = $_POST['itemColor'];
        $item_htype = $_POST['itemHtype'];
        $item_remote = $_POST['itemRemote'];
        $item_connect = $_POST['itemConnect'];
        $item_design = $_POST['itemDesign'];

		$target_dir = "images/";
		$target_file = $target_dir.basename($_FILES['itemImage']["name"]);
		move_uploaded_file($_FILES['itemImage']["tmp_name"], $target_file);

        $sql = "INSERT INTO add_items (item_name, item_price, item_description, item_image, item_model_name, item_color, item_headphone_type, item_inline_remote, item_conn, item_design) VALUES ('$item_name', '$item_price', '$item_desc', '$target_file', '$item_model', '$item_color', '$item_htype', '$item_remote', '$item_connect', '$item_design');";

		if (mysqli_query($conn, $sql))
		{
			$msg = "Product Added to the database successfully!";
		}
		else
		{
			$msg = "Failed to add the product!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>E-com</title>
</head>

<meta charset="utf-8">

 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="main.css">


<body>

 <nav class="navbar navbar-expand-md" style="background-color: black;">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img src="images/vitejaslogo.png" style="width: 100%;height: 130px;"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav navbar-center">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><b>Home</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop.php"><b>Shop</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"><b>About</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><b>Contact</b></a>
      </li>
    </ul>
  </div>
</nav> 

<div class="container">
		<div class="row justify-content-center" >  <!-- style="padding-top: 100px;"-->
			<div class="col-md-6 mt-5 rounded" style="background-color: #FFDDE2FF;">
				<h2 class="text-center p-2" style="color: #008C76FF;">Add Item Information</h2>
				<form action="" method="POST" class="p-2" enctype="multipart/form-data" id="form-box">
					<div class="form-group">
						<input type="text" name="itemName" class="form-control" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" name="itemPrice" class="form-control" placeholder="Price" required>
					</div>
					<div class="form-group">
						<div class="custom-file">
							<input type="file" name="itemImage" class="custom-file-input" id="customFile" required>
							<label for="customFile" class="custom-file-label">Choose Image</label>
						</div>
					</div>
                    <div class="form-group">
						<input type="text" name="itemDesc" class="form-control" placeholder="Description" required>
					</div>
                    <div class="form-group">
						<input type="text" name="itemModel" class="form-control" placeholder="Model Name" required>
					</div>
                    <div class="form-group">
						<input type="text" name="itemColor" class="form-control" placeholder="Color" required>
					</div>
                    <div class="form-group">
						<input type="text" name="itemHtype" class="form-control" placeholder="Headphone Type" required>
					</div>
                    <div class="form-group">
						<input type="text" name="itemRemote" class="form-control" placeholder="Inline Remote" required>
					</div>
                    <div class="form-group">
						<input type="text" name="itemConnect" class="form-control" placeholder="Connectivity" required>
					</div>
                    <div class="form-group">
						<input type="text" name="itemDesign" class="form-control" placeholder="Design" required>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-block" value="Add" style="background-color: #FAA094FF;
																									color: white;
																									font-size: 25px;
																									">
					</div>
					<div class="form-group">
						<h4 class="text-center">
							<?= $msg; ?>
						</h4>
					</div>
				</form>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-md-6 mt-3 p-4 rounded" style="background-color: #9ED9CCFF;">
				<a href="shop.php" class="btn btn-block btn-lg" style="background-color: #008C76FF;
																		color:  #9ED9CCFF;
																		font-size: 25px;
																		">
					Go to Shop page
				</a>
			</div>
		</div>
	</div>

<br><br>
<footer class="mainfooter" role="contentinfo" style="margin-top: 0px;">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
      </div>
      <div class="col-md-4 col-sm-12 text-center">
      	<h2><b>Follow us on!!</b></h2>
      	<br>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
             <li><a href="#" class="icoInsta" title="Instagram"><i class="fa fa-instagram"></i></a></li>
             <li><a href="#" class="icoYoutube" title="Youtube"><i class="fa fa-youtube"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            </ul>	
      </div>
      <div class="col-md-4 col-sm-12">
      </div>
    </div>
    <br>
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center">&copy; Copyright 2018 - VITEJAZ.  All rights reserved.</p>
		</div>
	</div>


  </div>
  </div>
</footer>


</body>
</html>