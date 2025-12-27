<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Html\RadioElement as BaseElement;

class RadioElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('form-check-input');
        $this->setAttribute('type', 'radio');
    }
}
