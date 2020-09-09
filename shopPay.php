<?php  
	$product_name = $_POST['item_name'];
	$price = $_POST['item_price'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	include 'instamojo/Instamojo.php';
	$api = new Instamojo\Instamojo('test_6a468f84b153d4d3b2e8a03614f', 'test_f6cb786dfa6d6b9e949d1ea67f2', 'https://test.instamojo.com/api/1.1/');


	try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "send_email" => true,
        "email" => $email,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_sms" => true,
        "allow_repeated_payments" => false,
        "redirect_url" => "http://localhost:8080/phpfiles/VITEJAZ_project/shopTY.php",
        "webhook" => "http://localhost:8080/phpfiles/VITEJAZ_project/shopTY.php"
        ));
    //print_r($response);

    $pay_url = $response['longurl'];
    header("Location: $pay_url");
	}
	catch (Exception $e) {
	    print('Error: ' . $e->getMessage());
	}
?>