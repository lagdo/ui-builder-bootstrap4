<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Element\Html\PaginationElement as BaseElement;

class PaginationElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('pagination');
        $this->addWrapper('nav', ['aria-label' => '']);
    }
}
