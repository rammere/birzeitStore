<?php
class IndexController extends Zend_Controller_Action
{

    public function init()
    {
	$contextSwitch=$this->_helper->getHelper('contextSwitch');
	$contextSwitch->addActionContext('products','json')
			->initContext();
    }

    public function indexAction()
    {
        // action body
    }

    public function storyAction()
    {
    }

    public function productsAction()
    {

$product =new Application_Model_DbTable_Product();

$this->view->AllProducts=$product->getAllProduct();


    }

    public function contactUsAction()
    {
        // action body
    }

    public function locationAction()
    {
        // action body
    }


}









