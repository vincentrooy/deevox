<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GravatarUser', 'doctrine');

/**
 * BaseGravatarUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * 
 * @package    deevox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGravatarUser extends sfGuardUser
{
    public function setUp()
    {
        parent::setUp();
        $gravatar0 = new Gravatar(array(
             'email_field' => 'email_address',
             ));
        $this->actAs($gravatar0);
    }
}