<?php

/**
 * Album filter form base class.
 *
 * @package    deevox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAlbumFormFilter extends tdTrackAlbumFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['musical_gender_list'] = new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MusicalGender'));
    $this->validatorSchema['musical_gender_list'] = new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MusicalGender', 'required' => false));

    $this->widgetSchema   ['tracks_list'] = new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Track'));
    $this->validatorSchema['tracks_list'] = new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Track', 'required' => false));

    $this->widgetSchema->setNameFormat('album_filters[%s]');
  }

  public function addMusicalGenderListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('AlbumMusicalGender.musical_gender_id', $values)
    ;
  }

  public function addTracksListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.AlbumTrack AlbumTrack')
      ->andWhereIn('AlbumTrack.track_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Album';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'musical_gender_list' => 'ManyKey',
      'tracks_list' => 'ManyKey',
    ));
  }
}
