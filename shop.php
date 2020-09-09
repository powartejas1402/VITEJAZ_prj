<?php  
	// require 'connect.php';
	$dbhost = "localhost";
	$dbuser = "root" ;
	$dbpass = "";
	$dbname = "vitejaz";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$sql = "SELECT * FROM add_items";
	$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>

	<style>
		*
		{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
		}
		.navbar-collapse input[type=text] 
		{
		    padding: 6px;
		    margin-top: 3px;
		    font-size: 17px;
		    border: none;
		    border-top-left-radius: 50px;
		    border-bottom-left-radius: 50px;
		}
		.navbar-collapse .search-container button 
		{
			float: right;
			padding: 6px 10px;
			margin-top: 3px;
			margin-right: 16px;
			color: white;
			background: #FAA094FF;
			border-bottom-right-radius: 50px;
			border-top-right-radius: 50px;
			font-size: 17px;
			border: none;
			cursor: pointer;
		}

		.navbar-collapse .search-container button:hover 
		{
		    background: #FAA094FF;
		}

		.card_display
		{
			padding-bottom: 100px;
		}

		img
		{
			object-fit:cover;
		}

		@media screen and (max-width: 600px) 
		{
			.navbar-collapse .search-container 
			{
				float: none;
			}
		  .navbar-collapse a, .navbar-collapse input[type=text] 
		  {
			    float: left;
			    display: block;
			    text-align: left;
			    width: 85%;
			    margin: 0;
			    padding: 14px;
		  }
		  .navbar-collapse .search-container button
		  {
		  		float: right;
		  		width: 15%;
		  		text-align: center;
		  		margin: 0;
		  		padding: 15px;
		  }
		 .navbar-collapse input[type=text] {
		    border: 1px solid #ccc;  
		  }
		}
	</style>

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

<div class="card_display">
	<div class="container">
		<div class="row">
			<?php  
				while($row = mysqli_fetch_array($result))
				{
			?>
					<div class="col-md-4 mt-3 mb-3" style = "padding-bottom: 180px;">
						<div class="card-deck">
							<div class="card border-info p-1">
								<img src="<?= $row['item_image']; ?>" class="card-img-top" />
								<br>
								<h5 class="card-title" style="color:  #008C76FF;
															  font-size: 19px;">
									Product : <?= $row['item_name']; ?>
										
									</h5>
								<h3 style="color: #008C76FF;
										font-size: 27px;">
									Price : <?= number_format($row['item_price']); ?>/-
								</h3>
								<a href="shopOrder.php?id=<?= $row['id']; ?>" class="btn btn-block btn-lg" style="background-color: #FAA094FF;
																											color: white;
																											font-size: 20px;">
									Buy now
								</a>
							</div>
						</div>
					</div>
			<?php 
				}
			?>
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