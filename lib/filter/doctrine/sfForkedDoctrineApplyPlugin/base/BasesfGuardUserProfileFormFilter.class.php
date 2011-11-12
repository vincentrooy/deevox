<?php

/**
 * sfGuardUserProfile filter form base class.
 *
 * @package    deevox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserProfileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'email_new'             => new sfWidgetFormFilterInput(),
      'firstname'             => new sfWidgetFormFilterInput(),
      'lastname'              => new sfWidgetFormFilterInput(),
      'validate_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'validate'              => new sfWidgetFormFilterInput(),
      'type'                  => new sfWidgetFormFilterInput(),
      'profile_photo'         => new sfWidgetFormFilterInput(),
      'gender'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'culture'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'country'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'way'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'additional_address'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'zip_code'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'city'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'date_of_birth'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'phone_number'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'film_prefere_1'        => new sfWidgetFormFilterInput(),
      'film_prefere_2'        => new sfWidgetFormFilterInput(),
      'film_prefere_3'        => new sfWidgetFormFilterInput(),
      'artiste_prefere_1'     => new sfWidgetFormFilterInput(),
      'artiste_prefere_2'     => new sfWidgetFormFilterInput(),
      'artiste_prefere_3'     => new sfWidgetFormFilterInput(),
      'genre_prefere_1'       => new sfWidgetFormFilterInput(),
      'genre_prefere_2'       => new sfWidgetFormFilterInput(),
      'genre_prefere_3'       => new sfWidgetFormFilterInput(),
      'size_of_storage_space' => new sfWidgetFormFilterInput(),
      'created_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'email_new'             => new sfValidatorPass(array('required' => false)),
      'firstname'             => new sfValidatorPass(array('required' => false)),
      'lastname'              => new sfValidatorPass(array('required' => false)),
      'validate_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'validate'              => new sfValidatorPass(array('required' => false)),
      'type'                  => new sfValidatorPass(array('required' => false)),
      'profile_photo'         => new sfValidatorPass(array('required' => false)),
      'gender'                => new sfValidatorPass(array('required' => false)),
      'culture'               => new sfValidatorPass(array('required' => false)),
      'country'               => new sfValidatorPass(array('required' => false)),
      'way'                   => new sfValidatorPass(array('required' => false)),
      'additional_address'    => new sfValidatorPass(array('required' => false)),
      'zip_code'              => new sfValidatorPass(array('required' => false)),
      'city'                  => new sfValidatorPass(array('required' => false)),
      'date_of_birth'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'phone_number'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'film_prefere_1'        => new sfValidatorPass(array('required' => false)),
      'film_prefere_2'        => new sfValidatorPass(array('required' => false)),
      'film_prefere_3'        => new sfValidatorPass(array('required' => false)),
      'artiste_prefere_1'     => new sfValidatorPass(array('required' => false)),
      'artiste_prefere_2'     => new sfValidatorPass(array('required' => false)),
      'artiste_prefere_3'     => new sfValidatorPass(array('required' => false)),
      'genre_prefere_1'       => new sfValidatorPass(array('required' => false)),
      'genre_prefere_2'       => new sfValidatorPass(array('required' => false)),
      'genre_prefere_3'       => new sfValidatorPass(array('required' => false)),
      'size_of_storage_space' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'user_id'               => 'ForeignKey',
      'email_new'             => 'Text',
      'firstname'             => 'Text',
      'lastname'              => 'Text',
      'validate_at'           => 'Date',
      'validate'              => 'Text',
      'type'                  => 'Text',
      'profile_photo'         => 'Text',
      'gender'                => 'Text',
      'culture'               => 'Text',
      'country'               => 'Text',
      'way'                   => 'Text',
      'additional_address'    => 'Text',
      'zip_code'              => 'Text',
      'city'                  => 'Text',
      'date_of_birth'         => 'Date',
      'phone_number'          => 'Number',
      'film_prefere_1'        => 'Text',
      'film_prefere_2'        => 'Text',
      'film_prefere_3'        => 'Text',
      'artiste_prefere_1'     => 'Text',
      'artiste_prefere_2'     => 'Text',
      'artiste_prefere_3'     => 'Text',
      'genre_prefere_1'       => 'Text',
      'genre_prefere_2'       => 'Text',
      'genre_prefere_3'       => 'Text',
      'size_of_storage_space' => 'Number',
      'created_at'            => 'Date',
      'updated_at'            => 'Date',
    );
  }
}
