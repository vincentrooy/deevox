<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Deevonaute', 'doctrine');

/**
 * BaseDeevonaute
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * 
 * @package    deevox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDeevonaute extends sfGuardUserProfile
{
    public function setUp()
    {
        parent::setUp();
        
    }
}