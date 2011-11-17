<?php

/**
 * tdTrackAlbum form base class.
 *
 * @method tdTrackAlbum getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasetdTrackAlbumForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name'          => new sfWidgetFormInputText(),
      'author'        => new sfWidgetFormInputText(),
      'place'         => new sfWidgetFormInputText(),
      'released_at'   => new sfWidgetFormDateTime(),
      'description'   => new sfWidgetFormTextarea(),
      'file_cover'    => new sfWidgetFormInputText(),
      'active'        => new sfWidgetFormInputCheckbox(),
      'type'          => new sfWidgetFormInputText(),
      'is_for_single' => new sfWidgetFormInputCheckbox(),
      'artist_id'     => new sfWidgetFormInputText(),
      'product_id'    => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 128)),
      'author'        => new sfValidatorString(array('max_length' => 128)),
      'place'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'released_at'   => new sfValidatorDateTime(array('required' => false)),
      'description'   => new sfValidatorString(array('required' => false)),
      'file_cover'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'active'        => new sfValidatorBoolean(array('required' => false)),
      'type'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_for_single' => new sfValidatorBoolean(array('required' => false)),
      'artist_id'     => new sfValidatorInteger(array('required' => false)),
      'product_id'    => new sfValidatorInteger(),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('td_track_album[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'tdTrackAlbum';
  }

}
