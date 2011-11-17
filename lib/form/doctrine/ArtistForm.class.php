<?php

/**
 * Artist form.
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ArtistForm extends BaseArtistForm
{
  public function configure()
  {
	unset(
		$this['id'], 
		$this['sf_guard_user_id'], 
		$this['creation_date_of_the_account'], 
		$this['nationality'], 
		$this['deevo_theme_id'],
		// $this['culture'],
		// $this['validate'],
		// $this['validate_at'],
		$this['size_of_storage_space'],
		$this['facebook_uid'],
		$this['email_hash']
		// $this['user_id']
		);
		
	//personnalisation des widget(champs) du formulaire sfGuardUser
	$this->widgetSchema['photo_biography'] = new sfWidgetFormInputFileEditable(array(
													  'label'     => 'Photo',
													  'file_src'    => $this->getObject()->getArtistFileSrcMini(),
													  'edit_mode'   => !$this->isNew(),
													  'is_image'    => !is_null($this->getObject()->getArtistFileSrc()),
													  'delete_label' => 'Supprimer',
													  'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
												  ));
	
	// $this->widgetSchema['gender'] = new sfWidgetFormChoice(array( 
																	// 'expanded' => true,
																	// 'choices'  => array('Male'=>'Male','Female'=>'Female'),
																	// 'multiple' => false,
																// ));
	//valeur par defaut du choix du genre
	// $this->setDefault('gender','Male');
	
	// $this->widgetSchema['country'] = new sfWidgetFormI18nChoiceCountry(
																		// array('culture' => sfContext::getInstance()->getUser()->getCulture())
																		// );
	// $this->widgetSchema['way'] = new sfWidgetFormInput();
	// $this->widgetSchema['additional_address'] = new sfWidgetFormInput();
	// $this->widgetSchema['zip_code'] = new sfWidgetFormInput();
	// $this->widgetSchema['city'] = new sfWidgetFormInput();
	
			
																
	$years = range(strftime("%Y"), strftime("%Y", strtotime("-100 years")));
 
	$this->widgetSchema['date_of_early_career'] = new sfWidgetFormJQueryDate(
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
																
	
	$this->widgetSchema['artistName'] = new sfWidgetFormInput();
	$this->widgetSchema['hometown'] = new sfWidgetFormInput();
	$this->widgetSchema['website'] = new sfWidgetFormInput();
	$this->widgetSchema['facebook_address'] = new sfWidgetFormInput();
	$this->widgetSchema['twitter_address'] = new sfWidgetFormInput();
	$this->widgetSchema['number_of_album'] = new sfWidgetFormInput();
	$this->widgetSchema['number_of_title'] = new sfWidgetFormInput();
	$this->widgetSchema['resume'] = new sfWidgetFormTextarea ();
	$this->widgetSchema['detail'] = new sfWidgetFormTextarea ();
	
	
	
	
 
	//personnalisation des validateurs  du formulaire ArtistForm
	
    $this->setValidators(array(
      'photo_biography'    => new sfValidatorFile(
													array(
															'max_size' => 10240000,  //10 Mo converti en bytes
															'path'=> sfConfig::get('sf_upload_dir').'/photos/artistes/',
															'mime_types' => 'web_images',
															'required' => false,
															),
													array(
													'max_size' => 'The size of the image you entered is too high',
													'mime_types' => 'The file you entered is not an image',
													)
												),
												
 
									
      'artistName' => new sfValidatorString(
												array('required' => true),
												array(
														'invalid' => 'The artist name must be a string less than 255 characters.',
														'required' => 'The artist name is required.'
													)
											),
      'hometown' => new sfValidatorString(
											array('required' => true),
											array(
													'invalid' => 'The hometown must be a string less than 255 characters.',
													'required' => 'The hometown is required.'
												)
										),
      'website' => new sfValidatorString(
											array('required' => false),
											array(
													'invalid' => 'The website address must be a string less than 255 characters.',
												)
										),
      'facebook_address' => new sfValidatorString(
											array('required' => false),
											array(
													'invalid' => 'The facebook address must be a string less than 255 characters.',
												)
										),
      'twitter_address' => new sfValidatorString(
											array('required' => false),
											array(
													'invalid' => 'The twitter address must be a string less than 255 characters.',
												)
										),
      'number_of_album' => new sfValidatorNumber(
											array('required' => false),
											array(
													'invalid' => 'The number of album code must be a number.',
												)
										),
      'number_of_title' => new sfValidatorNumber(
											array('required' => false),
											array(
													'invalid' => 'The number of title code must be a number.',
												)
										),
	  
	  
	 'detail' => new sfValidatorString(
											array('required' => false),
											array(
													'invalid' => 'The detail of your biography must be a string less than 255 characters.',
												)
										),
										
	'resume' => new sfValidatorString(
											array('required' => false),
											array(
													'invalid' => 'The resume of your biography must be a string less than 255 characters.',
												)
										),
									
      'date_of_early_career' => new sfValidatorDate(
												array('required' => true),
												array('required' => 'The date of birthday is required')
											),


    ));
	
		$this->widgetSchema->setLabels( array(
            'artistName' => 'Artist Name*',
            'hometown' => 'Hometown*',
            'photo' => 'Photo Biography'
        ) );	
		
	// les helpers 
	$this->widgetSchema->setHelp('photo_biography', 'jpeg, png, gif');
  }
}
