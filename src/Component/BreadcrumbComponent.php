<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\BreadcrumbComponent as BaseComponent;

class BreadcrumbComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('breadcrumb');
        $this->addWrapper('nav', ['aria-label' => 'breadcrumb']);
    }
}
