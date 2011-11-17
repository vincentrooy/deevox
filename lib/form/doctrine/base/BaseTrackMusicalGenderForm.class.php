<?php

/**
 * TrackMusicalGender form base class.
 *
 * @method TrackMusicalGender getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTrackMusicalGenderForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'track_id'          => new sfWidgetFormInputHidden(),
      'musical_gender_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'track_id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('track_id')), 'empty_value' => $this->getObject()->get('track_id'), 'required' => false)),
      'musical_gender_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('musical_gender_id')), 'empty_value' => $this->getObject()->get('musical_gender_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('track_musical_gender[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TrackMusicalGender';
  }

}
