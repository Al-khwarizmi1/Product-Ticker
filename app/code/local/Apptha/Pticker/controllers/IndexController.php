<?php
class Apptha_Pticker_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/pticker?id=15 
    	 *  or
    	 * http://site.com/pticker/id/15 	
    	 */
    	/* 
		$pticker_id = $this->getRequest()->getParam('id');

  		if($pticker_id != null && $pticker_id != '')	{
			$pticker = Mage::getModel('pticker/pticker')->load($pticker_id)->getData();
		} else {
			$pticker = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($pticker == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$ptickerTable = $resource->getTableName('pticker');
			
			$select = $read->select()
			   ->from($ptickerTable,array('pticker_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$pticker = $read->fetchRow($select);
		}
		Mage::register('pticker', $pticker);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}