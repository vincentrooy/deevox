<?php

class tdBreadcrumbComponents extends sfComponents
{
  public function executeDisplay()
  {
    $tdBreadcrumb = tdBreadcrumb::getInstance();

    if (isset($this->root))
      $tdBreadcrumb->setRoot($this->root['text'], $this->root['uri'], isset($this->root['options']) ? $this->root['options'] : array());

    if (!isset($this->offset))
      $this->offset = 0;

    $this->items = $tdBreadcrumb->getItems($this->offset);
  }
}
