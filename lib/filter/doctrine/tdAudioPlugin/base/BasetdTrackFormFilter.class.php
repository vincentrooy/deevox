<?php

/**
 * tdTrack filter form base class.
 *
 * @package    deevox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasetdTrackFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'td_track_album_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Album'), 'add_empty' => true)),
      'file'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'title'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'           => new sfWidgetFormFilterInput(),
      'position'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'                  => new sfWidgetFormFilterInput(),
      'artist_id'             => new sfWidgetFormFilterInput(),
      'product_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'composer'              => new sfWidgetFormFilterInput(),
      'lyricist'              => new sfWidgetFormFilterInput(),
      'interpreter'           => new sfWidgetFormFilterInput(),
      'producer'              => new sfWidgetFormFilterInput(),
      'place_of_registration' => new sfWidgetFormFilterInput(),
      'photo_track'           => new sfWidgetFormFilterInput(),
      'active'                => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'td_track_album_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Album'), 'column' => 'id')),
      'file'                  => new sfValidatorPass(array('required' => false)),
      'title'                 => new sfValidatorPass(array('required' => false)),
      'description'           => new sfValidatorPass(array('required' => false)),
      'position'              => new sfValidatorPass(array('required' => false)),
      'type'                  => new sfValidatorPass(array('required' => false)),
      'artist_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'product_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'composer'              => new sfValidatorPass(array('required' => false)),
      'lyricist'              => new sfValidatorPass(array('required' => false)),
      'interpreter'           => new sfValidatorPass(array('required' => false)),
      'producer'              => new sfValidatorPass(array('required' => false)),
      'place_of_registration' => new sfValidatorPass(array('required' => false)),
      'photo_track'           => new sfValidatorPass(array('required' => false)),
      'active'                => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('td_track_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'tdTrack';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'td_track_album_id'     => 'ForeignKey',
      'file'                  => 'Text',
      'title'                 => 'Text',
      'description'           => 'Text',
      'position'              => 'Text',
      'type'                  => 'Text',
      'artist_id'             => 'Number',
      'product_id'            => 'Number',
      'composer'              => 'Text',
      'lyricist'              => 'Text',
      'interpreter'           => 'Text',
      'producer'              => 'Text',
      'place_of_registration' => 'Text',
      'photo_track'           => 'Text',
      'active'                => 'Boolean',
      'created_at'            => 'Date',
      'updated_at'            => 'Date',
    );
  }
}
