<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Element\Html\TabContentElement as BaseElement;

class TabContentElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->prependClass('tab-content');
    }
}
