<?php

class Apptha_Pticker_Model_Button
{

    public function toOptionArray()
    {
        return array(
            array('value'=>'gray', 'label'=>Mage::helper('adminhtml')->__('Gray')),
            array('value'=>'black', 'label'=>Mage::helper('adminhtml')->__('Black')),
            array('value'=>'white', 'label'=>Mage::helper('adminhtml')->__('White')),
        );
    }

}