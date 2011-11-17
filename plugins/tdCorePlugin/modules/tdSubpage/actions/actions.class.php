<?php

require_once dirname(__FILE__).'/../lib/tdSubpageGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/tdSubpageGeneratorHelper.class.php';

/**
 * tdSubpage actions.
 *
 * @package    plugin
 * @subpackage tdCorePlugin
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tdSubpageActions extends autoTdSubpageActions
{
 /**
  * Shows a single tdSubpage which is given by the 'heading' parameter.
  *
  * @param sfRequest A request object
  */
  public function executeShow(sfWebRequest $request)
  {
    $this->setVar('td_subpage', $this->getRoute()->getObject(), true);
    $this->forward404If(!$this->td_subpage, 'Strona nie istnieje');
    $this->getResponse()->setTitle($this->td_subpage->getTitle());
  }

  /**
   * Activates a subpage from admin generator list using AJAX.
   *
   * @param sfWebRequest $request
   * @return Partial - generated partial enabling subpage deactivating (switch).
   */
  public function executeActivate(sfWebRequest $request)
  {
    $td_subpage = tdSubpageTable::getSubpageByIdQuery($request->getParameter('id'))->fetchOne();
    $td_subpage->activate();

    return $this->renderPartial('tdSubpage/ajax_deactivate', array('td_subpage' => $td_subpage));
  }

  /**
   * Deactivates a subpage from admin generator list using AJAX.
   *
   * @param sfWebRequest $request
   * @return Partial - generated partial enabling subpage activating (switch).
   */
  public function executeDeactivate(sfWebRequest $request)
  {
    $td_subpage = tdSubpageTable::getSubpageByIdQuery($request->getParameter('id'))->fetchOne();
    $td_subpage->deactivate();

    return $this->renderPartial('tdSubpage/ajax_activate', array('td_subpage' => $td_subpage));
  }
}
