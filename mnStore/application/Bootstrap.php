<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

 function _initViewHelpers()
         {

$view = new Zend_View();
 $view->addHelperPath('ZendX/JQuery/View/Helper/', 'ZendX_JQuery_View_Helper');
	 Zend_Controller_Front::getInstance()->getBaseUrl();
	 
	 
	$viewRenderer = new Zend_Controller_Action_Helper_ViewRenderer();
	  $viewRenderer->setView($view);
	  Zend_Controller_Action_HelperBroker::addHelper($viewRenderer);
	ZendX_JQuery::enableView($view);
	ZendX_JQuery::enableView($view);
	ZendX_JQuery::enableView($view);
	$view->JQuery()->enable();
	$view->JQuery()->uiEnable();
		}

		}

