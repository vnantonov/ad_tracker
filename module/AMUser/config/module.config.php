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
        ),
    ),

    'router' => array(
        'routes' => array(
            'amuser' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/user[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'amuser',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

);