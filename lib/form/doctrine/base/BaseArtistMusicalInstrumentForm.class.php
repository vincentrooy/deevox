<?php

/**
 * ArtistMusicalInstrument form base class.
 *
 * @method ArtistMusicalInstrument getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArtistMusicalInstrumentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'artist_id'             => new sfWidgetFormInputHidden(),
      'musical_instrument_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'artist_id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('artist_id')), 'empty_value' => $this->getObject()->get('artist_id'), 'required' => false)),
      'musical_instrument_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('musical_instrument_id')), 'empty_value' => $this->getObject()->get('musical_instrument_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('artist_musical_instrument[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArtistMusicalInstrument';
  }

}
