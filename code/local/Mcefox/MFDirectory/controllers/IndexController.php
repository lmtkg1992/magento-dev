<?php
class Mcefox_MFDirectory_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        //echo 'Hello Index!';
        $this->loadLayout();
        $this->renderLayout();
    }

    public function goodbyeAction(){
        $this->loadLayout();
        $this->renderLayout();

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

    public function createAction(){
        $mfdirectory_model = Mage::getModel("mfdirectory/mfdirectory");
        $mfdirectory_model->setTitle('Tan Hiep Phat');
        $mfdirectory_model->setDescription('Day la hang nuoc giai khat mat day nhat viet Nam');
        $mfdirectory_model->setRating(1);

        $mfdirectory_model->save();
    }

    public function updateAction(){
        $mfdirectory_model = Mage::getModel("mfdirectory/mfdirectory");
        $mfdirectory_model->load(3);
        $mfdirectory_model->setTitle('Omo Unilever');
        $mfdirectory_model->save();
    }

    public function deleteAction(){
        $blogpost = Mage::getModel('mfdirectory/mfdirectory');
        $blogpost->load(4);
        $blogpost->delete();
    }

    public function testModelAction(){
        echo 'Seup Model!';
        $mfdirectory_model = Mage::getModel("mfdirectory/mfdirectory");
        $params = $this->getRequest()->getParams();
        echo("Loading the Directory with an ID of ".$params['id']);
        $mfdirectory_model->load($params['id']);
        $data = $mfdirectory_model->getData();

        echo '<pre>';
        print_r($data);
        die;
        //echo get_class($mfdirectory_model);
    }

    public function showAllAction(){
        $directories = Mage::getModel('mfdirectory/mfdirectory')->getCollection();

        foreach($directories as $directory){
            echo '<h3>'.$directory->getTitle().'</h3>';
            echo nl2br($directory->getDescription());
            echo '<br>';
            echo nl2br('Rating : '.$directory->getRating());
        }
        die;
        echo '<pre>';
        print_r($directories);
        die;

    }
}