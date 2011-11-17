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
      'user_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'email_new'              => new sfWidgetFormFilterInput(),
      'firstname'              => new sfWidgetFormFilterInput(),
      'lastname'               => new sfWidgetFormFilterInput(),
      'validate_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'validate'               => new sfWidgetFormFilterInput(),
      'type'                   => new sfWidgetFormFilterInput(),
      'gender'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'culture'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'country'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'way'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'additional_address'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'zip_code'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'city'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'date_of_birth'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'phone_number'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'profile_photo'          => new sfWidgetFormFilterInput(),
      'favorite_movie_1'       => new sfWidgetFormFilterInput(),
      'favorite_movie_2'       => new sfWidgetFormFilterInput(),
      'favorite_movie_3'       => new sfWidgetFormFilterInput(),
      'favorite_artist_1'      => new sfWidgetFormFilterInput(),
      'favorite_artist_2'      => new sfWidgetFormFilterInput(),
      'favorite_artist_3'      => new sfWidgetFormFilterInput(),
      'favorite_music_genre_1' => new sfWidgetFormFilterInput(),
      'favorite_music_genre_2' => new sfWidgetFormFilterInput(),
      'favorite_music_genre_3' => new sfWidgetFormFilterInput(),
      'size_of_storage_space'  => new sfWidgetFormFilterInput(),
      'facebook_uid'           => new sfWidgetFormFilterInput(),
      'email_hash'             => new sfWidgetFormFilterInput(),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'email_new'              => new sfValidatorPass(array('required' => false)),
      'firstname'              => new sfValidatorPass(array('required' => false)),
      'lastname'               => new sfValidatorPass(array('required' => false)),
      'validate_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'validate'               => new sfValidatorPass(array('required' => false)),
      'type'                   => new sfValidatorPass(array('required' => false)),
      'gender'                 => new sfValidatorPass(array('required' => false)),
      'culture'                => new sfValidatorPass(array('required' => false)),
      'country'                => new sfValidatorPass(array('required' => false)),
      'way'                    => new sfValidatorPass(array('required' => false)),
      'additional_address'     => new sfValidatorPass(array('required' => false)),
      'zip_code'               => new sfValidatorPass(array('required' => false)),
      'city'                   => new sfValidatorPass(array('required' => false)),
      'date_of_birth'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'phone_number'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'profile_photo'          => new sfValidatorPass(array('required' => false)),
      'favorite_movie_1'       => new sfValidatorPass(array('required' => false)),
      'favorite_movie_2'       => new sfValidatorPass(array('required' => false)),
      'favorite_movie_3'       => new sfValidatorPass(array('required' => false)),
      'favorite_artist_1'      => new sfValidatorPass(array('required' => false)),
      'favorite_artist_2'      => new sfValidatorPass(array('required' => false)),
      'favorite_artist_3'      => new sfValidatorPass(array('required' => false)),
      'favorite_music_genre_1' => new sfValidatorPass(array('required' => false)),
      'favorite_music_genre_2' => new sfValidatorPass(array('required' => false)),
      'favorite_music_genre_3' => new sfValidatorPass(array('required' => false)),
      'size_of_storage_space'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'facebook_uid'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'email_hash'             => new sfValidatorPass(array('required' => false)),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'id'                     => 'Number',
      'user_id'                => 'ForeignKey',
      'email_new'              => 'Text',
      'firstname'              => 'Text',
      'lastname'               => 'Text',
      'validate_at'            => 'Date',
      'validate'               => 'Text',
      'type'                   => 'Text',
      'gender'                 => 'Text',
      'culture'                => 'Text',
      'country'                => 'Text',
      'way'                    => 'Text',
      'additional_address'     => 'Text',
      'zip_code'               => 'Text',
      'city'                   => 'Text',
      'date_of_birth'          => 'Date',
      'phone_number'           => 'Number',
      'profile_photo'          => 'Text',
      'favorite_movie_1'       => 'Text',
      'favorite_movie_2'       => 'Text',
      'favorite_movie_3'       => 'Text',
      'favorite_artist_1'      => 'Text',
      'favorite_artist_2'      => 'Text',
      'favorite_artist_3'      => 'Text',
      'favorite_music_genre_1' => 'Text',
      'favorite_music_genre_2' => 'Text',
      'favorite_music_genre_3' => 'Text',
      'size_of_storage_space'  => 'Number',
      'facebook_uid'           => 'Number',
      'email_hash'             => 'Text',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
    );
  }
}
