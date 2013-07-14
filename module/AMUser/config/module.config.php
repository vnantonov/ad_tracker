<?php

return array(
    'view_manager' => array(
        'template_path_stack' => array(
            'amuser' => __DIR__ . '/../view',
        ),
    ),

    'controllers' => array(
        'invokables' => array(
            'amuser' => 'AMUser\Controller\UserController',
            'ampermission' => 'AMUser\Controller\PermissionController'
        ),
    ),

//    'service_manager' => array(
//        'factories'=> array(
//            'form_login'=> function ($serviceManager) {
//                $form = new AMUser\Form\Login('login_form');
//                return $form;
//            }
//        ),
//    ),

    'service_manager' => array(
        'factories' => array(
            'user_mapper' => function ($sm) {
                $mapper = new AMUser\Mapper\User();
                $mapper->setDbAdapter($sm->get('Zend\Db\Adapter\Adapter'));
                $mapper->setEntityPrototype(new \ZfcUser\Entity\User());
                //                $mapper->setHydrator(new Mapper\UserHydrator());
                //                $mapper->setTableName($options->getTableName());
                return $mapper;
            },
        ),
    ),

    'router' => array(
        'routes' => array(
            'amuser' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/am-user',
                    'defaults' => array(
                        'controller' => 'amuser',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'permission' => array(
                        'type' => 'Literal',
                        'options'=> array(
                            'route' => '/permission',
                            'defaults'=> array(
                                'controller' => 'ampermission',
                                'action' => 'index'
                            ),
                        ),
                    ),
//                    'login' => array(
//                        'type' => 'Literal',
//                        'options' => array(
//                            'route' => '/login',
//                            'defaults' => array(
//                                'controller' => 'amuser',
//                                'action'     => 'login',
//                            ),
//                        ),
//                    ),
                ),
            ),
        ),
    ),

);