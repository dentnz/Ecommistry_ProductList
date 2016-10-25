<?php
/**
 * Installer script to add/update a new product attribute, code 'handle_display' 
 *
 * @author Karl Lurman <karl.lurman@gmail.com>
 */

$installer = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->startSetup();

$installer->addAttribute('catalog_product', 'handle_display', array(
    'group'             			=> 'General',
    'label'             			=> 'Display in Ecommistry Product List',
    'type'              			=> 'int',
    'input'             			=> 'boolean',
    'frontend'          			=> '',
    'backend'						=> '',
    'visible'           			=> true,
    'required'          			=> false,
    'user_defined'      			=> true,
    'searchable'        			=> false,
    'filterable'        			=> false,
    'comparable'        			=> false,
    'visible_on_front'  			=> false,
    'used_in_product_listing' 		=> true,
    'visible_in_advanced_search' 	=> false,
    'unique'            			=> false,
    'global'            			=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE
));

$installer->endSetup();
