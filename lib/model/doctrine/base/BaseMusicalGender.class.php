<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MusicalGender', 'doctrine');

/**
 * BaseMusicalGender
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $libelle
 * @property Doctrine_Collection $Artist
 * @property Doctrine_Collection $ArtistsMusicalGenders
 * @property Doctrine_Collection $Albums
 * @property Doctrine_Collection $AlbumsMusicalGenders
 * @property Doctrine_Collection $MusicalGenders
 * @property Doctrine_Collection $AlbumsTracks
 * 
 * @method string              getLibelle()               Returns the current record's "libelle" value
 * @method Doctrine_Collection getArtist()                Returns the current record's "Artist" collection
 * @method Doctrine_Collection getArtistsMusicalGenders() Returns the current record's "ArtistsMusicalGenders" collection
 * @method Doctrine_Collection getAlbums()                Returns the current record's "Albums" collection
 * @method Doctrine_Collection getAlbumsMusicalGenders()  Returns the current record's "AlbumsMusicalGenders" collection
 * @method Doctrine_Collection getMusicalGenders()        Returns the current record's "MusicalGenders" collection
 * @method Doctrine_Collection getAlbumsTracks()          Returns the current record's "AlbumsTracks" collection
 * @method MusicalGender       setLibelle()               Sets the current record's "libelle" value
 * @method MusicalGender       setArtist()                Sets the current record's "Artist" collection
 * @method MusicalGender       setArtistsMusicalGenders() Sets the current record's "ArtistsMusicalGenders" collection
 * @method MusicalGender       setAlbums()                Sets the current record's "Albums" collection
 * @method MusicalGender       setAlbumsMusicalGenders()  Sets the current record's "AlbumsMusicalGenders" collection
 * @method MusicalGender       setMusicalGenders()        Sets the current record's "MusicalGenders" collection
 * @method MusicalGender       setAlbumsTracks()          Sets the current record's "AlbumsTracks" collection
 * 
 * @package    deevox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMusicalGender extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('musical_gender');
        $this->hasColumn('libelle', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Artist', array(
             'refClass' => 'ArtistMusicalGender',
             'local' => 'musical_gender_id',
             'foreign' => 'artist_id'));

        $this->hasMany('ArtistMusicalGender as ArtistsMusicalGenders', array(
             'local' => 'id',
             'foreign' => 'musical_gender_id'));

        $this->hasMany('Album as Albums', array(
             'refClass' => 'AlbumMusicalGender',
             'local' => 'musical_gender_id',
             'foreign' => 'album_id'));

        $this->hasMany('AlbumMusicalGender as AlbumsMusicalGenders', array(
             'local' => 'id',
             'foreign' => 'musical_gender_id'));

        $this->hasMany('Track as MusicalGenders', array(
             'refClass' => 'TrackMusicalGender',
             'local' => 'musical_gender_id',
             'foreign' => 'track_id'));

        $this->hasMany('TrackMusicalGender as AlbumsTracks', array(
             'local' => 'id',
             'foreign' => 'musical_gender_id'));
    }
}