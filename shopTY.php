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
        <a class="nav-link" href="index.html"><b>Home</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop.html"><b>Shop</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html"><b>About</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html"><b>Contact</b></a>
      </li>
    </ul>
  </div>
</nav> 


<div class="container"> 
		<div class="row justify-content-center">
			<div class="col-md-8">
				<h1 style="text-align: center;
						   /*margin-top: 140px;*/">
					Thank You For Purchasing!!
					<?php 
						include 'instamojo/Instamojo.php';
						$api = new Instamojo\Instamojo('test_6a468f84b153d4d3b2e8a03614f', 'test_f6cb786dfa6d6b9e949d1ea67f2', 'https://test.instamojo.com/api/1.1/');

						$payid = $_GET['payment_request_id'];

						try
						{
							$response = $api->paymentRequestStatus($payid);


					?>
					<br><br>
					<h2 style="font-size: 23px;
                               text-align: left;
                               color: #fff;">
						Payment Details :
					</h2>

					<table class="table"  style="color: #fff;" >
						<tr>
							<th style="font-size: 20px;">You have purchased </th>
							<td style="font-size: 20px;"><?= $response['purpose']; ?></td>
						</tr>
						<tr>
							<th style="font-size: 20px;">Payment ID</th>
							<td style="font-size: 20px;"><?= $response['payments'][0]['payment_id']; ?></td>
						</tr>
						<tr>
							<th style="font-size: 20px;">Payee Name</th>
							<td style="font-size: 20px;"><?= $response['payments'][0]['buyer_name']; ?></td>
						</tr>
						<tr>
							<th style="font-size: 20px;">E-mail</th>
							<td style="font-size: 20px;"><?= $response['payments'][0]['buyer_email']; ?></td>
						</tr>
						<tr>
							<th style="font-size: 20px;">Phone Number	</th>
							<td style="font-size: 20px;"><?= $response['payments'][0]['buyer_phone']; ?></td>
						</tr>
					</table>

					<?php
						}
						catch(Exception $e)
						{
							print("Error: ".$e->getMessage());
						}
					?>
				</h1>
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