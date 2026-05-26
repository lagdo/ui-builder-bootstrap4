<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\DropdownMenuComponent as BaseComponent;

class DropdownMenuComponent extends BaseComponent
{
    /**
     * @return string
     */
    protected function tagName(): string
    {
        return 'div';
    }

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('dropdown-menu');
    }
}
