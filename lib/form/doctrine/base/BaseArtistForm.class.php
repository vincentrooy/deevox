<?php

/**
 * Artist form base class.
 *
 * @method Artist getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArtistForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                           => new sfWidgetFormInputHidden(),
      'sf_guard_user_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'deevo_theme_id'               => new sfWidgetFormInputText(),
      'artistName'                   => new sfWidgetFormInputText(),
      'hometown'                     => new sfWidgetFormInputText(),
      'nationality'                  => new sfWidgetFormInputText(),
      'website'                      => new sfWidgetFormInputText(),
      'facebook_address'             => new sfWidgetFormInputText(),
      'twitter_address'              => new sfWidgetFormInputText(),
      'date_of_early_career'         => new sfWidgetFormInputText(),
      'number_of_album'              => new sfWidgetFormInputText(),
      'number_of_title'              => new sfWidgetFormInputText(),
      'resume'                       => new sfWidgetFormTextarea(),
      'detail'                       => new sfWidgetFormTextarea(),
      'creation_date_of_the_account' => new sfWidgetFormDate(),
      'photo_biography'              => new sfWidgetFormInputText(),
      'musical_genders_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MusicalGender')),
      'musical_instruments_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MusicalInstrument')),
    ));

    $this->setValidators(array(
      'id'                           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sf_guard_user_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'deevo_theme_id'               => new sfValidatorInteger(array('required' => false)),
      'artistName'                   => new sfValidatorString(array('max_length' => 100)),
      'hometown'                     => new sfValidatorString(array('max_length' => 100)),
      'nationality'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'website'                      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'facebook_address'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'twitter_address'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'date_of_early_career'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'number_of_album'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'number_of_title'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'resume'                       => new sfValidatorString(array('required' => false)),
      'detail'                       => new sfValidatorString(array('required' => false)),
      'creation_date_of_the_account' => new sfValidatorDate(array('required' => false)),
      'photo_biography'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'musical_genders_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MusicalGender', 'required' => false)),
      'musical_instruments_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MusicalInstrument', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('artist[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Artist';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['musical_genders_list']))
    {
      $this->setDefault('musical_genders_list', $this->object->MusicalGenders->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['musical_instruments_list']))
    {
      $this->setDefault('musical_instruments_list', $this->object->MusicalInstruments->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveMusicalGendersList($con);
    $this->saveMusicalInstrumentsList($con);

    parent::doSave($con);
  }

  public function saveMusicalGendersList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['musical_genders_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->MusicalGenders->getPrimaryKeys();
    $values = $this->getValue('musical_genders_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('MusicalGenders', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('MusicalGenders', array_values($link));
    }
  }

  public function saveMusicalInstrumentsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['musical_instruments_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->MusicalInstruments->getPrimaryKeys();
    $values = $this->getValue('musical_instruments_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('MusicalInstruments', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('MusicalInstruments', array_values($link));
    }
  }

}
