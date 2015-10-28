<?php
class Mcefox_MFEvent_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction()
    {
        $obj1 = new Varien_Object();
        $obj1->setName('A');
        $obj1->setAge(3);

        $obj2 = new Varien_Object();
        $obj2->setName('B');
        $obj2->setAge(4);

        $obj3 = new Varien_Object();
        $obj3->setName('C');
        $obj3->setAge(5);


        $collections = new Varien_Data_Collection();
        $collections->addItem($obj1)->addItem($obj2)->addItem($obj3);

        $collection_of_products = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('meta_title')->addAttributeToSelect('price')->addFieldToFilter('sku',array(array('like'=>'%car1%'),array('like'=>'%car2%')))->addFieldToFilter('price',array('lt'=>100)) ;
        echo '<pre>';
        foreach($collection_of_products as $product){
            print_r($product->getName());
        }


       // var_dump((string)Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('meta_title')->addAttributeToSelect('price')->addFieldToFilter('sku',array(array('like'=>'%car1%'),array('like'=>'%car2%')))->addFieldToFilter('price',array('lt'=>100))->getSelect());
        die;
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