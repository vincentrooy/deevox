<?php

/**
 * Deevonaute form base class.
 *
 * @method Deevonaute getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDeevonauteForm extends sfGuardUserProfileForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('deevonaute[%s]');
  }

  public function getModelName()
  {
    return 'Deevonaute';
  }

}
