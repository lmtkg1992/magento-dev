<?php
class Mcefox_MFEvent_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction()
    {
        $feventmodel = Mage::getModel('mfevent/eavfevent');

        $feventmodel->load(1);

       // $config = Mage::getStoreConfig('mfeventconfig/messages/number_event_on_block');

        /*echo '<pre>';
        print_r($config);
        die;*/

        /*echo '<pre>';
        print_r($feventmodel->getData());
        die;*/
        echo 'Hello Index!';
    }

    public function viewConfigSystemAction(){
        header('Content-Type: text/plain');
        echo '<pre>';
        echo $config = Mage::getConfig()
            ->loadModulesConfiguration('system.xml')
            ->getNode()
            ->asXML();
        exit;
    }
    public function populateEntriesAction() {
        for($i=0;$i<10;$i++) {
            $feventmodel= Mage::getModel('mfevent/eavfevent');
            $feventmodel->setTitle('Event '.$i);
            $feventmodel->save();
        }

        echo 'Done';
    }

    public function showCollectionAction() {
        $feventmodel = Mage::getModel('mfevent/eavfevent');
        $entries = $feventmodel->getCollection()->addAttributeToSelect('*');
        $entries->load();

        foreach($entries as $entry)
        {
            // var_dump($entry->getData());
            echo '<h3>'.$entry->getTitle().'</h3>';
        }
        echo '<br>Done<br>';
    }

}