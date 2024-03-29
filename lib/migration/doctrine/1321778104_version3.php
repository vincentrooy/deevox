<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version3 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('comment', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'record_model' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'record_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             'author_name' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'author_email' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'author_website' => 
             array(
              'type' => 'string',
              'extra' => 'link',
              'length' => '255',
             ),
             'body' => 
             array(
              'type' => 'clob',
              'notnull' => '1',
              'length' => '',
             ),
             'is_delete' => 
             array(
              'type' => 'boolean',
              'default' => '0',
              'length' => '25',
             ),
             'edition_reason' => 
             array(
              'type' => 'clob',
              'length' => '',
             ),
             'reply' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'indexes' => 
             array(
              'record_model_record_id' => 
              array(
              'fields' => 
              array(
               0 => 'record_model',
               1 => 'record_id',
              ),
              ),
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
        $this->createTable('comment_report', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'reason' => 
             array(
              'type' => 'clob',
              'notnull' => '1',
              'length' => '',
             ),
             'referer' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'state' => 
             array(
              'type' => 'enum',
              'values' => 
              array(
              0 => 'valid',
              1 => 'invalid',
              2 => 'untreated',
              ),
              'default' => 'untreated',
              'length' => '',
             ),
             'id_comment' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
    }

    public function down()
    {
        $this->dropTable('comment');
        $this->dropTable('comment_report');
    }
}