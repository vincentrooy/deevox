<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfForkedDoctrineApplyPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfThumbnailPlugin');
    $this->enablePlugins('sfJqueryReloadedPlugin');
    $this->enablePlugins('sfErrorNotifierPlugin');
    $this->enablePlugins('sfCartPlugin');
    $this->enablePlugins('tdCorePlugin');
    $this->enablePlugins('tdBlogPlugin');
    $this->enablePlugins('vjCommentPlugin');
    $this->enablePlugins('lapeGravatarPlugin');
    $this->enablePlugins('tdAudioPlugin');
  }
}
