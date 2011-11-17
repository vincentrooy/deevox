<?php

/**
 * tdArticle form.
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tdArticleForm extends PlugintdArticleForm
{
  public function configure()
  {
  
	unset(
		$this['id'], 
		$this['author_id'], 
		$this['active'], 
		$this['type']
		);
		
	//personnalisation des widget(champs) du formulaire sfGuardUser
	
	
	
	$this->widgetSchema['title'] = new sfWidgetFormInput();
	$this->widgetSchema['text'] = new sfWidgetFormTextarea ();
	$this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
													  'label'     => 'image',
													  'file_src'    => $this->getObject()->getArticleFileSrcMini(),
													  'edit_mode'   => !$this->isNew(),
													  'is_image'    => !is_null($this->getObject()->getArticleFileSrc()),
													  'delete_label' => 'Supprimer',
													  'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
												  ));
	
	
	
	
	
 
	//personnalisation des validateurs  du formulaire ArtistForm
	
    $this->setValidators(array(
      'image'    => new sfValidatorFile(
													array(
															'max_size' => 10240000,  //10 Mo converti en bytes
															'path'=> sfConfig::get('sf_upload_dir').'/photos/td/blog',
															'mime_types' => 'web_images',
															'required' => false,
															),
													array(
													'max_size' => 'The size of the image you entered is too high',
													'mime_types' => 'The file you entered is not an image',
													)
												),
												
 
									
      'title' => new sfValidatorString(
												array('required' => true),
												array(
														'invalid' => 'The Title must be a string less than 255 characters.',
														'required' => 'The Title is required.'
													)
											),

	 'text' => new sfValidatorString(
											array('required' => false),
											array(
													'invalid' => 'The detail of your biography must be a string less than 255 characters.',
												)
										),

    ));
	
		// $this->widgetSchema->setLabels( array(
            // 'artistName' => 'Artist Name*',
            // 'hometown' => 'Hometown*',
            // 'photo' => 'Photo Biography'
        // ) );	
		
	// les helpers 
	$this->widgetSchema->setHelp('image', 'jpeg, png, gif');
  }
}
