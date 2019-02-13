<?php

class Apptha_Pticker_Block_Adminhtml_Pticker_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'pticker';
        $this->_controller = 'adminhtml_pticker';
        
        $this->_updateButton('save', 'label', Mage::helper('pticker')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('pticker')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('pticker_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'pticker_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'pticker_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('pticker_data') && Mage::registry('pticker_data')->getId() ) {
            return Mage::helper('pticker')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('pticker_data')->getTitle()));
        } else {
            return Mage::helper('pticker')->__('Add Item');
        }
    }
}