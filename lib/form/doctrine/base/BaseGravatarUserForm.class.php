<?php

/**
 * GravatarUser form base class.
 *
 * @method GravatarUser getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGravatarUserForm extends sfGuardUserForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('gravatar_user[%s]');
  }

  public function getModelName()
  {
    return 'GravatarUser';
  }

}
