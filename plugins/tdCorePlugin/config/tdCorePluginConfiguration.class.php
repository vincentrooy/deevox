<?php
/**
 * tdCorePluginConfiguration.class
 */

/**
 * tdCorePluginConfiguration
 *
 * @package   tdCorePlugin
 * @author    Tomasz Ducin <tomasz.ducin@gmail.com>
 */
class tdCorePluginConfiguration extends sfPluginConfiguration
{
  /**
   * Initialize
   */
  public function initialize()
  {
    // short description sign count
    sfConfig::set('td_short_text_sign_count', 500);

    $this->dispatcher->connect('template.filter_parameters', array('tdBreadcrumb', 'filterTemplateParameters'));
  }
}
