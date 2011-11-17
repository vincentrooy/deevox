<?php

/**
 * MusicalGender form base class.
 *
 * @method MusicalGender getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMusicalGenderForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'libelle'              => new sfWidgetFormInputText(),
      'artist_list'          => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Artist')),
      'albums_list'          => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Album')),
      'musical_genders_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Track')),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'libelle'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'artist_list'          => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Artist', 'required' => false)),
      'albums_list'          => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Album', 'required' => false)),
      'musical_genders_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Track', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('musical_gender[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MusicalGender';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['artist_list']))
    {
      $this->setDefault('artist_list', $this->object->Artist->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['albums_list']))
    {
      $this->setDefault('albums_list', $this->object->Albums->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['musical_genders_list']))
    {
      $this->setDefault('musical_genders_list', $this->object->MusicalGenders->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveArtistList($con);
    $this->saveAlbumsList($con);
    $this->saveMusicalGendersList($con);

    parent::doSave($con);
  }

  public function saveArtistList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['artist_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Artist->getPrimaryKeys();
    $values = $this->getValue('artist_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Artist', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Artist', array_values($link));
    }
  }

  public function saveAlbumsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['albums_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Albums->getPrimaryKeys();
    $values = $this->getValue('albums_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Albums', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Albums', array_values($link));
    }
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

}
