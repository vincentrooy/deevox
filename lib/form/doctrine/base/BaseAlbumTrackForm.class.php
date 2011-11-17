<?php

/**
 * AlbumTrack form base class.
 *
 * @method AlbumTrack getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAlbumTrackForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'album_id' => new sfWidgetFormInputHidden(),
      'track_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'album_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('album_id')), 'empty_value' => $this->getObject()->get('album_id'), 'required' => false)),
      'track_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('track_id')), 'empty_value' => $this->getObject()->get('track_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('album_track[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AlbumTrack';
  }

}
