<?php

/**
 * Track filter form base class.
 *
 * @package    deevox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTrackFormFilter extends tdTrackFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['musical_gender_list'] = new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MusicalGender'));
    $this->validatorSchema['musical_gender_list'] = new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MusicalGender', 'required' => false));

    $this->widgetSchema->setNameFormat('track_filters[%s]');
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
      ->leftJoin($query->getRootAlias().'.TrackMusicalGender TrackMusicalGender')
      ->andWhereIn('TrackMusicalGender.musical_gender_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Track';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'musical_gender_list' => 'ManyKey',
    ));
  }
}
