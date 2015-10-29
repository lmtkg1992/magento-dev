<?php

class BC_Search_Model_Source_Product_Attribute {

    public $_entityTypeId = null;
    public function getEntityTypeId()
    {
        if (!$this->_entityTypeId) {
            $collection = Mage::getResourceModel('eav/entity_type_collection');
            $collection->getSelect()
                ->reset(Zend_Db_Select::COLUMNS)
                ->columns(array('entity_type_id'))
                ->where('entity_type_code = ?', 'catalog_product')
                ->limit(1)
            ;
            $this->_entityTypeId = $collection->getFirstItem()->getData('entity_type_id');
        }
        return $this->_entityTypeId;
    }
}