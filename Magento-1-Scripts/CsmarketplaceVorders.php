<?php

require_once('app/Mage.php');
umask(0);
Mage::app();

$storeId =1;

$collection = Mage::getModel('csmarketplace/vproducts')->getCollection();

Zend_Debug::dump( $collection );

		

?>