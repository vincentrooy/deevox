<?php

/**
 * Artist filter form base class.
 *
 * @package    deevox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArtistFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sf_guard_user_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'deevo_theme_id'               => new sfWidgetFormFilterInput(),
      'artistName'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hometown'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nationality'                  => new sfWidgetFormFilterInput(),
      'website'                      => new sfWidgetFormFilterInput(),
      'facebook_address'             => new sfWidgetFormFilterInput(),
      'twitter_address'              => new sfWidgetFormFilterInput(),
      'date_of_early_career'         => new sfWidgetFormFilterInput(),
      'number_of_album'              => new sfWidgetFormFilterInput(),
      'number_of_title'              => new sfWidgetFormFilterInput(),
      'resume'                       => new sfWidgetFormFilterInput(),
      'detail'                       => new sfWidgetFormFilterInput(),
      'creation_date_of_the_account' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'photo_biography'              => new sfWidgetFormFilterInput(),
      'musical_genders_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MusicalGender')),
      'musical_instruments_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MusicalInstrument')),
    ));

    $this->setValidators(array(
      'sf_guard_user_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'deevo_theme_id'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'artistName'                   => new sfValidatorPass(array('required' => false)),
      'hometown'                     => new sfValidatorPass(array('required' => false)),
      'nationality'                  => new sfValidatorPass(array('required' => false)),
      'website'                      => new sfValidatorPass(array('required' => false)),
      'facebook_address'             => new sfValidatorPass(array('required' => false)),
      'twitter_address'              => new sfValidatorPass(array('required' => false)),
      'date_of_early_career'         => new sfValidatorPass(array('required' => false)),
      'number_of_album'              => new sfValidatorPass(array('required' => false)),
      'number_of_title'              => new sfValidatorPass(array('required' => false)),
      'resume'                       => new sfValidatorPass(array('required' => false)),
      'detail'                       => new sfValidatorPass(array('required' => false)),
      'creation_date_of_the_account' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'photo_biography'              => new sfValidatorPass(array('required' => false)),
      'musical_genders_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MusicalGender', 'required' => false)),
      'musical_instruments_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MusicalInstrument', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('artist_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addMusicalGendersListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.ArtistMusicalGender ArtistMusicalGender')
      ->andWhereIn('ArtistMusicalGender.musical_gender_id', $values)
    ;
  }

  public function addMusicalInstrumentsListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('ArtistMusicalInstrument.musical_instrument_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Artist';
  }

  public function getFields()
  {
    return array(
      'id'                           => 'Number',
      'sf_guard_user_id'             => 'ForeignKey',
      'deevo_theme_id'               => 'Number',
      'artistName'                   => 'Text',
      'hometown'                     => 'Text',
      'nationality'                  => 'Text',
      'website'                      => 'Text',
      'facebook_address'             => 'Text',
      'twitter_address'              => 'Text',
      'date_of_early_career'         => 'Text',
      'number_of_album'              => 'Text',
      'number_of_title'              => 'Text',
      'resume'                       => 'Text',
      'detail'                       => 'Text',
      'creation_date_of_the_account' => 'Date',
      'photo_biography'              => 'Text',
      'musical_genders_list'         => 'ManyKey',
      'musical_instruments_list'     => 'ManyKey',
    );
  }
}
