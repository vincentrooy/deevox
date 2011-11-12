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
    $this->deevonautes = Doctrine_Core::getTable('deevonaute')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->deevonaute = Doctrine_Core::getTable('deevonaute')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->deevonaute);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new deevonauteForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new deevonauteForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($deevonaute = Doctrine_Core::getTable('deevonaute')->find(array($request->getParameter('id'))), sprintf('Object deevonaute does not exist (%s).', $request->getParameter('id')));
    $this->form = new deevonauteForm($deevonaute);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($deevonaute = Doctrine_Core::getTable('deevonaute')->find(array($request->getParameter('id'))), sprintf('Object deevonaute does not exist (%s).', $request->getParameter('id')));
    $this->form = new deevonauteForm($deevonaute);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($deevonaute = Doctrine_Core::getTable('deevonaute')->find(array($request->getParameter('id'))), sprintf('Object deevonaute does not exist (%s).', $request->getParameter('id')));
    $deevonaute->delete();

    $this->redirect('deevonaute/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $deevonaute = $form->save();

      $this->redirect('deevonaute/edit?id='.$deevonaute->getId());
    }
  }
}
