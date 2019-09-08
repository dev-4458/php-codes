Mega menu problems
http://www.magentech.com/documentation/how-to-fix-sm-megamenu-error-when-update-to-magento-v1-9-2-0/

WorldPay Integration
https://www.sellxed.com/shop/en/magento-worldpay-zahlungs-extension.html
https://github.com/PHOENIX-MEDIA/Magento-WorldPay
http://www.adaodesign.com/setting-up-magento-ce-with-worldpay/
https://github.com/Worldpay/worldpay-magento

Template Hints in Admin Panel Magento
http://www.classyllama.com/blog/enable-templateblock-hints-in-admin-panel

http://ext.topmage.com/how-it-works

http://www.mootpoint.org/blog/magento-bulk-product-import-images/
http://connect20.magentocommerce.com/community/Bulk_Update_All_Product_Prices

http://cedcommerce.com/magento-extensions/marketplace-platinum


---------------------------------------------------------------------------------

Magento Tutorial
http://devdocs.magento.com/guides/m1x/magefordev/mage-for-dev-3.html

---------------------------------------------------------------------------------
Magento SMS
https://www.magentocommerce.com/magento-connect/sms-text-messaging-powered-by-24x.html
https://www.magentocommerce.com/magento-connect/mage-sms-sms-notification-sms-marketing-1.html
http://www.mage-sms.com/demo.html
---------------------------------------------------------------------------------
Zend_Debug::dump($productConfigs);

Zend_Debug::dump($select->__toString()); die();

Zend_Debug::dump( $collection->getSelect()->__toString() ); die();

echo '<pre>';
	print_r(get_class_methods($read));
echo '</pre>';
exit();

//Magento 2 css js not showing
=============================================================================
http://magento.stackexchange.com/questions/68950/magento-1-9-1-order-details-are-not-displayed-in-admin-dashboard
//$links = [];
$links = array();

=============================================================================
			
php bin/magento setup:static-content:deploy
php bin/magento indexer:reindex
make sure apache "rewrite_module" is enable and then restart the server
delete cache folder under var/cache

//Magento 2 Reindex module
php bin/magento indexer:reindex

From magento commerece.

composer.phar global config http-basic.repo.magento.com 20ef555a6e6bbda5f66ed1f99572fa3e 89b372761d45292fa3f6bec3133efb9b

1ab9b3e7d49b6ab237bde9009738eed0:KTgmqye2jK73AWI9rRyC3swccxfTVlaT

///////////////////////////////////////////////////
LOCK TABLES `admin_role` WRITE , `admin_user` WRITE;
 
SET @SALT = "rp";
SET @PASS = CONCAT(MD5(CONCAT( @SALT , "magento@123") ), CONCAT(":", @SALT ));
SELECT @EXTRA := MAX(extra) FROM admin_user WHERE extra IS NOT NULL;
 
INSERT INTO `admin_user` (firstname,lastname,email,username,password,created,lognum,reload_acl_flag,is_active,extra,rp_token_created_at) 
VALUES ('Firstname','Lastname','email@example.com','magento',@PASS,NOW(),0,0,1,@EXTRA,NOW());
 
INSERT INTO `admin_role` (parent_id,tree_level,sort_order,role_type,user_id,role_name) 
VALUES (1,2,0,'U',(SELECT user_id FROM admin_user WHERE username = 'magento'),'Firstname');
 
UNLOCK TABLES;


SELECT DISTINCT `main_table`.* FROM `attune_rating_rating` AS `main_table`
 INNER JOIN `attune_rating_rating_store` AS `store` ON main_table.rating_id = store.rating_id WHERE (store.store_id IN('1')) ORDER BY main_table.position ASC

================================================================================================
 

//console.log(optionsPrice);
//var roundedPrice = (Math.round(price*100)/100).toString();
//$_savePercent = 100 - round(($_finalPrice / $_price) * 100); 
//$_saveAmount = number_format(($_price - $_finalPrice), 2); 
savePercent = parseFloat( 100 - (Math.round((optionsPrice.productPrice/optionsPrice.productOldPrice) * 100))).toString() ;
saveAmount = parseFloat(optionsPrice.productOldPrice - optionsPrice.productPrice); 
console.log( 'Percent:'+savePercent );
console.log( 'Amount:'+saveAmount);	
		

================================================================================================


TRUNCATE log_customer;
TRUNCATE log_quote;
TRUNCATE log_summary;
TRUNCATE log_url;
TRUNCATE log_url_info;
TRUNCATE log_visitor;
TRUNCATE log_visitor_info;
TRUNCATE log_visitor_online;
================================================================================================

http://demo.cedcommerce.com/magento/marketplace/platinum/index.php/csmultishipping/settings/index/

