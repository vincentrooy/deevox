<?php

/**
 * Coupon form base class.
 *
 * @method Coupon getObject() Returns the current form's model object
 *
 * @package    deevox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCouponForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'code'       => new sfWidgetFormInputText(),
      'discount'   => new sfWidgetFormInputText(),
      'start'      => new sfWidgetFormInputText(),
      'end'        => new sfWidgetFormInputText(),
      'active'     => new sfWidgetFormInputCheckbox(),
      'minprice'   => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'code'       => new sfValidatorString(array('max_length' => 20)),
      'discount'   => new sfValidatorPass(array('required' => false)),
      'start'      => new sfValidatorPass(array('required' => false)),
      'end'        => new sfValidatorPass(array('required' => false)),
      'active'     => new sfValidatorBoolean(array('required' => false)),
      'minprice'   => new sfValidatorPass(),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('coupon[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Coupon';
  }

}
