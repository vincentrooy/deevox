<?php

/**
 * deevonaute actions.
 *
 * @package    deevox
 * @subpackage deevonaute
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class deevonauteActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sf_guard_users = Doctrine_Core::getTable('sfGuardUser')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
	// Verification des utilisteurs connectés
	$this->sf_guard_user = sfGuardUser::getUserByUsername($request->getParameter('username'));
	if(!$this->sf_guard_user)
	{
		$this->forward404Unless($this->sf_guard_user = $this->getUser()->getGuardUser(),sprintf(sfConfig::get('app_error_message_no_user')));
	}
    // $this->sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id')));
    //$this->redirect('@homepage');
  }

  public function executeNew(sfWebRequest $request)
  {
    // $this->form = new sfGuardUserForm();
    $this->form = new sfApplyApplyForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    // $this->form = new sfGuardUserForm();
    $this->form = new sfApplyApplyForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    // $this->forward404Unless($sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user does not exist (%s).', $request->getParameter('id')));
    // $this->form = new sfGuardUserForm($sf_guard_user);
	$this->sf_guard_user = $this->getRoute()->getObject();
    $id = $this->getUser()->getGuardUser()->getId();
    $param_id = $request->getParameter('id');
    if($id == $param_id)
	{
		// $this->form = $this->configuration->getForm($this->sf_guard_user);
		$this->form = new sfGuardUserForm($sf_guard_user);
    }
	else
	{
		$this->redirect('@homepage');
	}
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardUserForm($sf_guard_user);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user does not exist (%s).', $request->getParameter('id')));
    $sf_guard_user->delete();

    $this->redirect('deevonaute/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sf_guard_user = $form->save();

	  $this->getUser()->signin($sf_guard_user);
	  // exit();
      // $this->redirect('deevonaute/edit?id='.$sf_guard_user->getId());
      $this->redirect('sfApply/reset');
    }
  }
  
   //*************************** check username ************************************//
  public function executeCheckUsername(sfWebRequest $request)
  {
	$user = sfGuardUser::getUserByUsername($request->getParameter("username"));
	//$this->forward404Unless($request->isMethod(sfRequest::POST));
	if($user != "")
	{
		$this->renderText('The username <STRONG>'.$request->getParameter("username").'</STRONG> is already in use.');
	}
	else
	{
		$this->renderText('OK');
	}
	return sfView::NONE; 
  }
}
