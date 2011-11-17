<?php

/**
 * Album form base class.
 *
 * @method Album getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAlbumForm extends tdTrackAlbumForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['musical_gender_list'] = new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MusicalGender'));
    $this->validatorSchema['musical_gender_list'] = new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MusicalGender', 'required' => false));

    $this->widgetSchema   ['tracks_list'] = new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Track'));
    $this->validatorSchema['tracks_list'] = new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Track', 'required' => false));

    $this->widgetSchema->setNameFormat('album[%s]');
  }

  public function getModelName()
  {
    return 'Album';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['musical_gender_list']))
    {
      $this->setDefault('musical_gender_list', $this->object->MusicalGender->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['tracks_list']))
    {
      $this->setDefault('tracks_list', $this->object->tracks->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveMusicalGenderList($con);
    $this->savetracksList($con);

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

  public function savetracksList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['tracks_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->tracks->getPrimaryKeys();
    $values = $this->getValue('tracks_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('tracks', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('tracks', array_values($link));
    }
  }

}
