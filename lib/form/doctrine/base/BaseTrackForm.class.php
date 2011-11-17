<?php

/**
 * Track form base class.
 *
 * @method Track getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTrackForm extends tdTrackForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['musical_gender_list'] = new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MusicalGender'));
    $this->validatorSchema['musical_gender_list'] = new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MusicalGender', 'required' => false));

    $this->widgetSchema->setNameFormat('track[%s]');
  }

  public function getModelName()
  {
    return 'Track';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['musical_gender_list']))
    {
      $this->setDefault('musical_gender_list', $this->object->MusicalGender->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveMusicalGenderList($con);

    parent::doSave($con);
  }

  public function saveMusicalGenderList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['musical_gender_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->MusicalGender->getPrimaryKeys();
    $values = $this->getValue('musical_gender_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('MusicalGender', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('MusicalGender', array_values($link));
    }
  }

}
