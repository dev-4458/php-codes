<?php

require_once('app/Mage.php');
umask(0);
Mage::app();

$storeId = 1;
$attributes = Mage::getModel('csmarketplace/vendor_attribute')
                ->setStoreId($storeId)
                ->getCollection()
                ->addFieldToFilter('use_in_registration', array('gt' => 0))
                ->setOrder('position_in_registration', 'ASC');        
			//echo count($attributes);
			//Zend_Debug::dump( $attributes );
	
			$methods = Mage::getSingleton('shipping/config')->getActiveCarriers();
			$options = array();
			foreach($methods as $_ccode => $_carrier) {
				$_methodOptions = array();
				if($_methods = $_carrier->getAllowedMethods())
				{
					foreach($_methods as $_mcode => $_method)
					{
						$_code = $_ccode . '_' . $_mcode;
						$_methodOptions[] = array('value' => $_code, 'label' => $_method);
					}

					if(!$_title = Mage::getStoreConfig("carriers/$_ccode/title"))
						$_title = $_ccode;
					$options[] = array('value' => $_methodOptions, 'label' => $_title);
				}
			}

//Zend_Debug::dump( $options );

function getShippingMethods($_methods, $fieldId, $fieldName, $fieldClass) {
    $_shippingHtml = '<select name="' . $fieldName . '" id="' . $fieldId . '" class="' . $fieldClass . '">';
    foreach($_methods as $_carrierCode => $_carrier) {
        if($_method = $_carrier->getAllowedMethods())  {
            if(!$_title = Mage::getStoreConfig('carriers/' . $_carrierCode . ' /title')) {
                $_title = $_carrierCode;
            }
            $_shippingHtml .= '<optgroup label="' . strtoupper( $_title ). '">';
            foreach($_method as $_mcode => $_m) {
                $_code = $_carrierCode . '_' . $_mcode;
                $_shippingHtml .= '<option value="' . $_code . '">' . $_m . '</option>';
            }
            $_shippingHtml .= '</optgroup>';
        }
    }
    $_shippingHtml .= '</select>';
    return $_shippingHtml;
}
$_methods = Mage::getSingleton('shipping/config')->getActiveCarriers();
?>

<?php echo getShippingMethods( $_methods, 'shipping_method', 'shipping_method', 'shipping');  ?>
