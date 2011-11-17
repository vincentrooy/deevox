<?php

/**
 * tdTrackAlbum filter form base class.
 *
 * @package    deevox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasetdTrackAlbumFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'author'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'place'         => new sfWidgetFormFilterInput(),
      'released_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'description'   => new sfWidgetFormFilterInput(),
      'file_cover'    => new sfWidgetFormFilterInput(),
      'active'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'type'          => new sfWidgetFormFilterInput(),
      'is_for_single' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'artist_id'     => new sfWidgetFormFilterInput(),
      'product_id'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
      'author'        => new sfValidatorPass(array('required' => false)),
      'place'         => new sfValidatorPass(array('required' => false)),
      'released_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'description'   => new sfValidatorPass(array('required' => false)),
      'file_cover'    => new sfValidatorPass(array('required' => false)),
      'active'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'type'          => new sfValidatorPass(array('required' => false)),
      'is_for_single' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'artist_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'product_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('td_track_album_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'tdTrackAlbum';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'name'          => 'Text',
      'author'        => 'Text',
      'place'         => 'Text',
      'released_at'   => 'Date',
      'description'   => 'Text',
      'file_cover'    => 'Text',
      'active'        => 'Boolean',
      'type'          => 'Text',
      'is_for_single' => 'Boolean',
      'artist_id'     => 'Number',
      'product_id'    => 'Number',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
