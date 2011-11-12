<?php

/**
 * Deevonaute filter form base class.
 *
 * @package    deevox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDeevonauteFormFilter extends sfGuardUserProfileFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('deevonaute_filters[%s]');
  }

  public function getModelName()
  {
    return 'Deevonaute';
  }
}
