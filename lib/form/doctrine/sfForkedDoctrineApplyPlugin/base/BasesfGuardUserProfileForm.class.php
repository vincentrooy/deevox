<?php

/**
 * sfGuardUserProfile form base class.
 *
 * @method sfGuardUserProfile getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserProfileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'user_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'email_new'              => new sfWidgetFormInputText(),
      'firstname'              => new sfWidgetFormInputText(),
      'lastname'               => new sfWidgetFormInputText(),
      'validate_at'            => new sfWidgetFormDateTime(),
      'validate'               => new sfWidgetFormInputText(),
      'type'                   => new sfWidgetFormInputText(),
      'gender'                 => new sfWidgetFormInputText(),
      'culture'                => new sfWidgetFormInputText(),
      'country'                => new sfWidgetFormInputText(),
      'way'                    => new sfWidgetFormInputText(),
      'additional_address'     => new sfWidgetFormInputText(),
      'zip_code'               => new sfWidgetFormInputText(),
      'city'                   => new sfWidgetFormInputText(),
      'date_of_birth'          => new sfWidgetFormDate(),
      'phone_number'           => new sfWidgetFormInputText(),
      'profile_photo'          => new sfWidgetFormInputText(),
      'favorite_movie_1'       => new sfWidgetFormInputText(),
      'favorite_movie_2'       => new sfWidgetFormInputText(),
      'favorite_movie_3'       => new sfWidgetFormInputText(),
      'favorite_artist_1'      => new sfWidgetFormInputText(),
      'favorite_artist_2'      => new sfWidgetFormInputText(),
      'favorite_artist_3'      => new sfWidgetFormInputText(),
      'favorite_music_genre_1' => new sfWidgetFormInputText(),
      'favorite_music_genre_2' => new sfWidgetFormInputText(),
      'favorite_music_genre_3' => new sfWidgetFormInputText(),
      'size_of_storage_space'  => new sfWidgetFormInputText(),
      'facebook_uid'           => new sfWidgetFormInputText(),
      'email_hash'             => new sfWidgetFormInputText(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'email_new'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'firstname'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'lastname'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'validate_at'            => new sfValidatorDateTime(array('required' => false)),
      'validate'               => new sfValidatorString(array('max_length' => 33, 'required' => false)),
      'type'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'gender'                 => new sfValidatorString(array('max_length' => 10)),
      'culture'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'country'                => new sfValidatorString(array('max_length' => 255)),
      'way'                    => new sfValidatorString(array('max_length' => 255)),
      'additional_address'     => new sfValidatorString(array('max_length' => 255)),
      'zip_code'               => new sfValidatorString(array('max_length' => 255)),
      'city'                   => new sfValidatorString(array('max_length' => 255)),
      'date_of_birth'          => new sfValidatorDate(),
      'phone_number'           => new sfValidatorInteger(),
      'profile_photo'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'favorite_movie_1'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'favorite_movie_2'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'favorite_movie_3'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'favorite_artist_1'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'favorite_artist_2'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'favorite_artist_3'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'favorite_music_genre_1' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'favorite_music_genre_2' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'favorite_music_genre_3' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'size_of_storage_space'  => new sfValidatorInteger(array('required' => false)),
      'facebook_uid'           => new sfValidatorInteger(array('required' => false)),
      'email_hash'             => new sfValidatorPass(array('required' => false)),
      'created_at'             => new sfValidatorDateTime(),
      'updated_at'             => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'sfGuardUserProfile', 'column' => array('user_id'))),
        new sfValidatorDoctrineUnique(array('model' => 'sfGuardUserProfile', 'column' => array('email_new'))),
      ))
    );

    $this->widgetSchema->setNameFormat('sf_guard_user_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }

}
