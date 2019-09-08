<?php

require_once('app/Mage.php');
umask(0);
Mage::app();

$storeId =1;
$carrierCode = 'freeshipping_freeshipping';
$carrierCode = explode('_',$carrierCode);
//echo $carrierCode[0];
//$className = Mage::getStoreConfig('carriers/'.$carrierCode[0].'/model', $storeId);

 $collection = Mage::getModel('attune_shipper/courier')->getCollection();
        $array = array( array( 'value' => -1, 'label' => 'Please Select Courier' ) );
        foreach ( $collection as $record ) {
Zend_Debug::dump( $record );
        }
		

?>