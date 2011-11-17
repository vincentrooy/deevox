<?php

/**
 * tdTrack form base class.
 *
 * @method tdTrack getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasetdTrackForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'td_track_album_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Album'), 'add_empty' => false)),
      'file'                  => new sfWidgetFormInputText(),
      'title'                 => new sfWidgetFormInputText(),
      'description'           => new sfWidgetFormTextarea(),
      'position'              => new sfWidgetFormInputText(),
      'type'                  => new sfWidgetFormInputText(),
      'artist_id'             => new sfWidgetFormInputText(),
      'product_id'            => new sfWidgetFormInputText(),
      'composer'              => new sfWidgetFormInputText(),
      'lyricist'              => new sfWidgetFormInputText(),
      'interpreter'           => new sfWidgetFormInputText(),
      'producer'              => new sfWidgetFormInputText(),
      'place_of_registration' => new sfWidgetFormInputText(),
      'photo_track'           => new sfWidgetFormInputText(),
      'active'                => new sfWidgetFormInputCheckbox(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'td_track_album_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Album'))),
      'file'                  => new sfValidatorString(array('max_length' => 255)),
      'title'                 => new sfValidatorString(array('max_length' => 64)),
      'description'           => new sfValidatorString(array('required' => false)),
      'position'              => new sfValidatorPass(),
      'type'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'artist_id'             => new sfValidatorInteger(array('required' => false)),
      'product_id'            => new sfValidatorInteger(),
      'composer'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'lyricist'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'interpreter'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'producer'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'place_of_registration' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'photo_track'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'active'                => new sfValidatorBoolean(array('required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'tdTrack', 'column' => array('td_track_album_id', 'position')))
    );

    $this->widgetSchema->setNameFormat('td_track[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'tdTrack';
  }

}
