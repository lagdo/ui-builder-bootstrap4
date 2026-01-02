<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\DropdownComponent as BaseComponent;

class DropdownComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('btn-group');
        $this->element()->setAttribute('role', 'group');
    }
}
