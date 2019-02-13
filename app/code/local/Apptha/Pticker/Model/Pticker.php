<?php

class Apptha_Pticker_Model_Pticker extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('pticker/pticker');
    }

    public function fetchProducts() {
        $_productCollection = Mage::getModel('catalog/product')->getCollection();
        $_productCollection->addFieldToFilter(array
            (array('attribute' => 'Status', 'eq' => '1'),
        ));
        $_productCollection->addFieldToFilter(array
            (array('attribute' => 'appearinticker', 'eq' => '1'),
        ));

        $product = array();
        $linkText= Mage::getStoreConfig('pticker/color/linktext');
        if($linkText == ''){$linkText = 100;}
        if (count($_productCollection) > 0) {
            $count = 0;
            $i = 0;
            foreach ($_productCollection as $_product) {
                $model = Mage::getModel('catalog/product');
                $_product = $model->load($_product->getId());
                $title= $_product->getTickertitle();
                if($title == ''){$title = $_product->getName();}
                if(strlen($title) > $linkText){
                $title = substr($title,0, $linkText);
                $title .= '...';
                }
                $product[$i]['title'] = htmlspecialchars($title);
                $product[$i]['link'] = $model->getProductUrl($_product);
                $i++;
            }
        }
       // print_r($product);
        return $product;
    }

}