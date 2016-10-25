<?php
/**
 * Product List customer account block
 *
 * @package     Ecommistry_ProductList
 * @author      Karl Lurman <karl.lurman@gmail.com>
 */
class Ecommistry_ProductList_Block_Productlist extends Mage_Core_Block_Template
{
    /**
     * Get the set of products that have the handle_display set to 1. If a product limit is set, load just that limit.
     *
     * @return Collection $products Loaded collection of products
     */
    public function getProducts() {

        $products = Mage::getModel('catalog/product')->getCollection()
            ->addAttributeToFilter('handle_display', '1')
            ->addAttributeToSelect('*')
            ->addUrlRewrite()
            ->addPriceData()
            ->addStoreFilter(Mage::app()->getStore()->getStoreId());

        $limit = Mage::getStoreConfig(
                'ecommistry_productlist/ecommistry_productlistoptions/ecommistry_productlistlimit',
                Mage::app()->getStore()->getStoreId());

        if ($limit) {
            $products->setCurPage(1)
                ->setPageSize((int)$limit);
        }

        return $products->load();
    }

    /**
     * Get the current display mode as supplied via the URL query
     *
     * @return String 'list'|'slider'
     */
    public function getMode() {
        $mode = $this->getRequest()->getParam('mode');
        // Sanitise the input
        if ($mode === 'slider') {
            return 'slider';
        } else {
            return 'list';
        }
    }
}
