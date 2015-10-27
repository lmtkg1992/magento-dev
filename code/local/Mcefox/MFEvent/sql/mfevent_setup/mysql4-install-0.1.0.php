<?php
$installer = $this;
/*
$installer->addEntityType('mfevent_eavfevent',array(
        //entity_mode is the URL you'd pass into a Mage::getModel() call
        'entity_model'          =>'mfevent/eavfevent',
        //blank for now
        'attribute_model'       =>'',
        //table refers to the resource URI complexworld/eavblogpost
        //<complexworld_resource_eav_mysql4>...<eavblogpost><table>eavblog_posts</table>
        'table'         =>'mfevent/eavfevent',
        //blank for now, but can also be eav/entity_increment_numeric
        'increment_model'       =>'',
        //appears that this needs to be/can be above "1" if we're using eav/entity_increment_numeric
        'increment_per_store'   =>'0'
));
*/
/*$installer->createEntityTables(
    $this->getTable('mfevent/eavfevent')
);*/

$installer->installEntities();