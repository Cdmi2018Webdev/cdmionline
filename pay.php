
<!doctype html>

<?php
	
	//include functions
	include("php/functions.php");

	//gateway credentials
	include('php/gateway-credentials.php');

    // the transaction through another XML HTTPS POST including the token-id which abstracts the
    // sensitive payment information that was previously collected by the Payment Gateway.
   	
   	$message = '';

   	if(isset($_GET['token-id'])){

   	 $tokenId = $_GET['token-id'];
    $xmlRequest = new DOMDocument('1.0','UTF-8');
    $xmlRequest->formatOutput = true;
    $xmlCompleteTransaction = $xmlRequest->createElement('complete-action');
    appendXmlNode($xmlRequest, $xmlCompleteTransaction,'api-key',$APIKey);
    appendXmlNode($xmlRequest, $xmlCompleteTransaction,'token-id',$tokenId);
    $xmlRequest->appendChild($xmlCompleteTransaction);

     $gatewayURL = 'https://leap.transactiongateway.com/api/v2/three-step';
    // Process Step Three
    $data = sendXMLviaCurl($xmlRequest,$gatewayURL);
    $gwResponse = @new SimpleXMLElement((string)$data);
    $code = (string)$gwResponse->{"result-code"};
     foreach ($response_code as $key => $value) {
		 if($key == $code){

		 	$message = $value;



		}
  		
  	 }
 
  	 if(empty($message)){
  	 $message  = "unable to complete transaction, please try again later";
  	 }

  	 if($code==100){
  	    session_start();
  	 	$first_name = $_SESSION['first_name'];
		$last_name = $_SESSION['last_name'];
		$email = $_SESSION['email'];
		$ssn = $_SESSION['ssn'];
		$dob = $_SESSION['dob'];
		$credit_monitoring_un = $_SESSION['cu'];
		$credit_monitoring_pw = $_SESSION['cp'];
		//send mail
		sendEmail($first_name,$last_name,$email,$ssn,$dob,$credit_monitoring_un,$credit_monitoring_pw);

   	 }

   	}


?>

<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="assets/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="assets/css/style.css"> <!-- Resource style -->
	<script src="assets/js/modernizr.js"></script> <!-- Modernizr -->
  	
	<!-- <title>Animated Sign Up Flow | CodyHouse</title> -->
