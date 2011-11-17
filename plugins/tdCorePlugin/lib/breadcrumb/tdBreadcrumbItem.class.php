<?php

/**
 * tdBreadcrumbItem class.
 *
 * Class representing a single item in the breadcrumbs.
 *
 * @package    plugin
 * @subpackage tdCorePlugin
 * @class      tdBreadcrumbItem
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 */
class tdBreadcrumbItem
{
  protected $text, $uri, $options;
    
  /**
   * Constructor.
   */    
  public function __construct($text, $uri = null, $options = array())
  {
    $this->text = $text;
    $this->uri = $uri;
    $this->options = $options;
  }
  
  /**
   * Retrieve the text of the item.
   */
  public function getText()
  {
    return $this->text;
  }

  /**
   * Retrieve the uri of the item.
   */  
  public function getUri()
  {
    return $this->uri;
  }
  
  /**
   * Retrieve the options of the item.
   */  
  public function getOptions()
  {
    return $this->options;
  }
}
