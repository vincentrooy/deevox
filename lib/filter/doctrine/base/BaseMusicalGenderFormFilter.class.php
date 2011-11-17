<?php

/**
 * MusicalGender filter form base class.
 *
 * @package    deevox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMusicalGenderFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'libelle'              => new sfWidgetFormFilterInput(),
      'artist_list'          => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Artist')),
      'albums_list'          => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Album')),
      'musical_genders_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Track')),
    ));

    $this->setValidators(array(
      'libelle'              => new sfValidatorPass(array('required' => false)),
      'artist_list'          => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Artist', 'required' => false)),
      'albums_list'          => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Album', 'required' => false)),
      'musical_genders_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Track', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('musical_gender_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addArtistListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.ArtistMusicalGender ArtistMusicalGender')
      ->andWhereIn('ArtistMusicalGender.artist_id', $values)
    ;
  }

  public function addAlbumsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.AlbumMusicalGender AlbumMusicalGender')
      ->andWhereIn('AlbumMusicalGender.album_id', $values)
    ;
  }

  public function addMusicalGendersListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.TrackMusicalGender TrackMusicalGender')
      ->andWhereIn('TrackMusicalGender.track_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'MusicalGender';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'libelle'              => 'Text',
      'artist_list'          => 'ManyKey',
      'albums_list'          => 'ManyKey',
      'musical_genders_list' => 'ManyKey',
    );
  }
}
