<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\PaginationComponent as BaseComponent;

class PaginationComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('pagination');
        $this->addWrapper('nav', ['aria-label' => '']);
    }
}
