<?php 
include '/app/Mage.php';
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);
Mage::app('default');
Mage::register('isSecureArea', 1);

for($i=1;$i<=9;$i++){
  $process= Mage::getModel('index/process')->load($i)->reindexAll();
  //Zend_Debug::dump( $process->getMatchedEntities() );
}
