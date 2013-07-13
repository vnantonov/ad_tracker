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
        $request = $this->getRequest();


        if ($request->isPost()) {
            $loginForm->setData($request->getPost());
            if ($loginForm->isValid()) {
                // Autenticate
            }
        }

        return array(
            'form' => $loginForm
        );
    }

    public function logoutAction() {

    }

    public function registerAction() {

    }

    protected function autenticate($data) {

    }
}