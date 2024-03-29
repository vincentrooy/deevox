<?php

/**
 * BasetdTrackAlbum
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $author
 * @property string $place
 * @property timestamp $released_at
 * @property clob $description
 * @property string $file_cover
 * @property boolean $active
 * @property string $type
 * @property boolean $is_for_single
 * @property integer $artist_id
 * @property integer $product_id
 * @property Doctrine_Collection $Tracks
 * 
 * @method string              getName()          Returns the current record's "name" value
 * @method string              getAuthor()        Returns the current record's "author" value
 * @method string              getPlace()         Returns the current record's "place" value
 * @method timestamp           getReleasedAt()    Returns the current record's "released_at" value
 * @method clob                getDescription()   Returns the current record's "description" value
 * @method string              getFileCover()     Returns the current record's "file_cover" value
 * @method boolean             getActive()        Returns the current record's "active" value
 * @method string              getType()          Returns the current record's "type" value
 * @method boolean             getIsForSingle()   Returns the current record's "is_for_single" value
 * @method integer             getArtistId()      Returns the current record's "artist_id" value
 * @method integer             getProductId()     Returns the current record's "product_id" value
 * @method Doctrine_Collection getTracks()        Returns the current record's "Tracks" collection
 * @method tdTrackAlbum        setName()          Sets the current record's "name" value
 * @method tdTrackAlbum        setAuthor()        Sets the current record's "author" value
 * @method tdTrackAlbum        setPlace()         Sets the current record's "place" value
 * @method tdTrackAlbum        setReleasedAt()    Sets the current record's "released_at" value
 * @method tdTrackAlbum        setDescription()   Sets the current record's "description" value
 * @method tdTrackAlbum        setFileCover()     Sets the current record's "file_cover" value
 * @method tdTrackAlbum        setActive()        Sets the current record's "active" value
 * @method tdTrackAlbum        setType()          Sets the current record's "type" value
 * @method tdTrackAlbum        setIsForSingle()   Sets the current record's "is_for_single" value
 * @method tdTrackAlbum        setArtistId()      Sets the current record's "artist_id" value
 * @method tdTrackAlbum        setProductId()     Sets the current record's "product_id" value
 * @method tdTrackAlbum        setTracks()        Sets the current record's "Tracks" collection
 * 
 * @package    deevox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasetdTrackAlbum extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('td_track_album');
        $this->hasColumn('name', 'string', 128, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 128,
             ));
        $this->hasColumn('author', 'string', 128, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 128,
             ));
        $this->hasColumn('place', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('released_at', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('file_cover', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => true,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('is_for_single', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
        $this->hasColumn('artist_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('product_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));

        $this->option('charset', 'utf8');
        $this->option('collate', 'utf8_general_ci');

        $this->setSubClasses(array(
             'Album' => 
             array(
              'type' => 1,
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('tdTrack as Tracks', array(
             'local' => 'id',
             'foreign' => 'td_track_album_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}