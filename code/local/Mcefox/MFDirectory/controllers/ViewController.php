<?php
class Mcefox_MFDirectory_ViewController extends Mage_Core_Controller_Front_Action {
    public function detailAction() {
        $id = $this->getRequest()->getParam("id");
        echo 'This is document directory with id '.$id;
    }

    public function testAction(){
    }
}