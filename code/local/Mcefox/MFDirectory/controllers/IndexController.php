<?php
class Mcefox_MFDirectory_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        echo 'Hello Index!';
    }

    public function testAction(){
        echo 'This is test Action! with some params';
        echo '<dl>';
        foreach($this->getRequest()->getParams() as $key=>$value) {
            echo '<dt><strong>Param: </strong>'.$key.'</dt>';
            echo '<dl><strong>Value: </strong>'.$value.'</dl>';
        }
        echo '</dl>';

    }
}