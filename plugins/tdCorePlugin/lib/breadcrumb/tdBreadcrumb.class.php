<?php

/**
 * tdBreadcrumb class.
 *
 * Class managing breadcrumbs.
 *
 * @package    plugin
 * @subpackage tdCorePlugin
 * @class      tdBreadcrumb
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 */
class tdBreadcrumb
{
  static $instance = null;
  protected $items = array();

  /**
   * Constructor.
   */
  protected function __construct()
  {
    $this->setRoot('Home', '@homepage');
  }

  /**
   * Listens to the template.filter_parameters event.
   *
   * @param sfEvent $event - An sfEvent instance
   * @param array $parameters - An array of template parameters to filter
   * @return array - The filtered parameters array
   */
  public static function filterTemplateParameters(sfEvent $event, $parameters)
  {
    $parameters['breadcrumbs'] = tdBreadcrumb::getInstance();
    return $parameters;
  }

  /**
   * Add an item.
   *
   * @param string $text
   * @param string $uri
   * @param array $options
   */
  public function addItem($text, $uri = null, $options = array())
  {
    array_push($this->items, new tdBreadcrumbItem($text, $uri, $options));
  }

  /**
   * Delete all existings items.
   */
  public function clearItems()
  {
    $this->items = array();
  }

  /**
   * Get the unique tdBreadcrumb instance (singleton).
   * 
   * @return tdBreadcrumb
   */
  public static function getInstance()
  {
    if (is_null(self::$instance))
      self::$instance = new tdBreadcrumb();

    return self::$instance;
  }

  /**
   * Retrieve an array of BreadcrumbItem.
   *
   * @param int $offset
   * @return array
   */
  public function getItems($offset = 0)
  {
    return array_slice($this->items, $offset);
  }

  /**
   * Redefine the root item.
   *
   * @param string $text
   * @param string $uri
   * @param array $options
   */
  public function setRoot($text, $uri, $options = array())
  {
    $this->items[0] = new tdBreadcrumbItem($text, $uri, $options);
  }
}
