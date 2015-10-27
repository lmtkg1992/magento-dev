<?php
class Mcefox_MFEvent_Model_Resource_Eav_Mysql4_EavFevent extends Mage_Eav_Model_Entity_Abstract{
    public function _construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('mfevent_eavfevent');
        $this->setConnection(
            $resource->getConnection('mfevent_read'),
            $resource->getConnection('mfevent_write')
        );
    }
}