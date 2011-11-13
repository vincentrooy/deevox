<?php
require_once dirname(__FILE__).'/../lib/BasesfApplyActions.class.class.php';
/**
 * sfApply actions.
 *
 * @package    deevox
 * @subpackage sfApply
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
// class sfApplyActions extends sfActions
class sfApplyActions extends sfApplyActionsLibrary
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  
  protected function activateUser(sfGuardUser $user)
  {
	//$user->addGroupByName('Membre');
	//parent::activateUser($user);
  }
}
