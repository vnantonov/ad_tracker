<?php
namespace AMUser\Form;

use Zend\Debug\Debug;
use Zend\Form\Form;

class Login extends Form {

    public function __construct($name = 'login_form', $options = array()) {
        parent::__construct($name, $options);

        $this->add(array(
            'type' => 'text',
            'name' => 'login',
            'options' => array(
                'label' => 'Login'
            ),
            'attributes' => array(
                'id' => 'login'
            )
        ));
        $this->add(array(
            'type' => 'password',
            'name' => 'password',
            'options' => array(
                'label' => 'Password'
            ),
            'attributes' => array(
                'id' => 'password'
            )
        ));

        $this->add(array(
            'type' => 'submit',
            'name' => 'submit',
            'attributes' => array(
                'value' => 'Login',
                'id' => 'submitbutton',
                'class' => 'btn btn-success'
            ),
        ));
    }

}