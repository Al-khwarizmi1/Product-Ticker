<?php

class Apptha_Pticker_Model_Animation
{

    public function toOptionArray()
    {
        return array(
            array('value'=>'fade', 'label'=>Mage::helper('adminhtml')->__('Fade')),
            array('value'=>'horizontal-slide', 'label'=>Mage::helper('adminhtml')->__('Horizontal Slide')),
            array('value'=>'vertical-slide', 'label'=>Mage::helper('adminhtml')->__('Vertical Slide')),
        );
    }

}