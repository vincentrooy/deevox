<?php

/**
 * ArtistMusicalInstrument filter form base class.
 *
 * @package    deevox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArtistMusicalInstrumentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('artist_musical_instrument_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArtistMusicalInstrument';
  }

  public function getFields()
  {
    return array(
      'artist_id'             => 'Number',
      'musical_instrument_id' => 'Number',
    );
  }
}
