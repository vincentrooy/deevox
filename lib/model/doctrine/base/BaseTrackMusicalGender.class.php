<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TrackMusicalGender', 'doctrine');

/**
 * BaseTrackMusicalGender
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $track_id
 * @property integer $musical_gender_id
 * @property MusicalGender $MusicalGender
 * 
 * @method integer            getTrackId()           Returns the current record's "track_id" value
 * @method integer            getMusicalGenderId()   Returns the current record's "musical_gender_id" value
 * @method MusicalGender      getMusicalGender()     Returns the current record's "MusicalGender" value
 * @method TrackMusicalGender setTrackId()           Sets the current record's "track_id" value
 * @method TrackMusicalGender setMusicalGenderId()   Sets the current record's "musical_gender_id" value
 * @method TrackMusicalGender setMusicalGender()     Sets the current record's "MusicalGender" value
 * 
 * @package    deevox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTrackMusicalGender extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('track_musical_gender');
        $this->hasColumn('track_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('musical_gender_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('MusicalGender', array(
             'local' => 'musical_gender_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}