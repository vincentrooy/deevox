<?php

/**
 * artiste actions.
 *
 * @package    deevox
 * @subpackage artiste
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class artisteActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->artists = Doctrine_Core::getTable('artist')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
	// Verification des utilisteurs connectés
	$deevonaute = sfGuardUser::getUserByUsername($request->getParameter('username'));
	if(!$deevonaute)
	{
		$this->forward404Unless($deevonaute = $this->getUser()->getGuardUser(),sprintf(sfConfig::get('app_error_message_no_user')));
	}
	
    $artiste = new Artist();
	$this->forward404Unless($this->artist = $artiste->getArtistByDeevonaute($deevonaute->getId()),sprintf(sfConfig::get('app_error_message_user_not_yet_artist')));
	// $genresMusicaux = new ArtisteGenreMusical();
	// $this->genresMusicaux = $genresMusicaux->getMusicalStyleByArtist($this->artiste->getId());
    $this->forward404Unless($this->artist);
	
    // $this->artist = Doctrine_Core::getTable('artist')->find(array($request->getParameter('id')));
    // $this->forward404Unless($this->artist);
  }

  public function executeNew(sfWebRequest $request)
  {
	$this->forward404Unless($deevonaute = $this->getUser()->getGuardUser(), sprintf(sfConfig::get('app_error_message_no_user')));
    
	$artist = new artist();
	$artist->setUser($deevonaute);
	$this->form = new artistForm($artist);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->forward404Unless($deevonaute = $this->getUser()->getGuardUser(), sprintf(sfConfig::get('app_error_message_no_user')));
    
	$artist = new artist();
	$artist->setUser($deevonaute);
	$artist->setCreationDateOfTheAccount(date("Y-m-d G:i:s"));
	$this->form = new artistForm($artist);
	
	// $this->form = new artistForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($artist = Doctrine_Core::getTable('artist')->find(array($request->getParameter('id'))), sprintf('Object artist does not exist (%s).', $request->getParameter('id')));
    $this->form = new artistForm($artist);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($artist = Doctrine_Core::getTable('artist')->find(array($request->getParameter('id'))), sprintf('Object artist does not exist (%s).', $request->getParameter('id')));
    $this->form = new artistForm($artist);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($artist = Doctrine_Core::getTable('artist')->find(array($request->getParameter('id'))), sprintf('Object artist does not exist (%s).', $request->getParameter('id')));
    $artist->delete();

    $this->redirect('artiste/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $artist = $form->save();
	  $this->getUser()->getGuardUser()->addGroupByName('artiste');
	  
      // $this->redirect('artiste/edit?id='.$artist->getId());
      $this->redirect('@homepage');
    }
  }
}
