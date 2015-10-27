<?php
class Mcefox_MFEvent_Model_Typeview {
    public function toOptionArray(){
        return array(
            array('value'=>1, 'label'=>Mage::helper('mfevent')->__('Grid View')),
            array('value'=>2, 'label'=>Mage::helper('mfevent')->__('List View')),
            array('value'=>3, 'label'=>Mage::helper('mfevent')->__('Map View'))
        );
    }
}