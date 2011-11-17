<?php

/**
 * sfGuardUser form.
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserForm extends PluginsfGuardUserForm
{
  public function configure()
  {
	// parent::configure();

	//champs enlevés du formulaire sfGuardUserForm
     // unset(
			// $this['id'],
			// $this['groups_list'],
			// $this['permissions_list'],
			// $this['is_active'],
			// $this['is_super_admin'],
			// $this['created_at'], 
			// $this['updated_at'], 
			// $this['last_login'], 
			// $this['algorithm'], 
			// $this['salt'],
			// $this['favorite_movie_1'],
			// $this['favorite_movie_2'],
			// $this['favorite_movie_3'],
			// $this['favorite_artist_1'],
			// $this['favorite_artist_2'],
			// $this['favorite_artist_3'],
			// $this['favorite_music_genre_1'],
			// $this['favorite_music_genre_2'],
			// $this['favorite_music_genre_3']
			// );

	
	//personnalisation des widget(champs) du formulaire sfGuardUser
	$this->widgetSchema['first_name'] = new sfWidgetFormInput();
	$this->widgetSchema['last_name'] = new sfWidgetFormInput();
	// $this->widgetSchema['email_address'] = new sfWidgetFormInput();
	$this->widgetSchema['username'] = new sfWidgetFormInput();
	// $this->widgetSchema['password'] = new sfWidgetFormInputPassword ();
	// $this->widgetSchema['password_again'] = new sfWidgetFormInputPassword ();
	
    // $this->widgetSchema->setNameFormat('contact[%s]');
 
 
	//personnalisation des validateurs  du formulaire sfGuardUser
    $this->setValidators(array(
      'first_name'    => new sfValidatorString(
													array('required' => true),
													array(
															'invalid' => 'The first name must be a string less than 255 characters.',
															'required' => 'The first name is required.'
														)
												),
      'last_name'    => new sfValidatorString(
												array('required' => true),
												array(
														'invalid' => 'The last name must be a string less than 255 characters.',
														'required' => 'This last name is required.'
													)
											),
      // 'email_address'   => new sfValidatorEmail(
													// array('required' => true),
													// array(
															// 'invalid' => 'The input value must be an email.',
															// 'required' => 'The email is required.'
														// )
												// ),
      'username' => new sfValidatorString(
											array(
													'required' => true,
													'min_length' => 5,
												),
											array(
													'invalid' => 'The username must be a string less than 255 characters.',
													'required' => 'The username is required and must be unique.',
													'min_length' => '%value% have less than 5 caracters'
												)
										 ),
      // 'password' => new sfValidatorString(
											// array(
													// 'required' => true,
													// 'min_length' => 7,
												// ),
											// array(
													// 'invalid' => 'The password must be a string less than 255 characters.',
													// 'required' => 'The password is required and must be secret.',
													// 'min_length' => 'This password have less than 7 caracters'
												// )
										// ),
      // 'password_again' => new sfValidatorString(
													// array(
													// 'required' => true,
													// 'min_length' => 7,
														// ),
													// array(
															// 'invalid' => 'This value must be the same with the precedent password you entered.',
															// 'required' => 'The password is required and must be secret.',
															// 'min_length' => 'This password have less than 7 caracters'
														// )
												// ),
    ));
	
	// $this->mergePostValidator(
								// new sfValidatorSchemaCompare(
																// 'password',
																// sfValidatorSchemaCompare::EQUAL,
																// 'password_again', 
																// array(), 
																// array('invalid' => 'The two passwords must be the same.')
															// )
							// );      
  
	// $this->setPostValidator(
		  // new sfValidatorSchemaCompare('password', '==', 'password_again')
		// );
		
		
	//les helpers 
	// $this->widgetSchema->setHelp('password_again', 'Retype the previous password to prevent errors.');
	// $this->widgetSchema->setHelp('email_address', 'Require a valid email address.');
	// $this->widgetSchema->setHelp('username', 'Require an unique username.');
	
   
  }
}
