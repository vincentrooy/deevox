<?php

/**
 * GravatarUserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class GravatarUserTable extends sfGuardUserTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object GravatarUserTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('GravatarUser');
    }
}