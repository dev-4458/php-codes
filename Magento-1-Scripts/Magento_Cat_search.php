<global>
        <models>
            <catalogsearch>
                <rewrite>
                    <advanced>Attune_Catalogsearch_Model_Advanced</advanced>
                </rewrite>
            </catalogsearch>
            <catalogsearch_resource>
                <rewrite>
                    <advanced>Attune_Catalogsearch_Model_Resource_Advanced</advanced>
                </rewrite>
            </catalogsearch_resource>
        </models>
</global>
	

=============================================================================================================
					Catalogsearch/Model/Advanced.php
=============================================================================================================
$collection = $this->_engine->getAdvancedResultCollection();
Mage::log($collection->getSelect()->__toString(),null,'adv-coll.log');

=============================================================================================================
	2016-03-25T06:56:02+00:00 DEBUG (7): SELECT `e`.* FROM `catalog_product_entity` AS `e`			
=============================================================================================================


SELECT DISTINCT `e`.*, `price_index`.`price`, `price_index`.`tax_class_id`, `price_index`.`final_price`, IF(price_index.tier_price IS NOT NULL, LEAST(price_index.min_price, price_index.tier_price), price_index.min_price) AS `minimal_price`, `price_index`.`min_price`, `price_index`.`max_price`, `price_index`.`tier_price`, `cat_index`.`position` AS `cat_index_position` FROM `catalog_product_entity` AS `e`
 
 INNER JOIN `catalog_product_index_price` AS `price_index` ON price_index.entity_id = e.entity_id AND price_index.website_id = '1' AND price_index.customer_group_id = 0
 
 INNER JOIN `catalog_category_product_index` AS `cat_index` ON cat_index.product_id=e.entity_id AND cat_index.store_id='1' AND cat_index.visibility IN(3, 4) AND cat_index.category_id = '3'
 
 INNER JOIN `catalog_product_index_eav` AS `a_81` ON e.entity_id=a_81.entity_id  AND a_81.attribute_id=81 AND a_81.store_id=1 WHERE (price_index.min_price  * 1 >= 10.000000) AND (a_81.value IN('6')) AND (`e`.`entity_id` IN(
	SELECT `t1`.`entity_id` FROM `catalog_product_entity_varchar` AS `t1`
	LEFT JOIN `catalog_product_entity_varchar` AS `t2` ON t1.entity_id = t2.entity_id 
	AND t1.attribute_id = t2.attribute_id AND t2.store_id=1 
	WHERE (t1.store_id = 0) AND (t1.attribute_id = 71) AND (t1.entity_id = price_index.entity_id) 
	AND (IFNULL(t2.value, t1.value) LIKE '%acc%')))