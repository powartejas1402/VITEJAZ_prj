<?php 
	require 'connect.php';
	if (isset($_GET['id']))
	{
		$id = $_GET['id'];
		$sql = "SELECT * FROM add_items WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);

        $itemName = $row['item_name'];
        $item_desc = $row['item_description'];
        $item_model = $row['item_model_name'];
        $item_color = $row['item_color'];
        $item_htype = $row['item_headphone_type'];
        $item_remote = $row['item_inline_remote'];
        $item_connect = $row['item_conn'];
        $item_design = $row['item_design'];
        $itemPrice = $row['item_price'];
        if ($itemPrice > 3000)
        {
            $del_charge = 0;
            $total_price = $itemPrice;
        }
        else
        {
            $del_charge = 200;
		    $total_price = $itemPrice + $del_charge;
        }
        $itemImage = $row['item_image'];
	}
	else
	{
		echo "No product found!";
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

<div class="container" style="color: #fff;">
		<div class="row justify-content-center">
			<div class="col-md-8 mb-5" style="width: 450px; height:450px;">
                <img src="<?= $itemImage; ?>" width=100% style="object-fit: cover; border-radius: 2px; ">
            </div>
            <div class="col-md-6 mb-5">
                <table class="table " width="500px" style="color: #fff;">
                    <tr >
                        <th colspan="2"><h3>Product Details : </h3></th>
                    </tr>
                    <tr>
                        <th><h5>Name</h5></th>
                        <td><?= $itemName; ?></td>
                    </tr>
                    <tr>
                        <th><h5>Description</h5></th>
                        <td><?= $item_desc; ?></td>
                    </tr>
                    <tr>
                        <th><h5>Price</h5></th>
						<td>Rs. <?= number_format($itemPrice); ?></td>
					</tr>   
					<tr>
                        <th><h5>Delivery charges</h5></th>
						<td>Rs. <?= number_format($del_charge); ?></td>
					</tr>
					<tr>
                        <th><h5>Total</h5></th>
						<td>Rs. <?= number_format($total_price); ?></td>
					</tr>
                </table>
            </div>
            <div class="col-md-6 mb-5">
                <table class="table " width="500px" style="color: #fff;">
                    <tr >
                        <th colspan="2"><h3>General Specifications : </h3></th>
                    </tr>
                    <tr>
                        <th><h5>Model</h5></th>
                        <td><?= $item_model; ?></td>
                    </tr>
                    <tr>
                        <th><h5>Color</h5></th>
                        <td><?= $item_color; ?></td>
                    </tr>
                    <tr>
                        <th><h5>Headphone type</h5></th>
                        <td><?= $item_htype; ?></td>
                    </tr>
                    <tr>
                        <th><h5>Inline Remote</h5></th>
                        <td><?= $item_remote; ?></td>
                    </tr>
                    <tr>
                        <th><h5>Connectivity</h5></th>
                        <td><?= $item_connect; ?></td>
                    </tr>
                    <tr>
                        <th><h5>Design</h5></th>
                        <td><?= $item_design; ?></td>
                    </tr>
                    <tr>
                        <th><h5>Color</h5></th>
                        <td><?= $item_color; ?></td>
                    </tr>
                </table>
            </div>
			<br>
            <div class="col-md-10 mb-5">
            <h2 class="text-center p-2" style="color: #FAA094FF;">
					Fill the details to complete your order!
				</h2>
				<h4>Enter your details :</h4>
				<form action="shopPay.php" method="POST" accept-charset="utf-8">
					<input type="hidden" name="item_name" value="<?= $itemName; ?>">
					<input type="hidden" name="item_price" value="<?= $total_price; ?>">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Enter your name" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Enter your e-mail" required>
					</div>
					<div class="form-group">
						<input type="tel" name="phone" class="form-control" placeholder="Enter your phone" required>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-lg" value="Click to pay : Rs. <?= number_format($total_price); ?>/-" style="background-color: #FAA094FF;
								   color: white;
								   font-size: 20px;">
					</div>
				</form>
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