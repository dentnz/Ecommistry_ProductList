<?php
/**
 * Product List controller - restricted to logged in customers
 *
 * @package     Ecommistry_ProductList
 * @author      Karl Lurman <karl.lurman@gmail.com>
 */
class Ecommistry_ProductList_IndexController extends Mage_Core_Controller_Front_Action
{   
    public function indexAction()
    {
        if (!Mage::getSingleton('customer/session')->isLoggedIn()) {
            $this->_redirect('customer/account/login');
            return;
        }

        // else
        $this->loadLayout();
        $this->renderLayout();
    }
}
