<?php
require_once(sfConfig::get('sf_plugins_dir').'/sfForkedDoctrineApplyPlugin/modules/sfApply/lib/BasesfApplyActions.class.php');
/**
 * sfApply actions.
 *
 * @package    deevox
 * @subpackage sfApply
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
// class sfApplyActions extends sfActions
class sfApplyActions extends BasesfApplyActions
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
	//let us add the new deevonaute to the deevonaute group
	$user->addGroupByName('deevonaute');
	
	//let us activate the deevonaute profile
	parent::activateUser($user);
  }
}
