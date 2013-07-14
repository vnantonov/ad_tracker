<?php
namespace AMUser\Mapper;

use ZfcBase\Mapper\AbstractDbMapper;

class User extends AbstractDbMapper {

    protected $tableName = 'user';

    public function findByEmail($email)
    {
        $select = $this->getSelect()
            ->where(array('email' => $email));

        $entity = $this->select($select)->current();
        $this->getEventManager()->trigger('find', $this, array('entity' => $entity));
        return $entity;
    }

}