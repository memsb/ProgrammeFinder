<?php
require_once(dirname(dirname(__FILE__)) . '/vendor/autoload.php');

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initRoutes() {
        $this->bootstrap('frontcontroller');
        $front = Zend_Controller_Front::getInstance();
        $router = $front->getRouter();
        $myRoutes = new Zend_Config_Ini(APPLICATION_PATH . '/configs/routes.ini', 'production');
        $router->addConfig($myRoutes, 'routes');
    }
}