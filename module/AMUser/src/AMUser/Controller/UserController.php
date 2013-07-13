<?php
namespace AMUser\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Debug;
use Zend\Mvc\MvcEvent;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController {

    public function indexAction() {

    }

    public function loginAction() {
        $loginForm = $this->getServiceLocator()->get('form_login');

        return array(
            'form' => $loginForm
        );
    }

    public function logoutAction() {

    }

    public function registerAction() {

    }
}