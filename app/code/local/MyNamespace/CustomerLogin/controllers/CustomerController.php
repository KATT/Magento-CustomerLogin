<?php

// Include parent
require_once 'Mage/Adminhtml/controllers/CustomerController.php';

class MyNamespace_CustomerLogin_CustomerController extends Mage_Adminhtml_CustomerController {

    function loginAction() {
        $customerID = (int) $this->getRequest()->getParam('id');


        $session = $this->_getSession();

        $session->loginById($customerID);

        $this->_redirectUrl(Mage::getBaseUrl());
    }

    /**
     * Retrieve customer session model object
     *
     * @return Mage_Customer_Model_Session
     */
    protected function _getSession() {
        return Mage::getSingleton('customer/session');
    }

}