</head>
<body>

	<header class="cd-main-header" >
			<h1>
			<?php
			//echo $message;
			?>
			</h1>
	</header>

	<ul class="cd-pricing">
		<li class="me-width" style="margin-left: 8%">
			<header class="cd-pricing-header">
				<h2>Perfect Credit</h2>

				<div class="cd-price">
					<span>$99</span>
					<span>month</span>
				</div>
				<br>
					<div class="cd-price">
					<span>$299 down</span>
					<!-- <span>month</span> -->
				</div>
			</header> <!-- .cd-pricing-header -->

			<div class="cd-pricing-features">
				<ul class="me-height">
					<li class="available"><em>Cancel Anytime</em></li>
					<li class="available"><em>Unlimited Credit Scrubbing</em></li>
					<li class="available"><em>Unlimited Administrative Remedies</em></li>
					<li class="available"><em>Credit cards optimization programs</em></li>
					<li class="available"><em>On demand Debt Filtration</em></li>
					<li class="available"><em>Trade line enhancement programs</em></li>
				</ul>
			</div> <!-- .cd-pricing-features -->

			<footer class="cd-pricing-footer">
				<a href="#0">Select</a>
			</footer> <!-- .cd-pricing-footer -->
		</li>
		
		<li class="me-width">
			<header class="cd-pricing-header">
				<h2>Perfect Business Credit</h2>

				<div class="cd-price">
					<span>$99</span>
					<span>month</span>
				</div>
				<br>
				<div class="cd-price">
					<span>$999 down</span>
				</div>
			</header> <!-- .cd-pricing-header -->

			<div class="cd-pricing-features">
				<ul class="me-height">
					<li class="available"><em>Cancel Anytime</em></li>
					<li class="available"><em>Trade lines building</em></li>
					<li class="available"><em>Three bureau Score Builder Program</em></li>
					<li class="available"><em>Compliance filter</em></li>
					<li class="available"><em>Vendor Lines of Credit</em></li>
					<li class="available"><em>Integrate with Your Startup or Existing Business</em></li>
				</ul>
			</div> <!-- .cd-pricing-features -->

			<footer class="cd-pricing-footer">
				<a href="#0">Select</a>
			</footer> <!-- .cd-pricing-footer -->
		</li>
	</ul> <!-- .cd-pricing -->

	<div class="cd-form">
		
		<div class="cd-plan-info">
			content will be loaded using jQuery - according to the selected plan
		</div>

	<!-- 	<div class="cd-more-info">
			<h3>Need help?</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div> -->
		
		<form action="" method="post" class="pay-form">
			<fieldset>
				<legend>Account Info</legend>
				
				<div class="half-width">
					<label for="userName">Fisrt Name</label>
					<input required type="text" id="firstName" name="billing-address-first-name">
				</div>

				<div class="half-width">
					<label for="userName">Last Name</label>
					<input required type="text" id="lastName" name="billing-address-last-name">
				</div>
				
				<div class="half-width">
					<label for="userEmail">Email</label>
					<input required type="email" id="userEmail" name="billing-address-email" >
				</div>
				
				<div class="half-width">
					<label for="userPassword" style="margin-bottom: 10px !important;">Date of Birth</label> <br> 
					<input required type="date" id="userPassword" name="billing-drivers-license-dob">
				</div>
				
				<div class="half-width">
					<label for="userPasswordRepeat">SSN</label>
					<input required type="text" id="ssn" name="billing-social-security-number">
				</div>

				<div class="half-width">
					<label for="userPasswordRepeat">Billing Address</label>
					<input required type="text" id="billing-address-address1" name="billing-address-address1">
				</div>
				
			</fieldset>
			   	<fieldset>
				<legend>Credit Monitoring service</legend>
				
				<div class="half-width">
					<label for="userName">Username</label>
					<input required type="text" id="cmun" name="credit_monitoring_un">
				</div>

				<div class="half-width">
					<label for="userName">Password</label>
					<input required type="password" id="lastName" name="credit_monitoring_pw">
				</div>
			
			</fieldset>
			<fieldset>
				<legend>Payment Method</legend>
				
				<div>
					<ul class="cd-payment-gateways">
						<li>
							<input type="radio" name="payment-method" id="paypal" value="paypal">
							<label for="paypal">Paypal</label>
						</li>
						
						<li>
							<input type="radio" name="payment-method" id="card" value="card" checked>
							<label for="card">Card</label>
						</li>
					</ul> <!-- .cd-payment-gateways -->
				</div>
				
				<div class="cd-credit-card">
					<div>
						<p class="half-width">
							<label for="cardNumber">Card Number</label>
							<input required type="text" id="cardNumber" name="billing-cc-number">
						</p>

						<p class="half-width">
							<label>Expiration date</label>
							<input required type="text" id="card-expiry-month"  name="billing-cc-exp">
					
						</p>
						
						<p class="half-width">
							<label for="cardCvc">Card CVC</label>
							<input required type="text" id="cardCvc" name="cvv">
						</p>
					</div>
				</div> <!-- .cd-credit-card -->
			</fieldset>
			
			<fieldset>
				<div>
					<input  type="submit" value="Get started">
					<!-- <input id="btn-paypal" type="submit" value="continue"> -->
				</div>
			</fieldset>
		</form>

		<a href="#0" class="cd-close"></a>

	</div> <!-- .cd-form -->

<!-- <a href="#0" class="cd-popup-trigger">View Pop-up</a> -->

<div class="cd-popup" role="alert">
	<div class="cd-popup-container">
		<p><?php echo $message;  ?></p>
		<a href="#0" class="cd-popup-close img-replace"></a>
	</div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->
	
	<div class="cd-overlay"></div> <!-- shadow layer -->
<script src="assets/js/jquery-2.1.4.js"></script>
<script src="assets/js/velocity.min.js"></script>
<script src="assets/js/main.js"></script> <!-- Resource jQuery -->
<script type="text/javascript">
	jQuery(document).ready(function($){
		<?php
		if(!isset($_GET['token-id'])){
		?>
		document.getElementsByTagName('a')[<?php echo $_GET['type'] ?>].click();
		<?php
		}
		else if(!empty($message)){
		?>
		 jQuery('.cd-popup').addClass('is-visible');
		<?php
		}
		?>

	})
</script>
</body>
</html>