<?php

/**
 * article actions.
 *
 * @package    deevox
 * @subpackage article
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class articleActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
	// Verification des utilisteurs connectés
	$deevonaute = sfGuardUser::getUserByUsername($request->getParameter('username'));
	if(!$deevonaute)
	{
		$this->forward404Unless($deevonaute = $this->getUser()->getGuardUser(),sprintf(sfConfig::get('app_error_message_no_user')));
	}

    $this->articles = $deevonaute->getAllActiveArticleByDeevonaute();

	$article = new tdArticle();
	$article->setAuthor($deevonaute);
	$this->form = new tdArticleForm($article);
  }

  public function executeShow(sfWebRequest $request)
  {
	// Verification des utilisteurs connectés
	$deevonaute = sfGuardUser::getUserByUsername($request->getParameter('username'));
	if(!$deevonaute)
	{
		$this->forward404Unless($deevonaute = $this->getUser()->getGuardUser(),sprintf(sfConfig::get('app_error_message_no_user')));
	}
	// exit();
	// $id = $request->getParameter('id');
    // $articles = $deevonaute->getActiveArticleByDeevonaute();
    // $this->article = $deevonaute->getActiveArticleByDeevonaute();
    // $this->td_article = Doctrine_Core::getTable('tdArticle')->find(array($request->getParameter('id')));
    // $this->forward404Unless($this->td_article);
	$id = $this->getUser()->getGuardUser()->getId();
    $articles = Doctrine::getTable('tdArticle')->getArticleWithAuthorByIdQuery($id)->fetchArray();
    $this->article = $articles[0];
	
	echo $this->article;
	exit();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new tdArticleForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));
	$this->forward404Unless($deevonaute = $this->getUser()->getGuardUser(),sprintf(sfConfig::get('app_error_message_no_user')));
	
    $article = new tdArticle();
	$article->setAuthor($deevonaute);
	$this->form = new tdArticleForm($article);

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($td_article = Doctrine_Core::getTable('tdArticle')->find(array($request->getParameter('id'))), sprintf('Object td_article does not exist (%s).', $request->getParameter('id')));
    $this->form = new tdArticleForm($td_article);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($td_article = Doctrine_Core::getTable('tdArticle')->find(array($request->getParameter('id'))), sprintf('Object td_article does not exist (%s).', $request->getParameter('id')));
    $this->form = new tdArticleForm($td_article);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($td_article = Doctrine_Core::getTable('tdArticle')->find(array($request->getParameter('id'))), sprintf('Object td_article does not exist (%s).', $request->getParameter('id')));
    $td_article->delete();

    $this->redirect('article/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $td_article = $form->save();
	
      // $this->redirect('article/edit?id='.$td_article->getId());
      $this->redirect('article/index?username='.$this->getUser()->getGuardUser()->getUsername());
    }
  }
}
