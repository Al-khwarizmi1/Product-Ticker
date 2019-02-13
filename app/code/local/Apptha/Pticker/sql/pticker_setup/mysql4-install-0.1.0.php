<?php

$installer = $this;

$installer->startSetup();

//create the 'Title for Product Ticker' attribute
$installer->addAttribute('catalog_product', 'tickertitle', array(
    'group' => 'Product Ticker',
    'label' => 'Title for Product Ticker',
    'type' => 'varchar',
    'input' => 'text',
    'default' => '',
    'class' => '',
    'backend' => '',
    'frontend' => '',
    'source' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'visible_in_advanced_search' => false,
    'unique' => false,
));
$installer->updateAttribute('catalog_product', 'tickertitle', 'is_global', Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE);

//create the 'Appear in Product Ticker' attribute
$installer->addAttribute('catalog_product', 'appearinticker', array(
    'group' => 'Product Ticker',
    'label' => 'Appear in Product Ticker',
    'type' => 'int',
    'input' => 'select',
    'default' => '',
    'class' => '',
    'backend' => '',
    'frontend' => '',
    'source' => 'eav/entity_attribute_source_boolean',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'visible_in_advanced_search' => false,
    'unique' => false,
    
));
$installer->updateAttribute('catalog_product', 'appearinticker', 'is_global', Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE);


$installer->run(" ");

$installer->endSetup(); 