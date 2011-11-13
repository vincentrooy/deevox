<?php

/**
 * Project form base class.
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormBaseTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class sfGuardUserAdminForm  extends BasesfGuardUserAdminForm 
{
  public function configure()
  {
	parent::configure();

    // $this->useFields(array('username'));
    // $this->setValidator('email_address', new sfValidatorString(array(
    // 'max_length' => 255,
    // 'required' => false
    // )));

    //On imbrique le formulaire pour personnaliser notre canard
    // $profileForm = new CanardCategorieForm($this->getObject()->getCanardCategorie());
    // unset($profileForm['id'], $profileForm['sf_guard_user_id'], $profileForm['slug']);
    // $this->embedForm('Canard', $profileForm);

    //On imbrique le formulaire du profile du plugin FDA
    // $forked = new sfGuardUserProfileForm($this->getObject()->getProfile());
    // $forked->useFields(array('email', 'firstname', 'lastname'));
    // $this->embedForm('identifiant',$forked);

  }
}
