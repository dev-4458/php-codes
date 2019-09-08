<?php  
include "worldpay.php";
$worldpay = new Worldpay('T_S_ecd2bf31-dd9d-47e9-bc4a-df2d9a35e921');
 
$billing_address = array(
    "address1"=>'123 House Road',
    "address2"=> 'A village',
    "address3"=> '',
    "postalCode"=> 'EC1 1AA',
    "city"=> 'London',
    "state"=> '',
    "countryCode"=> 'GB',
);
 
try {
    $response = $worldpay->createOrder(array(
        'token' => 'your-order-token',
        'amount-in-cents' => 500,
		'amount' => 500,
		'disable_ssl' => false,
        'currencyCode' => 'GBP',
        'name' => 'test name',
        'billingAddress' => $billing_address,
        'orderDescription' => 'Order description',
        'customerOrderCode' => 'Order code'
    ));
    if ($response['paymentStatus'] === 'SUCCESS') {
        $worldpayOrderCode = $response['orderCode'];
    } else {
        throw new WorldpayException(print_r($response, true));
    }
} catch (WorldpayException $e) {
    echo '<pre> Error code: ' .$e->getCustomCode() .'
    HTTP status code:' . $e->getHttpStatusCode() . '
    Error description: ' . $e->getDescription()  . '
    Error message: ' . $e->getMessage();
} catch (Exception $e) {
    echo 'Error message: '. $e->getMessage();
}
?>