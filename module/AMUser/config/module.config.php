<?php

return array(
    'view_manager' => array(
        'template_path_stack' => array(
            'amuser' => __DIR__ . '/../view',
        ),
    ),
    /*
    'controllers' => array(
        'invokables' => array(
            'amuser' => 'AMUser\Controller\UserController',
        ),
    ),

    'service_manager' => array(
        'factories'=> array(
            'form_login'=> function ($serviceManager) {
                $form = new AMUser\Form\Login('login_form');
                return $form;
            }
        ),
    ),

    'router' => array(
        'routes' => array(
            'amuser' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/user',
                    'defaults' => array(
                        'controller' => 'amuser',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'login' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/login',
                            'defaults' => array(
                                'controller' => 'amuser',
                                'action'     => 'login',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    */
);