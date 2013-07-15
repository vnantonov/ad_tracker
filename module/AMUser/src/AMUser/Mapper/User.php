<?php
namespace AMUser\Mapper;

use Zend\Db\Sql\Expression;

class User extends \ZfcUser\Mapper\User {
    public function findByEmail($email)
    {
        $select = $this->getSelect(array('u' => $this->getTableName()))
            ->join(array('url' => 'user_role_linker'), 'url.user_id = u.user_id', array('roles' => new Expression('GROUP_CONCAT(url.role_id)')))
            ->where(array('u.email' => $email));

        $entity = $this->select($select)->current();
        $this->getEventManager()->trigger('find', $this, array('entity' => $entity));
        return $entity;
    }

    public function findByUsername($username)
    {
        $select = $this->getSelect(array('u' => $this->getTableName()))
            ->join(array('url' => 'user_role_linker'), 'url.user_id = u.user_id', array('roles' => new Expression('GROUP_CONCAT(url.role_id)')))
            ->where(array('u.username' => $username));

        $entity = $this->select($select)->current();
        $this->getEventManager()->trigger('find', $this, array('entity' => $entity));
        return $entity;
    }

    public function findById($id)
    {
        $select = $this->getSelect(array('u' => $this->getTableName()))
            ->join(array('url' => 'user_role_linker'), 'url.user_id = u.user_id', array('roles' => new Expression('GROUP_CONCAT(url.role_id)')))
            ->where(array('u.user_id' => $id));

        $entity = $this->select($select)->current();
        $this->getEventManager()->trigger('find', $this, array('entity' => $entity));
        return $entity;
    }
}