<?php

/**
 * Article filter form base class.
 *
 * @package    deevox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArticleFormFilter extends tdArticleFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('article_filters[%s]');
  }

  public function getModelName()
  {
    return 'Article';
  }
}
