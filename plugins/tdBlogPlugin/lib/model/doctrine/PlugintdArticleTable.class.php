<?php

/**
 * PlugintdArticleTable
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    tdBlogPlugin
 * @subpackage model
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
class PlugintdArticleTable extends Doctrine_Table
{
  /**
   * Returns DQL query retrieving recent articles.
   *
   * @return Doctrine_Query
   */
  static public function getArticlesWithAuthorsQuery($count)
  {
    $fields = 'a.id, a.text, a.title, a.image, a.created_at, a.updated_at, ';
    $fields .= 'CONCAT(p.first_name, " ", p.last_name) as author_name';
    return Doctrine_Query::create()
      ->from('tdArticle a')
      ->select($fields)
      ->orderBy('a.created_at DESC')
      ->leftJoin('a.Author u')
      ->leftJoin('u.Profile p')
      ->limit($count);
  }

  /**
   * Returns DQL query retrieving an article given by the id parameter.
   *
   * @param Integer $id - id of the article
   * @return Doctrine_Query
   */
  static public function getArticleWithAuthorByIdQuery($id)
  {
    $fields = 'a.id, a.text, a.title, a.image, a.created_at, a.updated_at, ';
    $fields .= 'CONCAT(p.first_name, " ", p.last_name) as author_name';
    return Doctrine_Query::create()
      ->from('tdArticle a')
      ->select($fields)
      ->where('a.id = ?', $id)
      ->leftJoin('a.Author u')
      ->leftJoin('u.Profile p');
  }

  /**
   * Returns DQL query retrieving all active articles.
   *
   * @return Doctrine_Query
   */
  static public function getActiveArticlesQuery()
  {
    return Doctrine_Query::create()
      ->from('tdArticle a')
      ->where('a.active = "1"');
  }

  /**
   * Returns DQL query retrieving articles selected by ids.
   *
   * @param Array $ids - Identifiers of selected articles.
   * @return Doctrine_Query
   */
  static public function getSelectedArticlesQuery($ids)
  {
    return Doctrine_Query::create()
      ->from('tdArticle a')
      ->whereIn('a.id', $ids);
  }
}