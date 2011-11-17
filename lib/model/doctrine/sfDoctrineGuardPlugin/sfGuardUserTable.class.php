<?php

/**
 * sfGuardUserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardUserTable extends PluginsfGuardUserTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sfGuardUserTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfGuardUser');
    }
		
	
	public function listAllUsers(Doctrine_Query $q = null)
	{
		return $this->getUsersQuery($q)->execute();
	}
	
	public function retrieveUser(Doctrine_Query $q = null)
	{
		return $this->getUsersQuery($q)->fetchOne();
	}
	
	public function countUser(Doctrine_Query $q = null)
	{
		return $this->getUsersQuery($q)->count();
	}
	
	
	public function getUsersQuery(Doctrine_Query $q = null)
	{
		if (is_null($q))
		{
		  $q = Doctrine_Query::create()
			->from('sfGuardUser s');
		}
	 
		return $q;
	}
}