<?php

/**
 * BaseCoupon
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $code
 * @property double $discount
 * @property datetime $start
 * @property datetime $end
 * @property boolean $active
 * @property double $minprice
 * 
 * @method string   getCode()     Returns the current record's "code" value
 * @method double   getDiscount() Returns the current record's "discount" value
 * @method datetime getStart()    Returns the current record's "start" value
 * @method datetime getEnd()      Returns the current record's "end" value
 * @method boolean  getActive()   Returns the current record's "active" value
 * @method double   getMinprice() Returns the current record's "minprice" value
 * @method Coupon   setCode()     Sets the current record's "code" value
 * @method Coupon   setDiscount() Sets the current record's "discount" value
 * @method Coupon   setStart()    Sets the current record's "start" value
 * @method Coupon   setEnd()      Sets the current record's "end" value
 * @method Coupon   setActive()   Sets the current record's "active" value
 * @method Coupon   setMinprice() Sets the current record's "minprice" value
 * 
 * @package    deevox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCoupon extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sfCartCoupon');
        $this->hasColumn('code', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('discount', 'double', null, array(
             'type' => 'double',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('start', 'datetime', null, array(
             'type' => 'datetime',
             ));
        $this->hasColumn('end', 'datetime', null, array(
             'type' => 'datetime',
             ));
        $this->hasColumn('active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('minprice', 'double', null, array(
             'type' => 'double',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}