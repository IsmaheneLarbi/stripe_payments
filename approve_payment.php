<?php

	require_once './config.php';

	\Stripe\Stripe::setVerifySslCerts(false);
	// Token is created using Checkout or Elements!
	// Get the payment token ID submitted by the form:
	$product = $_GET['id'];

	if (!isset($_POST['stripeToken']) || !isset($products[$product])){
		header("Location: ./payment.php");
		exit();
	}
//I'll add the coupon in charge afterwards
	$token = $_POST['stripeToken'];
	$email = $_POST['stripeEmail'];
	$charge = \Stripe\Charge::create([
	    'amount' => $products[$product]['price'],
	    'currency' => 'eur',
	    'description' => $products[$product]['description'],
	    'source' => $token,
	]);
	//redirect to test
	echo "Congrats, bich!";
	print_r($_POST);
?>