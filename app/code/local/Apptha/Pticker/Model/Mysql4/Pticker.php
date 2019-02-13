<?php

class Apptha_PTicker_Model_Mysql4_PTicker extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the pticker_id refers to the key field in your database table.
        $this->_init('pticker/pticker', 'pticker_id');
    }
}