https://magently.com/blog/magento-toplinks-part-ii/
public function addLink($label, $url='', $title='', $prepare=false, $urlParams=array(),
    $position=null, $liParams=null, $aParams=null, $beforeText='', $afterText='')
{
	
	SET FOREIGN_KEY_CHECKS = 0;
	DROP TABLE `sandy_marketplace_eav_attribute`, `sandy_marketplace_vendor`, `sandy_marketplace_vendor_comment`, `sandy_marketplace_vendor_comment_store`, `sandy_marketplace_vendor_datetime`, `sandy_marketplace_vendor_decimal`, `sandy_marketplace_vendor_int`, `sandy_marketplace_vendor_product`, `sandy_marketplace_vendor_text`, `sandy_marketplace_vendor_varchar`;
	SET FOREIGN_KEY_CHECKS = 1;

Your Authentication code is : ()gN!CkKOb

	
cms/block
catalog/product_list
ultimo/product_list_featured
ultraslideshow/slideshow
brands/brands
ultramegamenu/navigation

connect20.magentocommerce.com/community/Mage_All_Latest
http://connect20.magentocommerce.com/community/Apptrian_Image_Optimizer

Drop ship
https://github.com/evinw/project_bloom_magento/tree/master/app/etc/modules
https://github.com/vigneshacker/gavekort
https://github.com/consciousbox/consciousbox
https://github.com/DnyaneshwarJ/kitnekaa_backup
https://github.com/DnyaneshwarJ/kitnekaa_backup.git

MageGiant
https://github.com/igrik10/norma/tree/master/app/code/local/Magegiant

Apptha - secoond one full package
https://github.com/asridhar0107/main
https://github.com/mamun1980/charlishop
https://github.com/Rafaelolmartins/okulosstore

Good for education more then 100 modules.
https://github.com/xiaoguizhidao/blingjewelry-prod

https://github.com/nhutnguyenvu/muafast
https://github.com/tannerjcox/scarvesdotnet
https://github.com/mrimran/ecart
https://github.com/mallerp/remade-in-britain
https://github.com/dalethdaleth/comp-amaze
https://github.com/sdwalden/bb
https://github.com/johnny5alive/the-baby-guy

cmminds
https://github.com/programmerrahul/vastecom
https://github.com/arsenalDimaPerederiy/myNew

https://github.com/protechhelp/gamamba

https://github.com/reachingtech/reachingtech/tree/master/app/code/core/Makingware
https://github.com/ashfaqphplhr/artificiallawnsforturf
https://github.com/zvezdovs/devfashion

Enterprise Edition
https://github.com/Rodrifer/candyclub
https://github.com/duonghoangbluecom/born

//Magento Mobile Application

https://github.com/tappz/magento
----------------------------------------------------------------------------------------------------------------------------

SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE `catalog_product_bundle_option`;
TRUNCATE TABLE `catalog_product_bundle_option_value`;
TRUNCATE TABLE `catalog_product_bundle_selection`;
TRUNCATE TABLE `catalog_product_entity_datetime`;
TRUNCATE TABLE `catalog_product_entity_decimal`;
TRUNCATE TABLE `catalog_product_entity_gallery`;
TRUNCATE TABLE `catalog_product_entity_int`;
TRUNCATE TABLE `catalog_product_entity_media_gallery`;
TRUNCATE TABLE `catalog_product_entity_media_gallery_value`;
TRUNCATE TABLE `catalog_product_entity_text`;
TRUNCATE TABLE `catalog_product_entity_tier_price`;
TRUNCATE TABLE `catalog_product_entity_varchar`;
TRUNCATE TABLE `catalog_product_link`;
TRUNCATE TABLE `catalog_product_link_attribute`;
TRUNCATE TABLE `catalog_product_link_attribute_decimal`;
TRUNCATE TABLE `catalog_product_link_attribute_int`;
TRUNCATE TABLE `catalog_product_link_attribute_varchar`;
TRUNCATE TABLE `catalog_product_link_type`;
TRUNCATE TABLE `catalog_product_option`;
TRUNCATE TABLE `catalog_product_option_price`;
TRUNCATE TABLE `catalog_product_option_title`;
TRUNCATE TABLE `catalog_product_option_type_price`;
TRUNCATE TABLE `catalog_product_option_type_title`;
TRUNCATE TABLE `catalog_product_option_type_value`;
TRUNCATE TABLE `catalog_product_super_attribute`;
TRUNCATE TABLE `catalog_product_super_attribute_label`;
TRUNCATE TABLE `catalog_product_super_attribute_pricing`;
TRUNCATE TABLE `catalog_product_super_link`;
TRUNCATE TABLE `catalog_product_enabled_index`;
TRUNCATE TABLE `catalog_product_website`;
TRUNCATE TABLE `catalog_product_entity`;
TRUNCATE TABLE `cataloginventory_stock`;
TRUNCATE TABLE `cataloginventory_stock_item`;
TRUNCATE TABLE `cataloginventory_stock_status`;
TRUNCATE TABLE `catalog_product_link`;
TRUNCATE TABLE `catalog_product_link_type`;
TRUNCATE TABLE `catalog_product_option`;
TRUNCATE TABLE `catalog_product_option_type_value`;
TRUNCATE TABLE `catalog_product_super_attribute`;
TRUNCATE TABLE `catalog_product_entity`;
TRUNCATE TABLE `cataloginventory_stock`;
TRUNCATE TABLE `catalog_category_product`;
SET FOREIGN_KEY_CHECKS = 1;

insert  into `catalog_product_link_type`(`link_type_id`,`code`) values (1,'relation'),(2,'bundle'),(3,'super'),(4,'up_sell'),(5,'cross_sell');
insert  into `catalog_product_link_attribute` (`product_link_attribute_id`,`link_type_id`,`product_link_attribute_code`,`data_type`) 
values (1,2,'qty','decimal'),(2,1,'position','int'),(3,4,'position','int'), (4,5,'position','int'),(6,1,'qty','decimal'),(7,3,'position','int'), (8,3,'qty','decimal');
insert  into `cataloginventory_stock`(`stock_id`,`stock_name`) values (1,'Default');

---------------------------------------------------------------------------------------------------------


http://magecom.net/how-to-improve-magento-websites-search-almost-everything-you-have-to-know/