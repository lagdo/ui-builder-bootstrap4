<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Element\Html\BreadcrumbItemElement as BaseElement;

class BreadcrumbItemElement extends BaseElement
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->prependClass('breadcrumb-item');
    }
}
