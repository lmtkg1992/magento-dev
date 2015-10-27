<?php

$installer = $this;
$installer->startSetup();

$installer->run("
    CREATE TABLE `{$installer->getTable('mfdirectory/mfdirectory')}` (
      `directory_id` int(11) NOT NULL,
      `title` text,
      `description` text,
      `rating` int(10) DEFAULT NULL,
      `date` datetime DEFAULT NULL,
      `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
    );

    INSERT INTO `{$installer->getTable('mfdirectory/mfdirectory')}` (`directory_id`, `title`, `description`, `rating`, `date`, `timestamp`) VALUES
    (1, 'Cocacola', 'Hang nuoc uong ngon', 9, '2015-10-14 08:00:00', '2015-10-26 08:31:40'),
    (2, 'Pepsi', 'Day la hang nuoc giai khat voi chat luong kha tot', 8, '2015-10-13 00:00:00', '2015-10-26 08:33:02'),
    (3, 'Omo Unilever', 'Day la hang bot giat kha noi tieng', 7, NULL, '2015-10-26 09:19:47');

");
$installer->endSetup();


?>