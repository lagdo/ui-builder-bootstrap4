<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Element\Html\RadioElement as BaseElement;

class RadioElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->setAttribute('type', 'radio');
    }
}
