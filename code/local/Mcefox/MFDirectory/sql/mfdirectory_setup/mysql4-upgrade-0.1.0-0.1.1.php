<?php

$installer = $this;
$installer->startSetup();

$installer->run("
  ALTER TABLE `{$installer->getTable('mfdirectory/mfdirectory')}` ADD `lat` DOUBLE NULL AFTER `timestamp`, ADD `lon` DOUBLE  NULL AFTER `lat`;

");
$installer->endSetup();


?>