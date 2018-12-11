<?php

	require_once './stripe-php/init.php';
	require_once './products.php';
	
	$stripeDetails = array(
		'secretKey'=>"sk_test_QzKe7c9PruETw2TYvtdr6Qvj",
		'publishableKey'=>"pk_test_xAWkV8asn1gM8Zsf5sSE8hFq"
	);

	//took this out of the server-side-code
	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);
?>