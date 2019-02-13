<?php
class Apptha_Pticker_Block_Adminhtml_Pticker extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_pticker';
    $this->_blockGroup = 'pticker';
    $this->_headerText = Mage::helper('pticker')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('pticker')->__('Add Item');
    parent::__construct();
  }
}