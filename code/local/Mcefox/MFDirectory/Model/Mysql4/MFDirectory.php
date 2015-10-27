<?php
class Mcefox_MFDirectory_Model_Mysql4_MFDirectory extends Mage_Core_Model_Mysql4_Abstract{
    protected function _construct()
    {
        $this->_init('mfdirectory/mfdirectory', 'directory_id');
    }
}