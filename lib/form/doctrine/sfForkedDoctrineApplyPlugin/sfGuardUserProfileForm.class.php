<?php

/**
 * sfGuardUserProfile form.
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserProfileForm extends PluginsfGuardUserProfileForm
{
  public function configure()
  {
		// parent::configure();


	 
	unset(
		$this['id'],
		// $this['sf_guard_user_id'], 
		// $this['firstname'], 
		// $this['lastname'], 
		// $this['email_new'],
		$this['culture'],
		// $this['validate'],
		// $this['validate_at'],
		$this['size_of_storage_space'],
		$this['facebook_uid'],
		$this['email_hash']
		// $this['user_id']
		);
		
	//personnalisation des widget(champs) du formulaire sfGuardUser
	
	
	$this->widgetSchema['gender'] = new sfWidgetFormChoice(array( 
																	'expanded' => true,
																	'choices'  => array('Male'=>'Male','Female'=>'Female'),
																	'multiple' => false,
																));
	//valeur par defaut du choix du genre
	$this->setDefault('gender','Male');
	
	$this->widgetSchema['country'] = new sfWidgetFormI18nChoiceCountry(
																		array('culture' => sfContext::getInstance()->getUser()->getCulture())
																		);
	$this->widgetSchema['way'] = new sfWidgetFormInput();
	$this->widgetSchema['additional_address'] = new sfWidgetFormInput();
	$this->widgetSchema['zip_code'] = new sfWidgetFormInput();
	$this->widgetSchema['city'] = new sfWidgetFormInput();
	
	$this->widgetSchema['profile_photo'] = new sfWidgetFormInputFileEditable(array(
													  'label'     => 'Photo',
													  'file_src'    => $this->getObject()->getDeevonauteFileSrcMini(),
													  'edit_mode'   => !$this->isNew(),
													  'is_image'    => !is_null($this->getObject()->getDeevonauteFileSrc()),
													  'delete_label' => 'Supprimer',
													  'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
												  ));
	
	
	$years = range(strftime("%Y"), strftime("%Y", strtotime("-100 years")));
	$this->widgetSchema['date_of_birth'] = new sfWidgetFormJQueryDate(
																		array(
																				'image' => '/images/calendar.png',
																				'culture' => sfContext::getInstance()->getUser()->getCulture(),
																				'date_widget' => new sfWidgetFormI18nDate(
																															array(
																																	'culture' => sfContext::getInstance()->getUser()->getCulture(),
																																	'years' => array_combine($years, $years),
																																	)
																														),
																			 )
																	);
																	
	$this->widgetSchema['phone_number'] = new sfWidgetFormInput();
	
	$this->widgetSchema['favorite_movie_1'] = new sfWidgetFormInput();
	$this->widgetSchema['favorite_movie_2'] = new sfWidgetFormInput();
	$this->widgetSchema['favorite_movie_3'] = new sfWidgetFormInput();
	$this->widgetSchema['favorite_artist_1'] = new sfWidgetFormInput();
	$this->widgetSchema['favorite_artist_2'] = new sfWidgetFormInput();
	$this->widgetSchema['favorite_artist_3'] = new sfWidgetFormInput();
	$this->widgetSchema['favorite_music_genre_1'] = new sfWidgetFormInput();
	$this->widgetSchema['favorite_music_genre_2'] = new sfWidgetFormInput();
	$this->widgetSchema['favorite_music_genre_3'] = new sfWidgetFormInput();
	
	
	
	
 
 
	//personnalisation des validateurs  du formulaire sfGuardUser
	$this->validatorSchema['photo_delete'] = new sfValidatorPass();
	
    $this->setValidators(array(
												
      'gender'    => new sfValidatorString(array('required' => true)),
      'country'   => new sfValidatorI18nChoiceCountry (array('required' => true)),
      'way' => new sfValidatorString(
										array('required' => true),
										array(
												'invalid' => 'The way must be a string less than 255 characters.',
												'required' => 'The way is required.'
											)
									),
      'additional_address' => new sfValidatorString(
														array('required' => true),
														array(
																'invalid' => 'The additional address must be a string less than 255 characters.',
																'required' => 'The additional address is required.'
															)
													),
	  'profile_photo'    => new sfValidatorFile(
													array(
															'max_size' => 10240000,  //10 Mo converti en bytes
															'path'=> sfConfig::get('sf_upload_dir').'/photos/deevonautes/',
															'mime_types' => 'web_images',
															'required' => false,
															),
													array(
													'max_size' => 'The size of the image you entered is too high',
													'mime_types' => 'The file you entered is not an image',
													)
												),
      'zip_code' => new sfValidatorNumber(
											array('required' => true),
											array(
													'invalid' => 'The zip code must be a number.',
													'required' => 'The zip code is required.'
												)
										),
      'city' => new sfValidatorString(
										array('required' => true),
										array(
												'invalid' => 'The city must be a string less than 255 characters.',
												'required' => 'The city is required.'
											)
									),
									
      'date_of_birth' => new sfValidatorDate(
												array('required' => true),
												array('required' => 'The date of birthday is required')
											),
	  
      'phone_number' => new sfValidatorNumber(
												array('required' => true),
												array(
														'invalid' => 'The phone number must be a number.',
														'required' => 'The phone number is required.'
													)
											 ),
											 
      'favorite_movie_1' => new sfValidatorString(array('required' => false)),
      'favorite_movie_2' => new sfValidatorString(array('required' => false)),
      'favorite_movie_3' => new sfValidatorString(array('required' => false)),
      'favorite_artist_1' => new sfValidatorString(array('required' => false)),
      'favorite_artist_2' => new sfValidatorString(array('required' => false)),
      'favorite_artist_3' => new sfValidatorString(array('required' => false)),
      'favorite_music_genre_1' => new sfValidatorString(array('required' => false)),
      'favorite_music_genre_2' => new sfValidatorString(array('required' => false)),
      'favorite_music_genre_3' => new sfValidatorString(array('required' => false)),
    ));
		
		
	//les helpers 
	$this->widgetSchema->setHelp('profile_photo', 'jpeg, png, gif');
	

  
  }
}
