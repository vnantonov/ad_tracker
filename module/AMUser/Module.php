<?php

namespace AMUser;

use Zend\Debug\Debug;
use Zend\Mvc\MvcEvent;

class Module {

//    public function onBootstrap(MvcEvent $e) {
//
//    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}