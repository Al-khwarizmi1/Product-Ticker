<?php
class Apptha_Pticker_Block_Pticker extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
            
		return parent::_prepareLayout();
    }
    
     public function getPTicker()     
     { 
        if (!$this->hasData('pticker')) {
            $this->setData('pticker', Mage::registry('pticker'));
        }
        return $this->getData('pticker');
        
    }
    public function getProducts(){
        
        return Mage::getModel('pticker/pticker')->fetchProducts();
    }
}