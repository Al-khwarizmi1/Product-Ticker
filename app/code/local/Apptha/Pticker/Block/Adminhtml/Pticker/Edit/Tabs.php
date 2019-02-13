<?php

class Apptha_Pticker_Block_Adminhtml_Pticker_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('pticker_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('pticker')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('pticker')->__('Item Information'),
          'title'     => Mage::helper('pticker')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('pticker/adminhtml_pticker_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}