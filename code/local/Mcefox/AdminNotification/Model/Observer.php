<?php

class Mcefox_AdminNotification_Model_Observer {

    public function overwrittenPreDispatch(Varien_Event_Observer $observer) {
        Mage::log("overwritePreDispatch",null,"overwiteobserve.log");
        // noua logica din observer
    }
}