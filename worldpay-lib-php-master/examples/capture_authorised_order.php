
<?php
/**
 * PHP library version: 1.8
 */
require_once('../lib/worldpay.php');

// Initialise Worldpay class with your SERVICE KEY
$worldpay = new Worldpay("your-service-key");

// Sometimes your SSL doesnt validate locally
// DONT USE IN PRODUCTION
$worldpay->disableSSLCheck(true);

$worldpayOrderCode = $_POST['orderCode'];
$amount = $_POST['amount'];

include("header.php");

// Try catch
try {
    // Capture the authorised order using the Worldpay order code
    $worldpay->captureAuthorisedOrder($worldpayOrderCode, $amount*100);
    $response = 'Authorised order <span id="order-code">'.$worldpayOrderCode.'</span> has been captured for ';
    $response .= (!empty($amount)) ? '<span id="amount">'. $amount .'</span>' : 'the full amount';    
    echo $response;
                      
} catch (WorldpayException $e) {
    // Worldpay has thrown an exception
    echo 'Error code: ' . $e->getCustomCode() . '<br/> 
    HTTP status code:' . $e->getHttpStatusCode() . '<br/> 
    Error description: ' . $e->getDescription()  . ' <br/>
    Error message: ' . $e->getMessage();
}
