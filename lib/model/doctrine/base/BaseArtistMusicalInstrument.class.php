<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ArtistMusicalInstrument', 'doctrine');

/**
 * BaseArtistMusicalInstrument
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $artist_id
 * @property integer $musical_instrument_id
 * @property Artist $Artist
 * @property MusicalInstrument $MusicalInstrument
 * 
 * @method integer                 getArtistId()              Returns the current record's "artist_id" value
 * @method integer                 getMusicalInstrumentId()   Returns the current record's "musical_instrument_id" value
 * @method Artist                  getArtist()                Returns the current record's "Artist" value
 * @method MusicalInstrument       getMusicalInstrument()     Returns the current record's "MusicalInstrument" value
 * @method ArtistMusicalInstrument setArtistId()              Sets the current record's "artist_id" value
 * @method ArtistMusicalInstrument setMusicalInstrumentId()   Sets the current record's "musical_instrument_id" value
 * @method ArtistMusicalInstrument setArtist()                Sets the current record's "Artist" value
 * @method ArtistMusicalInstrument setMusicalInstrument()     Sets the current record's "MusicalInstrument" value
 * 
 * @package    deevox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArtistMusicalInstrument extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('artist_musical_instrument');
        $this->hasColumn('artist_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('musical_instrument_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Artist', array(
             'local' => 'artist_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('MusicalInstrument', array(
             'local' => 'musical_instrument_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}