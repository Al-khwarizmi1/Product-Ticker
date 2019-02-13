<?php

class Apptha_Pticker_Model_Mysql4_PTicker_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('pticker/pticker');
    }
}