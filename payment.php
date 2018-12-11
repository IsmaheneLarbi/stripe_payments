<?php
	require_once './config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Paiement</title>
	<meta charset="UTF-8">
	<!-- Bootstrap CSS  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
	<div class="container">
		<?php
			$col_num = 1;

			foreach ($products as $product => $elements)
			{
				if ($col_num == 1)
				echo '<div class="row">';
					echo '<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h2 class="price text-center"><span class="currency">€</span>'.$elements['price'] * 0.01.'</h2>
										
								</div>
								<div class="card-body">
									<div class="card-title text-center">
										<h1>'.$elements['title'].'</h1>
									</div>
									<ul class="list-group">
										<li class="list-group-item text-center">'.$elements['description'].'</li>
									</ul>
									<form class="payment-form" action="./approve_payment.php?id='.$product.'" method="POST">
									  <script
									    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
									    data-key="'.$stripeDetails['publishableKey'].'"
									    data-amount="'.$elements['price'].'"
									    data-name="'.$elements['title'].'"
									    data-description="charge"
									    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
									    data-locale="auto"
									    data-currency="eur">
									  </script>
									</form>
								</div>
							</div>
						</div>';
				if ($col_num == 2)
					echo '</div>';
				$col_num++;
			}
		?>
	</div>
	<!-- jQuery first, then Tether, then Bootstrap JS.-->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>