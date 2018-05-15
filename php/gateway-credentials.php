<?php

// API Setup parameters
$gatewayURL = isset($_GET['gateway']) && $_GET['gateway'] == 'payleap' ? 'https://leap.transactiongateway.com/api/v2/three-step' : 'https://www.paypal.com/cgi-bin/webscr';
//leap pay apikey
$APIKey = 'u8X5x46Cp6mj7U7Y2Y855fMSBfQ9UDD3';
$response_code = 
array('100' => 'Thanks for using our service, your payment has been processed.',
'200' => 'Transaction was declined by processor.',
'201' => 'Do not honor.',
'202' => 'Insufficient funds.',
'203' => 'Over limit.',
'204' => 'Transaction not allowed.',
'220' => 'Incorrect payment information.',
'221' => 'No such card issuer.',
'222' => 'No card number on file with issuer.',
'223' => 'Expired card.',
'224' => 'Invalid expiration date.',
'225' => 'Invalid card security code.',
'226' => 'Invalid PIN.',
'240' => 'Call issuer for further information.',
'250' => 'Pick up card.',
'251' => 'Lost card.',
'252' => 'Stolen card.',
'253' => 'Fraudulent card.',
'260' => 'Declined with further instructions available. (See response text)',
'261' => 'Declined-Stop all recurring payments.',
'262' => 'Declined-Stop this recurring program.',
'263' => 'Declined-Update cardholder data available.',
'264' => 'Declined-Retry in a few days.',
'300' => 'Transaction was rejected by gateway.',
'400' => 'Transaction error returned by processor.',
'410' => 'Invalid merchant configuration.',
'411' => 'Merchant account is inactive.',
'420' => 'Communication error.',
'421' => 'Communication error with issuer.',
'430' => 'Duplicate transaction at processor.',
'440' => 'Processor format error.',
'441' => 'Invalid transaction information.',
'460' => 'Processor feature not available.',
'461' => 'Unsupported card type.');

?>