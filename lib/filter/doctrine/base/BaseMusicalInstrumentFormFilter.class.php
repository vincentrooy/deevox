<?php

/**
 * MusicalInstrument filter form base class.
 *
 * @package    deevox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMusicalInstrumentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'libelle'     => new sfWidgetFormFilterInput(),
      'artist_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Artist')),
    ));

    $this->setValidators(array(
      'libelle'     => new sfValidatorPass(array('required' => false)),
      'artist_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Artist', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('musical_instrument_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addArtistListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.ArtistMusicalInstrument ArtistMusicalInstrument')
      ->andWhereIn('ArtistMusicalInstrument.artist_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'MusicalInstrument';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'libelle'     => 'Text',
      'artist_list' => 'ManyKey',
    );
  }
}
