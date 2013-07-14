<?php
namespace AMUser\View\Helper;

use Zend\ServiceManager\ServiceManager;
use Zend\View\Helper\AbstractHelper;
use Zend\Debug;

class UserList extends AbstractHelper
{
    protected $sm = null;

    public function __construct(\AMUser\Mapper\User $u) {
        $this->sm = $u;
    }

    public function __invoke () {
        $entity = $this->sm->findByEmail('misuraa@gmail.com');

        var_dump($entity);
        return $this;
    }

    public function render() {
        return $this->getView()->render('am-user/helper/user-list', array(

        ));
    }

    public function setBla($bla) {
        echo $bla;
        return $this;
    }
}