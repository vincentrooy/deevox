<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DeevoThemeUser', 'doctrine');

/**
 * BaseDeevoThemeUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $sf_guard_user_id
 * @property integer $deevo_theme_id
 * @property DeevoTheme $DeevoTheme
 * 
 * @method integer        getSfGuardUserId()    Returns the current record's "sf_guard_user_id" value
 * @method integer        getDeevoThemeId()     Returns the current record's "deevo_theme_id" value
 * @method DeevoTheme     getDeevoTheme()       Returns the current record's "DeevoTheme" value
 * @method DeevoThemeUser setSfGuardUserId()    Sets the current record's "sf_guard_user_id" value
 * @method DeevoThemeUser setDeevoThemeId()     Sets the current record's "deevo_theme_id" value
 * @method DeevoThemeUser setDeevoTheme()       Sets the current record's "DeevoTheme" value
 * 
 * @package    deevox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDeevoThemeUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('deevo_theme_user');
        $this->hasColumn('sf_guard_user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('deevo_theme_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DeevoTheme', array(
             'local' => 'deevo_theme_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}